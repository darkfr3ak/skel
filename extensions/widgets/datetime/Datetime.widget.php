<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'app/classes/cmsWidget.class.php';

class DatetimeWidget extends cmsWidget {

    public function display() {
        //echo 'Hello World!';
        $timestamp = time();
        $datum = date("d.m.Y - H:i", $timestamp);
        echo $datum;
        //here you can write a complete php application code to be displayed as widget.
    }

}
