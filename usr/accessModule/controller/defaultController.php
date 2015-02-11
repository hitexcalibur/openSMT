<?php
/*
 * @copyright 2007-2009 Leaf-hp.com All rights reserved.
 * See cpyright.txt for copyright notices and details.
 */
class userInfo{
    public $username;
    public $uid;
    public $userGid;
    public $comment;
    public $homeDir;
    public $shell;

    function  __construct($n, $id, $gid, $c, $dir, $sh){
	$this->username = $n;
	$this->uid = $id;
        $this->userGid = $gid;
	$this->comment = $c;
	$this->homeDir = $dir;
	$this->shell = $sh;
    }

    public function getMember() {
        $return = array();
        array_push($return, $this->username);
        array_push($return, $this->uid);
        array_push($return, $this->userGid);
        array_push($return, $this->comment);
        array_push($return, $this->homeDir);
        array_push($return, $this->shell);
        return $return;
    }
}

class defaultController extends K980K_Controller_Action_Smarty {
    public $menucurrent = 'access';
    public $menuopen = 'access';
    private static $group_count=0;
    private static $postFlag = 0;
    private static $groupPostFlag = 0;

    public function  __construct($options,$extendData) {       
       parent::__construct($options, $extendData);
       $view = $this->getViewInstance();
       $view->addTitle('access');
    }

    private function getUsers() {
        $USERS_PRE = array();
        $USERS_PRE = file("/etc/passwd");
            // the lines in /etc/passwd are like this
            // username:passwd:UID:GID:Comment:HOME dir:shell
        $USERS = array();
        $userTemp = array();
        for ($lineCount = 1; $lineCount <= count($USERS_PRE); $lineCount++ ){
            if($lineCount >= 22){
                $userTemp = explode(":", $USERS_PRE[$lineCount]);
                $userTemp[count($userTemp)-1] = substr($userTemp[count($userTemp)-1], 0, -1);
                $userInstance = new userInfo($userTemp[0],$userTemp[2],$userTemp[3],$userTemp[4],$userTemp[5],$userTemp[6]);
                $USERS[] = $userInstance->getMember();
            }
        }
        return $USERS;
    }

    private function getUser($username){
        //if($username == NULL)
           // die("where is username");
        $userInfo = $this->getUsers();
        foreach( $userInfo as $ui )
            if( $ui[0] == $username )
                return $ui;
    }

   /* private function getPassword(){

    }*/

    private function getUsernames() {
        $userInfo = $this->getUsers();
        $names = array();
        foreach( $userInfo as $ui)
            $names[] = $ui[0];
        return $names;
    }

    private function getGroups() {
        $GROUPS_PRE = array();
	$GROUPS_PRE = file("/etc/group");
	if ( empty( $GROUPS_PRE ) )
		die("sth is wrong with open /etc/group");

	$GROUP = array();
	$groupTemp = array();
        #var_dump($GROUPS_PRE);
	foreach ( $GROUPS_PRE as $groupDetail ){
		$groupTemp = explode(":", $groupDetail);
                $groupTemp[count($groupTemp)-1] = substr($groupTemp[count($groupTemp)-1], 0, -1);
		// the lines in /etc/group are like this
		// groupname:group-password:GID:username-list
                $GROUP[$groupTemp[2]] = $groupTemp[0];
	//	array_push( $GROUP_NAME, $group_temp[0]);
	//	array_push( $GID, $group_temp[2] );
	}
	self::$group_count = count($GROUP);
        return $GROUP;
    }

    public function userAction() {

	$shell = new K980K_Shell();
	$view = $this->getViewInstance();
	$viewOptions = $this->getViewOptions();

        $users = $this->getUsers();
        array_splice($users, -1, 1);

        $view->assign('users',$users);

        $request = new K980K_Request();
        if($request->isPost()){

            $usernameList = $this->getUsernames();
            foreach ($usernameList as $name) {
                if (isset($_POST[$name])) {
                    $targetName = $name;
                }
            }
            foreach( $users as $user ){
                if( $user[0] == $targetName)
                    $args = $user;
            }
            self::$postFlag = 1;
            $this->edituserAction($args);
        }
        else {
            $view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
            $view->assign('tplfile','element/user.html');
            $view->assign('subaction', 'user');
            $view->addTitle('User Admin');
            $this->display();
        }
    }

