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

class cmsWidget extends cmsBase {

    private $widgetPath = '';
    private $widgetName = '';
    protected $parameters = array();

    public function setWidgetPath($widgetName) {
        //here will be logic to set path to widget file which is extending CmsWidget class.
        $this->widgetPath = 'extensions/widgets/' . $widgetName . '/';
        $this->widgetName = $widgetName;
    }

    public function getWidgetPath() {
        return $this->widgetPath;
    }

    public function display() {
        echo 'this will be default output of widget if this function is not overrided by derived class';
    }

    public function run($widgetName, $params) {// this function will be called by template function class to display widget
        $this->parameters = $params;
        $this->setWidgetPath($widgetName);
        $this->display();
    }

}
