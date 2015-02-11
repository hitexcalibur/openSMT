<?php

class defaultController extends K980K_Controller_Action_Smarty {
    public $menucurrent = 'Share';
    public $menuopen = 'Share';
    private static $sambaPostflag = FALSE;
    public function  __construct($options,$extendData) {
       parent::__construct($options, $extendData);
       $view = $this->getViewInstance();
       $view->addTitle('Share');
    }
    
    public function sambaAction() {
        $view = $this->getViewInstance();
	$viewOptions = $this->getViewOptions();

        $request = new K980K_Request();

        $smbconf = file("/etc/sfw/smb.conf");

        $sharedDirSect = FALSE;


        if($request->isPost()){
            $shell = new K980K_Shell();
            $command = 'cat /etc/sfw/smb.conf |/usr/gnu/bin/egrep "^[ \t]*\[.*\]"';
            $allSections = $shell->exec( $command );
            #var_dump($return);

            foreach($allSections as $sec){
                $sn = ltrim($sec, "[");
                $sn = rtrim($sn, "]");
                if( isset($_POST[$sn]))
                    $target = $sn;
            }

            self::$sambaPostflag = TRUE;
            $this->editsambaAction($target);
        }

        else{
            foreach ($smbconf as $line){
                $dataline = trim($line);
                $firstchar = substr($dataline, 0, 1);

                // skip all comments
                if( $firstchar == '#' or $firstchar == ';' or empty($dataline))
                    continue;
                // deal with all sections head like [global] or [sthYouLike]
                if( $firstchar == '['){
                    // get section name, strip all '[' and ']'
                    $sectionName = ltrim($dataline, '[');
                    $sectionName = rtrim($sectionName, ']');
                    // skip system conf
                    if( $sectionName == 'global' or $sectionName == 'homes' or
                        $sectionName == 'printers'){
                        $sharedDirSect = FALSE;
                        continue;
                    }
                    // now the samba share directoris conf we need
                    else{
                        $sharedDirSect = TRUE;
                        $smbshare[$sectionName] = array();
                    }
                }
                elseif ( $sharedDirSect ){
                    $fields = explode('=', $dataline);
                    $fields[0] = trim($fields[0]);
                    $fields[1] = trim($fields[1]);
                    
                    $smbshare[$sectionName][$fields[0]] = $fields[1];
                }
            }

            $view->assign('smbshare',$smbshare);
            #var_dump($smbshare);
            $comm = 'comment';
            $pa = 'path';
            $browse = 'browseable';
            $view->assign('comm',$comm);
            $view->assign('pa',$pa);
            $view->assign('browse',$browse);


            $view->assign('subaction','samba');
            $view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
            $view->assign('tplfile', 'element/samba.html');
            $view->addTitle('samba');
            $this->display();
        }
    }

    public function editsambaAction($sharename) {
        $view = $this->getViewInstance();
	$viewOptions = $this->getViewOptions();
        $request = new K980K_Request();

        if($request->isPost() && self::$sambaPostflag){




            self::$sambaPostflag = FALSE;
        }


        $smbconf = fopen("/etc/sfw/smb.conf", "a+");

        if( $smbconf == false )
            die("sth is wrong\n");

        $sharedir = FALSE;
        while( !feof($smbconf )){
            $rawLine = fgets($smbconf);
            $dataline = trim($rawLine);
            $firstchar = substr($dataline, 0, 1);

            if( $firstchar == 'n' or $firstchar == ';' or empty($dataline))
                continue;
            if( $firstchar == '[' ){
                $sectionName = ltrim($dataline, '[');
                $sectionName = rtrim($sectionName, ']');
                if( $sectionName == 'global' or $sectionName == 'homes' or
                            $sectionName == 'printers' or $sectionName != $sharename){
                        $sharedir = FALSE;
                    continue;
                }
                elseif ( $sectionName == $sharename  ){
                    $sharedir = TRUE;
                }
            }
            elseif( $sharedir  ){
                $fields = explode('=', $dataline);
                $fields[0] = trim($fields[0]);
                $fields[1] = trim($fields[1]);
                $smbshare[$fields[0]] = $fields[1];
            }
        }
        #var_dump($smbshare);
        $view->assign('smbshare', $smbshare);
        $view->assign('sharename', $sharename);

        $comment = "comment";
        $path = "path";
        $public = "public";
        $readonly = "readonly";
        $browseable = "browseable";
        $guestok = "guest ok";
        $view->assign('comment', $comment);
        $view->assign('path', $path);
        $view->assign('public', $public);
        $view->assign('readonly', $readonly);
        $view->assign('directorymask', $directorymask);
        $view->assign('guestok', $guestok);

        // turn mask value into human readable format
        $csticky = (bool)substr($smbshare['create mask'],0,1);
        $dsticky = (bool)substr($smbshare['directory mask'],0,1);
        $view->assign('csticky',$csticky);
        $view->assign('dsticky',$dsticky);
        $cmask = (int)substr($smbshare['create mask'],1);
        $dmask = (int)substr($smbshare['directory mask'],1);

        var_dump($cmask & 2 );
        if( $cmask & 1)
            $cx = TRUE;
        if( $cmask & 2)
            $cw = TRUE;
        if( $cmask & 4)
            $cr = TRUE;
        if( $dmask & 1)
            $dx = TRUE;
        if( $dmask & 2)
            $dw = TRUE;
        if( $dmask & 4)
            $dr = TRUE;
        $view->assign('cx',$cx);
        $view->assign('cw',$cw);
        $view->assign('cr',$cr);
        $view->assign('dx',$dx);
        $view->assign('dw',$dw);
        $view->assign('dr',$dr);
        var_dump($cx);
        var_dump($cw);
        var_dump($cr);

        $view->assign('subaction','editsamba');
	$view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
	$view->assign('tplfile', 'element/editsamba.html');
	$view->addTitle('editsamba');
	$this->display();
        self::$sambaPostflag = FALSE;
    }
}
?>
