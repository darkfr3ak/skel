<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $this->getCurrentTemplatePath(); ?>css/bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
            <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href="<?php echo $this->getCurrentTemplatePath(); ?>css/styles.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-static">
            <div class="container">
                <a class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="glyphicon glyphicon-chevron-down"></span>
                </a>
                <div class="nav-collapse collase">
                    <ul class="nav navbar-nav">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                    <ul class="nav navbar-right navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-search"></i></a>
                            <ul class="dropdown-menu" style="padding:12px;">
                                <form class="form-inline">
                                    <button type="submit" class="btn btn-default pull-right"><i class="glyphicon glyphicon-search"></i></button><input type="text" class="form-control pull-left" placeholder="Search">
                                </form>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> <i class="glyphicon glyphicon-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Profile</a></li>
                                <li class="divider"></li>
                                <li><a href="#">About</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav><!-- /.navbar -->

        <header class="masthead">
            <div class="container">
                <div class="row">
                    <div class="col col-sm-6">
                        <h1><a href="#" title="scroll down for your viewing pleasure"><?php echo $this->widgetOutput('logoPosition'); ?></a>
                            <p class="lead">2-column Layout + Theme for Bootstrap 3</p></h1>
                    </div>
                    <div class="col col-sm-6">
                        <div class="well pull-right">
                            <img src="//placehold.it/280x100/E7E7E7">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col col-sm-2">
                        <div id="sidebar">
                            Sidebar links
                        </div>
                    </div>
                    <div class="col col-sm-8">
                        <div class="panel">
                            <?php echo $this->appOutput(); ?>
                        </div>
                    </div>
                    <div class="col col-sm-2">
                        <div id="sidebar">
                            Sidebar rechts
                            <?php echo $this->widgetOutput('sidebarPosition'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <script src="<?php echo $this->getCurrentTemplatePath(); ?>js/jquery-2.1.1.min.js"></script>
            <script src="<?php echo $this->getCurrentTemplatePath(); ?>js/bootstrap.min.js"></script>
            <script src="<?php echo $this->getCurrentTemplatePath(); ?>js/scripts.js"></script>
    </body>
</html>
