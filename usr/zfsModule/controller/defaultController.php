<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of defaultController
 *
 * @author Hotaru
 */
class defaultController  extends K980K_Controller_Action_Smarty {
    public $menucurrent = 'zfs';
    public $menuopen = 'zfs';
    public function  __construct($options,$extendData) {       
       parent::__construct($options, $extendData);
       $view = $this->getViewInstance();
       $view->addTitle('zfs');
    }
    public function defaultAction() {
        exec('passwd -a root',$a,$b);
        var_dump($a,$b);
    }
    //put your code here

    public function get_zfs_list() {
        $shell = new K980K_Shell();
        $return = $shell->exec('pfexec zfs list -Ho name');
        return $return;
    }

    public function get_zfs_attr() {
        //$shell = new K980K_Shell();
        //$return = $shell->exec("zfs list -o all");
        $return = array();
        array_push($return, "all");
        array_push($return, "name");
        array_push($return, "aclinherit");
        array_push($return, "aclmode");
        array_push($return, "atime");
        array_push($return, "available");
        array_push($return, "checksum");
        array_push($return, "compression");
        array_push($return, "compressratio");
        array_push($return, "creation");
        array_push($return, "devices");
        array_push($return, "exec");
        array_push($return, "mounted");
        array_push($return, "mountpoint");
        array_push($return, "origin");
        array_push($return, "quota");
        array_push($return, "readonly");
        array_push($return, "recordsize");
        array_push($return, "referenced");
        array_push($return, "reservation");
        array_push($return, "sharenfs");
        array_push($return, "setuid");
        array_push($return, "snapdir");
        array_push($return, "type");
        array_push($return, "used");
        array_push($return, "volsize");
        array_push($return, "volblocksize");
        array_push($return, "zoned");
        return $return;
    }

    public function get_zfssnapshot_info() {
        $shell = new K980K_Shell();
        $return = $shell->exec("pfexec zfs list -Ht snapshot");
        $snapshot_list = array();
        foreach ($return as $eachLine) {
            $parts = explode("\t", $eachLine);
            $list = array();
            foreach ($parts as $part) {
                array_push($list, $part);
            }
            $snapshot_list[] = $list;
        }
        return $snapshot_list;
    }

    public function get_zfssnapshot_list() {
        $shell = new K980K_Shell();
        $return = $shell->exec("pfexec zfs list -Ht snapshot -o name");
        return $return;
    }

    public function zfsinfoAction() {
	$shell = new K980K_Shell();
	$view = $this->getViewInstance();
	$viewOptions = $this->getViewOptions();
	$return = $shell->exec('pfexec zfs list -H');

	$myArray = array();
	for ($i = 0; $i < count($return); $i++) {
		$myArray[$i] = array();
		$parts = explode("\t", $return[$i]);
		foreach ($parts as $part) {
			array_push($myArray[$i], $part);
		}
	}
	//var_dump($myArray);

	$view->assign('myArray', $myArray);
	$view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
	$view->assign('tplfile', 'element/zfsinfo.html');
	$view->assign('subaction', 'zfsinfo');
	
	$view->addTitle('zfs info');
	$this->display();
    }

    public function zfscreateAction() {
        $view = $this->getViewInstance();
	$viewOptions = $this->getViewOptions();

        $request = new K980K_Request();

        $zfs_name = $this->get_zfs_list();
        $view->assign('zfsName', $zfs_name);

        if ($request->isPost()) {
            $shell = new K980K_Shell();
            //var_dump($_POST);
            $father_name = $_POST["zpool_name"];
            $name = $_POST["zfs_name"];
            $arg = "$father_name/$name";
            var_dump($arg);
            if ($_POST[op_type] == "create") $return = $shell->exec("pfexec zfs create", $arg);
            else if ($_POST[op_type] == "destroy") $return = $shell->exec("pfexec zfs destroy", $arg);
                 else $return = $shell->exec("pfexec zfs rename", $arg);
            if ($return != null) $execMessage = $return;
            else $execMessage = "Created Successful!";
            $view->assign('execMessage', $execMessage);
        }

        $view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
	$view->assign('tplfile', 'element/zfscreate.html');
	$view->assign('subaction', 'zfscreate');

	$view->addTitle('zfs create');
	$this->display();
    }

    public function zfsqueryAction() {
        $view = $this->getViewInstance();
	$viewOptions = $this->getViewOptions();

        $zpool_name = $this->get_zfs_list();
        $view->assign("zfsName", $zpool_name);

        $request = new K980K_Request();

        if ($request->isPost()) {
            $shell = new K980K_Shell();
            $zfs_attr = $this->get_zfs_attr();
            $attrlist = " -o ";
            foreach ($zfs_attr as $attr) {
                if (isset($_POST[$attr])) {
                    $attrlist = $attrlist.$attr.",";
                }
            }
            $pool_name = $_POST["zpool_name"];
            if (isset($_POST["recursive"])) $rec = "-r";
            else $rec = "";
            $type = $_POST["type"];
            $arg = $rec." -t ".$type.$attrlist." ".$pool_name;
            $return = $shell->exec("pfexec zfs list", $arg);
            $execMessage = $return;
            $view->assign("execMessage", $execMessage);
            //var_dump($arg);
        }

        $view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
	$view->assign('tplfile', 'element/zfsquery.html');
	$view->assign('subaction', 'zfsquery');

	$view->addTitle('zfs query');
	$this->display();
    }

    public function zfssnapshotAction() {
        $view = $this->getViewInstance();
	$viewOptions = $this->getViewOptions();

        $zpool_name = $this->get_zfs_list();
        $view->assign("zfsName", $zpool_name);
       
        //var_dump($zfs_snapshot);
        $zfs_snapshot_list = $this->get_zfssnapshot_list();

        $request = new K980K_Request();
        if ($request->isPost()) {
            $shell = new K980K_Shell();
            $flag = 0;
            for ($i = 0; $i < count($zfs_snapshot_list); $i++) {
                if (isset($_POST["$i"])) {
                    $flag = 1;
                    break;
                }
            }
            $return = array();
            if ($flag == 1) {
                //var_dump($_POST);
                $arg = $zfs_snapshot_list[$i];
                var_dump($arg);
                $return = $shell->exec("pfexec zfs destroy", $arg);
            }
            else {
                if (isset($_POST["Submit"])) {
                //var_dump($_POST);
                $zfs_name = $_POST["zfs_name"];
                $snapshot_name = $_POST["snapshot_name"];
                $arg = "$zfs_name@$snapshot_name";
                //var_dump($arg);
                $return = $shell->exec("pfexec zfs snapshot", $arg);
                //var_dump($_POST);
                }
                else {
                    var_dump($_POST);
                    $snapshot = $_POST["snapshot_name"];
                    $arg = $snapshot;
                    $return = $shell->exec("pfexec zfs rollback -r", $arg);
                }
            }
            //var_dump($return);
            //var_dump(count($return));
            if (count($return) == 0) $execMessage = "Successful!";
            else $execMessage = $return;
            //var_dump($execMessage);
            $view->assign('execMessage', $execMessage);
        }
        $zfs_snapshot_info = $this->get_zfssnapshot_info();
        $view->assign("myArray", $zfs_snapshot_info);
        $zfs_snapshot_list = $this->get_zfssnapshot_list();
        $view->assign("zfssnapshot", $zfs_snapshot_list);
        $view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
	$view->assign('tplfile', 'element/zfssnapshot.html');
	$view->assign('subaction', 'zfssnapshot');

	$view->addTitle('zfs snapshot');
	$this->display();
    }

}
?>
