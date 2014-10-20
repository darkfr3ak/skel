<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Logo
 *
 * @author darkfr3ak
 */
require_once 'app/classes/cmsWidget.class.php';

class LogoWidget extends cmsWidget {

    //put your code here
    public function display() {
        $world = 'World!';
        // if parameters array is not empty in other words parameters do exists then assign variable $world a value by that parameter
        if (count($this->parameters) != 0) {
            $world = $this->parameters['hello_to'];
        }
        echo "Hello " . $world;
    }

}
