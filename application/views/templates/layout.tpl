<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>ExpenseGoGo Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta HTTP-EQUIV="Cache-control" content="public, max-age=28800" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{site_url("assets/bootstrap/css/bootstrap.min.css")}" rel="stylesheet" />
    <link href="{site_url("assets/css/metro.css")}" rel="stylesheet" />
    <link href="{site_url("assets/bootstrap/css/bootstrap-responsive.min.css")}" rel="stylesheet" />
    <link href="{site_url("assets/font-awesome/css/font-awesome.css")}" rel="stylesheet" />
    <link href="{site_url("assets/css/style.css")}" rel="stylesheet" />
    <link href="{site_url("assets/css/style_responsive.css")}" rel="stylesheet" />
    <link href="{site_url("assets/css/style_default.css")}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{site_url("assets/uniform/css/uniform.default.css")}" />
    {block name=css_header}{/block}
    <link rel="shortcut icon" href="{site_url("favicon.ico")}" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
        <div class="navbar-inner">
            <div class="container-fluid">
                <!-- BEGIN LOGO -->
                <a class="brand" href="{base_url()}">
{*                    <img src="{site_url("assets/img/logo.png")}" alt="logo" />*}
                </a>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                    <img src="{site_url("assets/img/menu-toggler.png")}" alt="" />
                </a>          
                <!-- END RESPONSIVE MENU TOGGLER -->				
                <!-- BEGIN TOP NAVIGATION MENU -->					
                <ul class="nav pull-right">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->	
                    {*<li class="dropdown" id="header_notification_bar">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-warning-sign"></i>
                            <span class="badge">6</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <li>
                                <p>Anda punya 14 notifikasi baru</p>
                            </li>
                            <li>
                                <a href="javascript:;" onclick="App.onNotificationClick(1)">
                                <span class="label label-success"><i class="icon-plus"></i></span>
                                User terbaru. 
                                <span class="time">Sekarang</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="label label-important"><i class="icon-bolt"></i></span>
                                Server #12 overloaded. 
                                <span class="time">15 menit</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="label label-warning"><i class="icon-bell"></i></span>
                                Server #2 not respoding.
                                <span class="time">22 menit</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                Aplikasi error.
                                <span class="time">40 menit</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="label label-important"><i class="icon-bolt"></i></span>
                                Database overloaded 68%. 
                                <span class="time">2 jam</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="label label-important"><i class="icon-bolt"></i></span>
                                2 user IP ter-blokir.
                                <span class="time">5 jam</span>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">Lihat semua notifikasi <i class="m-icon-swapright"></i></a>
                            </li>
                        </ul>
                    </li>*}
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN INBOX DROPDOWN -->
                    {*<li class="dropdown" id="header_inbox_bar">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-envelope-alt"></i>
                            <span class="badge">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <li>
                                <p>Anda punya 12 pesan</p>
                            </li>
                            <li>
                                <a href="#">
                                <span class="photo"><img src="./assets/img/avatar2.jpg" alt="" /></span>
                                <span class="subject">
                                <span class="from">Lisa Wong</span>
                                <span class="time">Just Now</span>
                                </span>
                                <span class="message">
                                Vivamus sed auctor nibh congue nibh. auctor nibh
                                auctor nibh...
                                </span>  
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="photo"><img src="./assets/img/avatar3.jpg" alt="" /></span>
                                <span class="subject">
                                <span class="from">Richard Doe</span>
                                <span class="time">16 mins</span>
                                </span>
                                <span class="message">
                                Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                                auctor nibh...
                                </span>  
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="photo"><img src="./assets/img/avatar1.jpg" alt="" /></span>
                                <span class="subject">
                                <span class="from">Bob Nilson</span>
                                <span class="time">2 hrs</span>
                                </span>
                                <span class="message">
                                Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                                auctor nibh...
                                </span>  
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">Lihat semua pesan <i class="m-icon-swapright"></i></a>
                            </li>
                        </ul>
                    </li>*}
                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                   {* <li class="dropdown" id="header_task_bar">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-tasks"></i>
                            <span class="badge">5</span>
                        </a>
                        <ul class="dropdown-menu extended tasks">
                            <li>
                                <p>You have 12 pending tasks</p>
                            </li>
                            <li>
                                <a href="#">
                                <span class="task">
                                <span class="desc">New release v1.2</span>
                                <span class="percent">30%</span>
                                </span>
                                <span class="progress progress-success ">
                                <span style="width: 30%;" class="bar"></span>
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="task">
                                <span class="desc">Application deployment</span>
                                <span class="percent">65%</span>
                                </span>
                                <span class="progress progress-danger progress-striped active">
                                <span style="width: 65%;" class="bar"></span>
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="task">
                                <span class="desc">Database migration</span>
                                <span class="percent">10%</span>
                                </span>
                                <span class="progress progress-warning progress-striped">
                                <span style="width: 10%;" class="bar"></span>
                                </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                <span class="task">
                                <span class="desc">Web server upgrade</span>
                                <span class="percent">58%</span>
                                </span>
                                <span class="progress progress-info">
                                <span style="width: 58%;" class="bar"></span>
                                </span>
                                </a>
                            </li>
                            <li class="external">
                                <a href="#">See all tasks <i class="m-icon-swapright"></i></a>
                            </li>
                        </ul>
                    </li>*}
                    <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img alt="" src="{site_url("assets/img/avatar_small.png")}" />
                            <span class="username">{$nama}</span>
                            <i class="icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{site_url("home/changepassword")}"><i class="icon-user"></i> Ganti Password</a></li>
                            {*<li><a href="calendar.html"><i class="icon-calendar"></i> Kalendar</a></li>
                            <li><a href="#"><i class="icon-tasks"></i> Tasks</a></li>*}
                            <li class="divider"></li>
                            <li><a href="{site_url("welcome/logout")}"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->	
            </div>
        </div>
        <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid">
        
        <!-- BEGIN SIDEBAR -->
        {include file="menu-left.tpl"}
        <!-- END SIDEBAR -->
        
        <!-- BEGIN PAGE -->
        <div class="page-content">
            <!-- BEGIN PAGE CONTAINER-->
            {block name=content}{/block}
            <!-- END PAGE CONTAINER-->		
            </div>
            <!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
            2013 &copy; 123GoGo by MobilGoGo.
            <div class="span pull-right">
                    <span class="go-top"><i class="icon-angle-up"></i></span>
            </div>
	</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS -->
	<!-- Load javascripts at bottom, this will reduce page load time -->
        <script src="{site_url("assets/js/jquery-1.8.3.min.js")}"></script>
        <script src="{site_url("assets/breakpoints/breakpoints.js")}"></script>	
        <script src="{site_url("assets/bootstrap/js/bootstrap.min.js")}"></script>
        <script src="{site_url("assets/js/jquery.blockui.js")}"></script>		
        <script src="{site_url("assets/js/jquery.cookie.js")}"></script>
        <!--[if lt IE 9]>
        <script src="{site_url("assets/js/excanvas.js")}"></script>
        <script src="{site_url("assets/js/respond.js")}"></script>	
        <![endif]-->	
        <script type="text/javascript" src="{site_url("assets/uniform/jquery.uniform.min.js")}"></script>	
        <script src="{site_url("assets/js/app.js")}"></script>		
	{block name=javascript_footer}{/block}
	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>