    public function edituserAction($userEdited){
            // $userEdited includes a user's info like a userInfo class but a array
        $view = $this->getViewInstance();
        $viewOptions = $this->getViewOptions();

        $groupInfo = $this->getGroups();
        $view->assign('userEdited',$userEdited);
        $view->assign('groupInfo',$groupInfo);
        $primaryGroupName = $groupInfo[$userEdited[2]];
        $view->assign('primaryGroupName',$primaryGroupName);
            #var_dump($groupInfo);
            // args include user information

        $request = new K980K_Request();
        if($request->isPost() && self::$postFlag){

            $shell = new K980K_Shell();
            $username = $_POST["username"];
            $userModified = $this->getUser($username);
                #var_dump($username);
                #var_dump($userModified);
            $userid = $_POST["userid"];
            $password = $_POST["password"];
            $passwordConfirm = $_POST["passwordConfirm"];
            $pGroup = $_POST["pGroup"];
            $comment = $_POST["comment"];
            $homedir = $_POST["homedir"];
            $defaultShell = $_POST["defaultShell"];
            $additionalgroup = $_POST["additionalgroup"];
                #var_dump($addvar_dumpitionalgroup);

            $editUserError = false;
            $modify = false;
            if($userid != $userModified[1]){
                $modify = true;
                $usermodArgs .= "-u $userid ";
            }
            if($pGroup != $userModified[2]){
                $modify = true;
                $usermodArgs .= "-g $pGroup ";
            }
            if($comment != $userModified[3]){
                $modify = true;
                $usermodArgs .= "-c $comment ";
            }
            if($homedir != $userModified[4]){
                $modify = true;
                $usermodArgs .= "-d $homedir -m ";
            }
            if($defaultShell != $userModified[5]){
                $modify = true;
                $usermodArgs .= "-s $defaultShell ";
            }
            if(! empty($additionalgroup) ){
                $modify = true;
                for( $i = 0; $i < count($additionalgroup); $i++ ){
                    if($i == (count($additionalgroup)-1))
                        $agroups .= "$agroup";
                    else
                        $agroups .= "$agroup,";
                }
                $usermodArgs .= "-G $agroups ";
            }
            $usermodArgs .= "$userModified[0]";
                
                //$passwordArgs = 
            #var_dump($usermodArgs);
            if($modify){
                $return = $shell->exec('pfexec usermod', $usermodArgs);
                if ($return != null) $execMessage = $return;
                else $execMessage = "Modified Successful!";
                $view->assign('execMessage', $execMessage);
            }

            self::$postFlag = 0;
        }

        $view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
        $view->assign('tplfile','element/edituser.html');
        $view->addTitle('Edit User Profile');
        $this->display();
    }
        
    public function groupAction() {

	$shell = new K980K_Shell();
	$view = $this->getViewInstance();
	$viewOptions = $this->getViewOptions();

        $request = new K980K_Request();
        $groups = $this->getGroups();
        
        $view->assign('groups',$groups);
        
        if($request->isPost()){
            $groupInfo = $this->getGroups();
            foreach ($groupInfo as $gid => $gname) {
                if (isset($_POST[$gid])) {
                    $args[$gid] = $gname;
                }
            }

            self::$groupPostFlag = 1;
            $this->editgroupAction($args);
        }
        else{
            $view->assign('subaction', 'group');
            $view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
            $view->assign('tplfile','element/group.html');
            $view->addTitle('Group Admin');
            $this->display();
        }
    }

    public function editgroupAction($groupEdited){
        $view = $this->getViewInstance();
        $viewOptions = $this->getViewOptions();

        #var_dump($groupEdited);
        foreach( $groupEdited as $id => $name ){
            $gid = $id;
            $gname = $name;
        }
        $view->assign("gid",$gid);
        $view->assign("gname",$gname);
        $request = new K980K_Request();

        if($request->isPost() && self::$groupPostFlag ){
            $shell = new K980K_Shell();
            $groupname = $_POST["groupname"];
            $originname = $_POST["originname"];
            $originid = $_POST["originid"];
            #var_dump($originname);
            $groupid = $_POST["groupid"];
            $isdup = $_POST["isdup"];

            $modify = false;
            if($groupid != $originid){
                $modify = true;
                $groupmodArgs .= "-g $groupid ";
            }

            if($isdup == 'Yes'){
                $modify = true;
                $groupmodArgs .= "-o ";
            }

            if($groupname != $originname){
                $modify = true;
                $groupmodArgs .= "-n $groupname $originname";
            }
            else
                $groupmodArgs .= "$originname";

            var_dump($modify);
            var_dump($groupmodArgs);
            if($modify){

                $return = $shell->exec('pfexec groupmod', $groupmodArgs);
                if ($return != null) $execMessage = $return;
                else $execMessage = "Modified Successful!";
                $view->assign('execMessage', $execMessage);
            }
            self::$groupPostFlag = 0;
        }

	$view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
        $view->assign('tplfile','element/editgroup.html');
        $view->addTitle('Edit Group');
        $this->display();
    }
/*
    private function getgroupid($gname){
        $allGroup = getGroups();
        foreach($allGroup as $id => $n){
            if($n == $gname)
                return $id;
        }
    }*/
}
?>
