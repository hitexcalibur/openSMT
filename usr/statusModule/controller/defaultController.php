<?php
/*
 * @copyright 2007-2009 Leaf-hp.com All rights reserved.
 * See cpyright.txt for copyright notices and details.
 */
class defaultController extends K980K_Controller_Action_Smarty {
    public $menucurrent = 'status';
    public $menuopen = 'status';
    public function  __construct($options,$extendData) {
       parent::__construct($options, $extendData);
       $view = $this->getViewInstance();
       $view->addTitle('status');
    }

    public function systemAction(){
        $view = $this->getViewInstance();
	$viewOptions = $this->getViewOptions();

        $view->assign('subaction','system');
	$view->assign('_baseUrl', $viewOptions['template']['baseUrl']);
	$view->assign('tplfile', 'element/system.html');
	$view->addTitle('system');
	$this->display();
    }

}
?>
