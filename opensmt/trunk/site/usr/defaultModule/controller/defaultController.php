<?php
/*
 * @copyright 2007-2009 Leaf-hp.com All rights reserved.
 * See cpyright.txt for copyright notices and details.
 */
class defaultController extends K980K_Controller_Action_Smarty {
    public function defaultAction() {
        /*@var $view Smarty*/     
     
       
       $this->display('index.html');
      
        //echo '<pre>',print_r($this),'</pre>';
    
      //
    }
    public function testAction(){

       $this->display('index.html');
    }
}
?>
