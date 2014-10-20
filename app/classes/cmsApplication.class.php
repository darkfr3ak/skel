<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cmsApplication
 *
 * @author darkfr3ak
 */
require_once 'cmsBase.class.php';

class cmsApplication extends cmsBase {

    public function run() {
        $method = (isset($_REQUEST['task'])) ? $_REQUEST['task'] : 'display';
        $this->$method();
    }

    public function display() {
        echo "base display function";
    }

}
