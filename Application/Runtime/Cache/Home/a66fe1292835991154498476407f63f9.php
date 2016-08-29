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
                
    <script>
        init.push(function () {
            var table = $('#jq-datatables-example').dataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    "url":"<?php echo U('Index/table');?>" ,
                    "type": "POST"
                },
                "deferRender": true,
                "pagingType": "full_numbers",
                "columns": [

                    { "data": "name" },
                    { "data": "age" },
                    { "data": "place" },
                    {
                        "className":      'details-control',
                        "orderable":      false,
                        "data":           null,
                        "defaultContent": ''
                    },
                ],
                columnDefs: [
                    {
                        targets: 3,
                        render: function (a, b, c, d) {
                            var context = "<input type='checkbox' name='id[]' value='"+ a.id+"'> <a href='<?php echo U('Index/del');?>'>删除</a> <a href='<?php echo U('Index/edit');?>'>编辑</a>";
                            return context;
                        }
                    }

                ],
                "lengthMenu": [10, 25, 50,100, 300,500],
                "oLanguage": { //国际语言转化
                    "oAria": {
                        "sSortAscending": " - click/return to sort ascending",
                        "sSortDescending": " - click/return to sort descending"
                    },
                    "sLengthMenu": "显示 _MENU_ 记录",
                    "sZeroRecords": "对不起，查询不到任何相关数据",
                    "sEmptyTable": "未有相关数据",
                    "sLoadingRecords": "正在加载数据-请等待...",
                    "sInfo": "当前显示 _START_ 到 _END_ 条，共 _TOTAL_ 条记录。",
                    "sInfoEmpty": "当前显示0到0条，共0条记录",
                    "sInfoFiltered": "（数据库中共为 _MAX_ 条记录）",
                    "sProcessing": "<img src='/Public/assets/images/plugins/bootstrap-editable/loading.gif'/> 正在加载数据...",
                    "sUrl": "",
                    //多语言配置文件，可将oLanguage的设置放在一个txt文件中，例：Javascript/datatable/dtCH.txt
                    "oPaginate": {
                        "sFirst": "首页",
                        "sPrevious": " 上一页 ",
                        "sNext": " 下一页 ",
                        "sLast": " 尾页 "
                    }
                },


            });
            $('#jq-datatables-example_wrapper .table-caption').text('Some header text');
            $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', '快速搜索');
            $(function(){

                $('#search').on( 'click', function () {
                    var name = $("#name").val();
                    var age = $("#age").val();
                    $('#jq-datatables-example').DataTable().columns( 0 ).search( name ).columns( 1 ).search( age ).draw();
                } );

                $("#checkAll").on("click", function () {

                    if ($(this).prop("checked") === true) {
                        console.log($("input[name='id']"));
                        $("input[name='id[]']").prop("checked", $(this).prop("checked"));
                        $('#jq-datatables-example tbody tr').addClass('selected');
                    } else {
                        $("input[name='id[]']").prop("checked", false);
                        $('#jq-datatables-example tbody tr').removeClass('selected');
                    }
                });
            })
        });
    </script>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel">

                <div class="panel-body">
                    <form class="form-inline">
                        <div class="form-group">
                            <label class="sr-only" for="name">请输入名称</label>
                            <!--<input type="search" class="form-control input-sm" aria-controls="jq-datatables-example" placeholder="快速搜索">-->
                            <input type="text" class="form-control input-sm"  id="name" placeholder="请输入名称">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="age">请输年龄</label>
                            <input type="text" class="form-control"  id="age" placeholder="请输年龄">
                        </div>

                        <button type="button" class="btn btn-primary" id="search">搜索</button>
                    </form>
                </div>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <span class="panel-title">数据表单</span>
                </div>
                <div class="panel-body">

                    <div class="table-primary">
                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="jq-datatables-example">
                            <thead>
                            <tr>

                                <?php if(is_array($field)): foreach($field as $key=>$f): ?><th><?php echo ($f["1"]); ?></th><?php endforeach; endif; ?>
                                <th><label class="checkbox-inline">
                                    <input type="checkbox" id="checkAll" value="option1" class="px"> <span class="lbl">操作</span>
                                </label></th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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