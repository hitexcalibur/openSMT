<?php
Class defaultController extends K980K_Controller_Action_Smarty {
	public $menucurrent = 'service';
	public $menuopen = 'service';
	public function __construct($options, $extendData) {
		parent::__construct($options, $extendData);
		$view = $this->getViewInstance();
		$view->addTitle('service');
	}
	public function defaultAction() {
		exc('ls', $a, $b);
		var_dump($a, $b);
	}
	//put your code here

	public function ftpmanagementAction() {
		$request = new K980K_Request();
		$view = $this->getViewInstance();
		$viewOptions = $this->getViewOptions();
		$shell = new K980K_Shell();

		if($request->isPost()) {
//			var_dump($_POST);
			$port = $_POST["port"];
			$clients_num = $_POST["clients_num"];
			$max_conn = $_POST["max_conn"];
			$max_login = $_POST["max_login"];
			$timeout = $_POST["timeout"];
			$permit_root_login = $_POST["permit_root_login"];
			$Banner = $_POST["Banner"];
			$execMessage = "";
			$args1 = '-i \'s/^[ \t]*loginfails[ \t]*[0-9]*'
				.'/ loginfails\t'."$max_login".'/g\' /etc/ftpd/ftpaccess 2>&1';
			$return1 = $shell->exec('pfexec /usr/gnu/bin/sed',$args1);
			$execMessage .= "$return1\n";

			$output = $shell->exec("pfexec sed -n '/^[ \t]*banner[ \t]*/p' /etc/ftpd/ftpaccess");
			$blocks = explode("\t", $output[0]);
			$filename = trim($blocks[2]);
			$bannerfile = fopen($filename, "w");
			fwrite($bannerfile, $_POST["Banner"], 1024);
			var_dump($_POST["Banner"]);
			fclose($bannerfile);
		}

       	    	$loginLines = $shell->exec("pfexec sed -n '/^[ \t]*loginfails[ \t]*/p' /etc/ftpd/ftpaccess");
            	$originLogins = explode("\t", $loginLines[0]);
            	$originLogin = trim($originLogins[1]);
		$view->assign('originLogin',$originLogin);
	
		$output = $shell->exec("pfexec sed -n '/^[ \t]*banner[ \t]*/p' /etc/ftpd/ftpaccess");
		$blocks = explode("\t", $output[0]);
		$filename = trim($blocks[2]);
		$bannerfile = fopen($filename, "r");
		$obanners = array();
		$line;
		while(true) {
			$line = fgets($bannerfile, 1024);
			if($line) 
		}
		$view->assign('subaction', 'ftpmanagement');
		$view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
		$view->assign('tplfile', 'element/ftpmanagement.html');
		$view->addTitle('ftpmanagement');
		$this->display();
	}

	public function sshmanagementAction() {
		$request = new K980K_Request();
		$view = $this->getViewInstance();
		$viewOptions = $this->getViewOptions();
		$shell = new K980K_Shell();
		$view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
		$view->assign('tplfile', 'element/sshmanagement.html');
		$view->addTitle('sshmanagement');
		$this->display();
	}

	public function smbmanagementAction() {
            $request = new K980K_Request();
            
            $view = $this->getViewInstance();
            $viewOptions = $this->getViewOptions();

            if($request->isPost()){
                $shell = new K980K_Shell();
                $netbios = $_POST["netbios"];
                $workgroup = $_POST["workgroup"];
                $security = $_POST["security"];
                $uCharset = $_POST["unixCharset"];
                $dCharset = $_POST["dosCharset"];
                $disCharset = $_POST["displayCharset"];
                $guestAccount = $_POST["guestAccount"];

                $oNetbios = $_POST["originNetbios"];
                $oWorkgroup = $_POST["originWorkgroup"];
                $oSecurity = $_POST["originSecurity"];
                $oUnixcharset = $_POST["originUnixcharset"];
                $oDoscharset = $_POST["originDoscharset"];
                $oDisplaycharset = $_POST["originDisplaycharset"];
                $oGuestaccount = $_POST["originGuestaccount"];

                $execMessage = "";
                if($netbios != $oNetbios){
                    $args1 = '-i \'s/^[ \t]*netbios[ \t]*=[ \t]*'."$oNetbios"
                            .'/    netbios = '."$netbios".'/g\' /etc/sfw/smb.conf 2>&1';
                    $return1 = $shell->exec('pfexec /usr/gnu/bin/sed',$args1);
                    var_dump($return1);
                    if ($return1 != null)
                        $execMessage .= "$return1\n";
                }
                var_dump($args1);


                if($workgroup != $oWorkgroup){
                    $args2 = '-i \'s/^[ \t]*workgroup[ \t]*=[ \t]*'."$oWorkgroup"
                            .'/    workgroup = '."$workgroup".'/g\' /etc/sfw/smb.conf';
                    $return2 = $shell->exec('pfexec /usr/gnu/bin/sed',$args2);
                    if ($return2 != null)
                        $execMessage .= "$return2\n";
                }

                if($security != $oSecurity){
                    $args3 = '-i \'s/^[ \t]*security[ \t]*=[ \t]*'."$oSecurity"
                            .'/    security = '."$security".'/g\' /etc/sfw/smb.conf';
                    $return3 = $shell->exec('pfexec /usr/gnu/bin/sed',$args3);
                    if ($return3 != null)
                        $execMessage .= "$return3\n";
                }

                if($uCharset != $oUnixcharset){
                    $args4 = '-i \'s/^[ \t]*unix charset[ \t]*=[ \t]*'."$oUnixcharset"
                            .'/    unix charset = '."$uCharset".'/g\' /etc/sfw/smb.conf';
                    $return4 = $shell->exec('pfexec /usr/gnu/bin/sed',$args4);
                    if ($return4 != null)
                        $execMessage .= "$return4\n";
                }

                if($dCharset != $oDoscharset){
                    $args5 = '-i \'s/^[ \t]*dos charset[ \t]*=[ \t]*'."$oWorkgroup"
                            .'/    dos charset = '."$workgroup".'/g\' /etc/sfw/smb.conf';
                    $return5 = $shell->exec('pfexec /usr/gnu/bin/sed',$args5);
                    if ($return5 != null)
                        $execMessage .= "$return5\n";
                }

                if($disCharset != $oDisplaycharset){
                    $args6 = '-i \'s/^[ \t]*display charset[ \t]*=[ \t]*'."$oDisplaycharset"
                            .'/    display charset = '."$disCharset".'/g\' /etc/sfw/smb.conf';
                    $return6 = $shell->exec('pfexec /usr/gnu/bin/sed',$args6);
                    if ($return6 != null)
                        $execMessage .= "$return6\n";
                }
                
                if($guestAccount != $oGuestaccount){
                    $args7 = '-i \'s/^[ \t]*[ \t]*guest account=[ \t]*'."$oGuestaccount"
                            .'/    guest account = '."$guestAccount".'/g\' /etc/sfw/smb.conf';
                    $return7 = $shell->exec('pfexec /usr/gnu/bin/sed',$args7);
                    if ($return7 != null) 
                        $execMessage .= "$return7\n";
                }
                
                if(empty ($execMessage))
                    $execMessage = "Restart Done!";
 		$view->assign('execMessage', $execMessage);
            }

            $shell = new K980K_Shell();
            $doscharset = array('UTF-8','CP936','ASCII');
            $unixcharset = array('UTF-8','gbk','gb2312','ASCII');
            $displaycharset = array('UTF-8','gbk','gb2312','ASCII');
            $view->assign('doscharset',$doscharset);
            $view->assign('unixcharset',$unixcharset);
            $view->assign('displaycharset',$displaycharset);


            $netbiosLines = $shell->exec("pfexec sed -n '/^[ \t]*netbios[ \t]*=/p' /etc/sfw/smb.conf");
            $originNetbioss = explode("=", $netbiosLines[0]);
            $originNetbios = trim($originNetbioss[1]);
            $view->assign('originNetbios',$originNetbios);
                #var_dump($originNetbios);
                // now originnetbios[1] is the value we want. The following arguments are of the same way.

            $workgroupLines = $shell->exec("pfexec sed -n '/^[ \t]*workgroup[ \t]*=/p' /etc/sfw/smb.conf");
            $originWorkgroups = explode("=", $workgroupLines[0]);
            $originWorkgroup = trim($originWorkgroups[1]);
            $view->assign('originWorkgroup',$originWorkgroup);
                #var_dump($originWorkgroup);

            $securityLines = $shell->exec("pfexec sed -n '/^[ \t]*security[ \t]*=/p' /etc/sfw/smb.conf");
            $originSecurities = explode("=", $securityLines[0]);
            $originSecurity = trim($originSecurities[1]);
            $view->assign('originSecurity',$originSecurity);
            #var_dump($originSecurity);

            $doscharsetLines = $shell->exec("pfexec sed -n '/^[ \t]*dos charset[ \t]*=/p' /etc/sfw/smb.conf");
            $originDoscharsets = explode("=", $doscharsetLines[0]);
            $originDoscharset = trim($originDoscharsets[1]);
            $view->assign('originDoscharset',$originDoscharset);
            #var_dump($originDoscharset);

            $unixcharsetLines = $shell->exec("pfexec sed -n '/^[ \t]*unix charset[ \t]*=/p' /etc/sfw/smb.conf");
            $originUnixcharsets = explode("=", $unixcharsetLines[0]);
            $originUnixcharset = trim($originUnixcharsets[1]);
            $view->assign('originUnixcharset',$originUnixcharset);

            $displaycharsetLines = $shell->exec("pfexec sed -n '/^[ \t]*display charset[ \t]*=/p' /etc/sfw/smb.conf");
            $originDisplaycharsets = explode("=", $displaycharsetLines[0]);
            $originDisplaycharset = trim($originDisplaycharsets[1]);
            $view->assign('originDisplaycharset',$originDisplaycharset);

            $guestaccountLines = $shell->exec("pfexec sed -n '/^[ \t]*guest account[ \t]*=/p' /etc/sfw/smb.conf");
            $originGuestaccounts = explode("=", $guestaccountLines[0]);
            $originGuestaccount = trim($originGuestaccounts[1]);
            $view->assign('originGuestaccount',$originGuestaccount);
            #var_dump($originGuestaccount);


            $view->assign('subaction', 'smbmanagement');
            $view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
            $view->assign('tplfile', 'element/smbmanagement.html');
            $view->addTitle('smbmanagement');
            $this->display();
	}

	public function nfsmanagementAction() {
		$request = new K980K_Request();
		$view = $this->getViewInstance();
		$viewOptions = $this->getViewOptions();
		$shell = new K980K_Shell();

		$view->assign('subaction', 'nfsmanagement');
		$view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
		$view->assign('tplfile', 'element/nfsmanagement.html');
		$view->addTitle('nfsmanagement');
		$this->display();
	}
	public function httpmanagementAction() {
		$request = new K980K_Request();
		$view = $this->getViewInstance();
		$viewOptions = $this->getViewOptions();
		$shell = new K980K_Shell();
		
		$view->assign('subaction', 'httpmanagement');
		$view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
		$view->assign('tplfile', 'element/httpmanagement.html');
		$view->addTitle('httpmanagement');
		$this->display();
	}

	public function rsyncmanagementAction() {
		$request = new K980K_Request();
		$view = $this->getViewInstance();
		$viewOptions = $this->getViewOptions();
		$shell = new K980K_Shell();
		
		$view->assign('subaction', 'rsyncmanagement');
		$view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
		$view->assign('tplfile', 'element/rsyncmanagement.html');
		$view->addTitle('rsyncmanagement');
		$this->display();
	}
}	
?>
