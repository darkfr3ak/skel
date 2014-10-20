<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TemplateFunctions
 *
 * @author darkfr3ak
 */
require_once 'cmsBase.class.php';

class TemplateFunctions extends cmsBase {

    private $templateName = "default";
    private $widgetPositions = array(); //array which holds widget positions and widget names

    public function show() {
        require_once $this->getCurrentTemplatePath() . 'index.tpl.php';
    }

    public function getCurrentTemplatePath() {
        return "extensions/themes/" . $this->templateName . "/";
    }

    public function setTemplate($templateName = "") {
        $this->templateName = $templateName;
    }

    private function appOutput() {
        $appname = (isset($_REQUEST['app'])) ? $_REQUEST['app'] : 'default';
        require_once('extensions/modules/' . $appname . '/' . ucfirst($appname) . '.app.php');
        $application = ucfirst($appname) . 'Application';
        $app = new $application();
        $app->run();
    }

    private function widgetOutput($position = 'default') {
        if (!empty($this->widgetPositions[$position])) {
            $widgets = $this->widgetPositions[$position]; //gets all widgets in given position
            foreach ($widgets as $widgetObject) {//display each widget
                $widgetName = $widgetObject->name;
                $widgetParameters = $widgetObject->parameters;
                require_once('extensions/widgets/' . $widgetName . '/' . ucfirst($widgetName) . '.widget.php');
                $widgetClass = ucfirst($widgetName) . 'Widget';
                $widget = new $widgetClass();
                $widget->run($widgetName, $widgetParameters);
            }
        }
    }

    public function setWidget($position, $widgetName, $params = array()) {
        $widget = new StdClass;
        $widget->name = $widgetName;
        $widget->parameters = $params;
        //if there is no widget in position then create a new array
        if (empty($this->widgetPositions[$position])) {
            $this->widgetPositions[$position] = array($widget);
        }
        //if there is already a widget present in that position then just push new widget in array
        else {
            array_push($this->widgetPositions[$position], $widget);
        }
    }

}
