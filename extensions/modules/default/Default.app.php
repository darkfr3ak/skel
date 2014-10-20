<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Default
 *
 * @author darkfr3ak
 */
require_once 'app/classes/cmsApplication.class.php';

class DefaultApplication extends CmsApplication {

    public function addcontent() {
        echo 'here add content functionality will takes place';
    }

    public function display() {
        echo 'it is default task of application';
    }

    public function anyothertask() {
        echo 'this is another task here can be written a complete php program against that task';
    }

}
