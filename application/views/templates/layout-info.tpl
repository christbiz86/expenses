<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>ExpenseGoGo Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta HTTP-EQUIV="Cache-control" content="public, max-age=28800" />
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
                    <img src="{site_url("assets/img/logo.png")}" alt="logo" />
                </a>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                    <img src="{site_url("assets/img/menu-toggler.png")}" alt="" />
                </a>          
                <!-- END RESPONSIVE MENU TOGGLER -->	
            </div>
        </div>
        <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row-fluid full-width-page">
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
            2013 &copy; ExpenseGoGo by Tian.
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