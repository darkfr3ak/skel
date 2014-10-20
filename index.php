<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //error_reporting(0);
        require_once "app/classes/TemplateFunctions.class.php";
        $tpl = new TemplateFunctions();
        $tpl->setWidget('sidebarPosition', 'datetime');
        $tpl->setWidget('logoPosition', 'logo', array('hello_to' => 'MyCms'));
        $tpl->show();
        // put your code here
        ?>
    </body>
</html>
