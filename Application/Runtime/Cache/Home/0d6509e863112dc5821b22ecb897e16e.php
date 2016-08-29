<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Dashboard - PixelAdmin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <!-- Open Sans font from Google CDN -->
    <link href="http://fonts.useso.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">

    <!-- Pixel Admin's stylesheets -->
    <link href="/Public/assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/Public/assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css">
    <link href="/Public/assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css">
    <link href="/Public/assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css">
    <link href="/Public/assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
    <script src="assets/javascripts/ie.min.js"></script>
    <![endif]-->
</head>
<body class="theme-default main-menu-animated main-navbar-fixed main-menu-fixed">
    <script>var init = [];</script>
        <div id="main-wrapper">
            <!-- #main-navbar -->
            <div id="main-navbar" class="navbar navbar-invers" role="'navigation">
                <button type="button" id="main-menu-toggle"><i class="navbar-icon fa fa-bars icon"></i><span class="hide-menu-text">HIDE MENU</span></button>
                <div class="navbar-inner">
                    <div class="navbar-header">
                        <!-- Logo -->
                        <a href="/" class="navbar-brand">
                            <div><img alt="Pixel Admin" src="/Public/assets/images/pixel-admin/main-navbar-logo.png"></div>
                            管理系统
                        </a>
                        <!-- Main navbar toggle -->
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>
                    </div>
                    <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="/">首页</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">其他菜单</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">First item</a></li>
                                    <li><a href="#">Second item</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Third item</a></li>
                                </ul>
                            </li>

                        </ul> <!-- / .navbar-nav -->
                        <div class="right clearfix">
                            <ul class="nav navbar-nav pull-right right-navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                                        <img src="/Public/assets/images/pixel-admin/avatar.png" alt="">
                                        <span>admin</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><span class="label label-warning pull-right">New</span>消息</a></li>
                                        <li><a href="#"><span class="badge badge-primary pull-right">New</span>通知</a></li>
                                        <li><a href="#"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;设置</a></li>
                                        <li class="divider"></li>
                                        <li><a href="pages-signin.html"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;退出</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- #main-menu -->
            <div id="main-menu" role="navigation">
                <div id="main-menu-inner">
                    
                        <ul class="navigation">
    <li>
        <a href="index.html"><i class="menu-icon fa fa-dashboard"></i><span class="mm-text">Dashboard</span></a>
    </li>
    <li class="mm-dropdown">
        <a href="#"><i class="menu-icon fa fa-th"></i><span class="mm-text">Layouts</span><span class="label label-warning">Updated</span></a>
        <ul>
            <li>
                <a tabindex="-1" href="layouts-grid.html"><span class="mm-text">Grid</span></a>
            </li>
            <li>
                <a tabindex="-1" href="layouts-main-menu.html"><i class="menu-icon fa fa-th-list"></i><span class="mm-text">Main menu</span><span class="label label-warning">Updated</span></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="stat-panels.html"><i class="menu-icon fa fa-tasks"></i><span class="mm-text">Stat panels</span></a>
    </li>
    <li>
        <a href="widgets.html"><i class="menu-icon fa fa-flask"></i><span class="mm-text">Widgets</span></a>
    </li>
    <li class="mm-dropdown">
        <a href="#"><i class="menu-icon fa fa-desktop"></i><span class="mm-text">UI elements</span></a>
        <ul>
            <li>
                <a tabindex="-1" href="ui-buttons.html"><span class="mm-text">Buttons</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-typography.html"><span class="mm-text">Typography</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-tabs.html"><span class="mm-text">Tabs &amp; Accordions</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-modals.html"><span class="mm-text">Modals</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-alerts.html"><span class="mm-text">Alerts &amp; Tooltips</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-components.html"><span class="mm-text">Components</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-panels.html"><span class="mm-text">Panels</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-jqueryui.html"><span class="mm-text">jQuery UI</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-icons.html"><span class="mm-text">Icons</span></a>
            </li>
            <li>
                <a tabindex="-1" href="ui-utility-classes.html"><span class="mm-text">Utility classes</span></a>
            </li>
        </ul>
    </li>
    <li class="mm-dropdown">
        <a href="#"><i class="menu-icon fa fa-check-square"></i><span class="mm-text">Form components</span></a>
        <ul>
            <li>
                <a tabindex="-1" href="forms-layouts.html"><span class="mm-text">Layouts</span></a>
            </li>
            <li>
                <a tabindex="-1" href="forms-general.html"><span class="mm-text">General</span></a>
            </li>
            <li>
                <a tabindex="-1" href="forms-advanced.html"><span class="mm-text">Advanced</span></a>
            </li>
            <li>
                <a tabindex="-1" href="forms-pickers.html"><span class="mm-text">Pickers</span></a>
            </li>
            <li>
                <a tabindex="-1" href="forms-validation.html"><span class="mm-text">Validation</span></a>
            </li>
            <li>
                <a tabindex="-1" href="forms-editors.html"><span class="mm-text">Editors</span></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="tables.html"><i class="menu-icon fa fa-table"></i><span class="mm-text">Tables</span></a>
    </li>
    <li>
        <a href="charts.html"><i class="menu-icon fa fa-bar-chart-o"></i><span class="mm-text">Charts</span></a>
    </li>
    <li class="mm-dropdown">
        <a href="#"><i class="menu-icon fa fa-files-o"></i><span class="mm-text">Pages</span><span class="label label-success">16</span></a>
        <ul>
            <li>
                <a tabindex="-1" href="pages-search.html"><span class="mm-text">Search results</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-pricing.html"><span class="mm-text">Plans &amp; pricing</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-faq.html"><span class="mm-text">FAQ</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-profile.html"><span class="mm-text">Profile</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-timeline.html"><span class="mm-text">Timeline</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-signin.html"><span class="mm-text">Sign In</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-signup.html"><span class="mm-text">Sign Up</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-signin-alt.html"><span class="mm-text">Sign In Alt</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-signup-alt.html"><span class="mm-text">Sign Up Alt</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-invoice.html"><span class="mm-text">Invoice</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-404.html"><span class="mm-text">Error 404</span></a>
            </li>
            <li>
                <a tabindex="-1" href="pages-500.html"><span class="mm-text">Error 500</span></a>
            </li>
            <li class="mm-dropdown">
                <a href="#"><i class="menu-icon fa fa-envelope"></i><span class="mm-text">Messages</span></a>
                <ul>
                    <li>
                        <a tabindex="-1" href="pages-inbox.html"><span class="mm-text">Inbox</span></a>
                    </li>
                    <li>
                        <a tabindex="-1" href="pages-show-email.html"><span class="mm-text">Show message</span></a>
                    </li>
                    <li>
                        <a tabindex="-1" href="pages-new-email.html"><span class="mm-text">New message</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a tabindex="-1" href="pages-blank.html"><span class="mm-text">Blank page</span></a>
            </li>
        </ul>
    </li>
    <li>
        <a href="complete-ui.html"><i class="menu-icon fa fa-briefcase"></i><span class="mm-text">Complete UI</span></a>
    </li>
    <li>
        <a href="color-builder.html"><i class="menu-icon fa fa-tint"></i><span class="mm-text">Color Builder</span></a>
    </li>
    <li class="mm-dropdown">
        <a href="#"><i class="menu-icon fa fa-sitemap"></i><span class="mm-text">Menu levels</span><span class="badge badge-primary">6</span></a>
        <ul>
            <li>
                <a tabindex="-1" href="#"><span class="mm-text">Menu level 1.1</span><span class="badge badge-danger">12</span><span class="label label-info">21</span></a>
            </li>
            <li>
                <a tabindex="-1" href="#"><span class="mm-text">Menu level 1.2</span></a>
            </li>
            <li class="mm-dropdown">
                <a tabindex="-1" href="#"><span class="mm-text">Menu level 1.3</span><span class="label label-warning">5</span></a>
                <ul>
                    <li>
                        <a tabindex="-1" href="#"><span class="mm-text">Menu level 2.1</span></a>
                    </li>
                    <li class="mm-dropdown">
                        <a tabindex="-1" href="#"><span class="mm-text">Menu level 2.2</span></a>
                        <ul>
                            <li class="mm-dropdown">
                                <a tabindex="-1" href="#"><span class="mm-text">Menu level 3.1</span></a>
                                <ul>
                                    <li>
                                        <a tabindex="-1" href="#"><span class="mm-text">Menu level 4.1</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a tabindex="-1" href="#"><span class="mm-text">Menu level 3.2</span></a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a tabindex="-1" href="#"><span class="mm-text">Menu level 2.2</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul> <!-- / .navigation -->
                    
                </div>
            </div><!-- / #main-menu -->


            <!-- #content-wrapper -->
            <div id="content-wrapper">
                
    <ul class="breadcrumb breadcrumb-page">
        <div class="breadcrumb-label text-light-gray">您的位置: </div>
        <li><a href="/">首页</a></li>
        <li class="active"><a href="JavaScript:;">欢迎页面</a></li>
    </ul>
    <div class="row">
        <div class="col-sm-5">
            <div class="stat-panel">
                <!-- Success background, bordered, without top and bottom borders, without left border, without padding, vertically and horizontally centered text, large text -->
                <a href="#" class="stat-cell col-xs-5 bg-success bordered no-border-vr no-border-l no-padding valign-middle text-center text-lg">
                    <i class="fa fa-calendar"></i>&nbsp;&nbsp;<strong>11</strong>
                </a> <!-- /.stat-cell -->
                <!-- Without padding, extra small text -->
                <div class="stat-cell col-xs-7 no-padding valign-middle">
                    <!-- Add parent div.stat-rows if you want build nested rows -->
                    <div class="stat-rows">
                        <div class="stat-row">
                            <!-- Success background, small padding, vertically aligned text -->
                            <a href="#" class="stat-cell bg-success padding-sm valign-middle">
                                32 messages
                                <i class="fa fa-envelope-o pull-right"></i>
                            </a>
                        </div>
                        <div class="stat-row">
                            <!-- Success darken background, small padding, vertically aligned text -->
                            <a href="#" class="stat-cell bg-success darken padding-sm valign-middle">
                                9 issues
                                <i class="fa fa-bug pull-right"></i>
                            </a>
                        </div>
                        <div class="stat-row">
                            <!-- Success darker background, small padding, vertically aligned text -->
                            <a href="#" class="stat-cell bg-success darker padding-sm valign-middle">
                                47 new users
                                <i class="fa fa-users pull-right"></i>
                            </a>
                        </div>
                    </div> <!-- /.stat-rows -->
                </div> <!-- /.stat-cell -->
            </div>
        </div>

        <div class="col-sm-4">

            <!-- 6. $EXAMPLE_COMMENTS_COUNT ====================================================================

                            Comments count example
            -->
            <div class="stat-panel">
                <!-- Success background. vertically centered text -->
                <div class="stat-cell bg-danger valign-middle">
                    <!-- Stat panel bg icon -->
                    <i class="fa fa-comments bg-icon"></i>
                    <!-- Extra large text -->
                    <span class="text-xlg"><strong>124</strong></span><br>
                    <!-- Big text -->
                    <span class="text-bg">Comments</span><br>
                    <!-- Small text -->
                    <span class="text-sm">New comments today</span>
                </div> <!-- /.stat-cell -->
            </div> <!-- /.stat-panel -->
            <!-- /6. $EXAMPLE_COMMENTS_COUNT -->

        </div>

        <div class="col-sm-3">

            <!-- 7. $EXAMPLE_ICON_PANEL ========================================================================

                            Icon panel example
            -->
            <div class="stat-panel">
                <div class="stat-row">
                    <!-- Info background, without padding, horizontally centered text, super large text -->
                    <div class="stat-cell bg-info no-padding text-center text-slg">
                        <i class="fa fa-clock-o"></i>
                    </div>
                </div> <!-- /.stat-row -->
                <div class="stat-row">
                    <!-- Bordered, without top border, horizontally centered text, large text -->
                    <div class="stat-cell bordered no-border-t text-center text-lg">
                        <strong>4:50</strong>
                        <small><small>PM</small></small>
                    </div>
                </div> <!-- /.stat-row -->
            </div> <!-- /.stat-panel -->
            <!-- /7. $EXAMPLE_ICON_PANEL -->

        </div>
    </div>

            </div><!-- / #content-wrapper -->


            <div id="main-menu-bg"> </div>
        </div><!-- / #main-wrapper -->



    <!-- Get jQuery from Google CDN -->
    <!--[if !IE]> -->
    <script type="text/javascript"> window.jQuery || document.write('<script src="/Public/assets/javascripts/jquery-1.8.3.min.js">'+"<"+"/script>"); </script>
    <!-- <![endif]-->
    <!--[if lte IE 9]>
    <script type="text/javascript"> window.jQuery || document.write('<script src="/Public/assets/javascripts/jquery-1.8.3.min.js">'+"<"+"/script>"); </script>
    <![endif]-->
    <!-- Pixel Admin's javascripts -->
    <script src="/Public/assets/javascripts/bootstrap.min.js"></script>
    <script src="/Public/assets/javascripts/pixel-admin.min.js"></script>

    <script type="text/javascript">
        init.push(function () {
            // Javascript code here
        })
        window.PixelAdmin.start(init);
    </script>
    

    
</body>