{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Dashboard				
                <small>statistik dan yang lainnya</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li><a href="#">Dashboard</a></li>
                <li class="pull-right no-text-shadow">
                    <div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
                        <i class="icon-calendar"></i>
                        <span></span>
                        <i class="icon-angle-down"></i>
                    </div>
                </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <div id="dashboard">
        <!-- BEGIN DASHBOARD STATS -->
        <div class="row-fluid">
            <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                <div class="dashboard-stat blue">
                    <div class="visual">
                        <i class="icon-comments"></i>
                    </div>
                    <div class="details">
                        <div class="number">
                            1349
                        </div>
                        <div class="desc">									
                            Feedback Baru
                        </div>
                    </div>
                    <a class="more" href="#">
                    View more <i class="m-icon-swapright m-icon-white"></i>
                    </a>						
                </div>
            </div>
            <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                <div class="dashboard-stat green">
                    <div class="visual">
                        <i class="icon-shopping-cart"></i>
                    </div>
                    <div class="details">
                        <div class="number">549</div>
                        <div class="desc">Order Terbaru</div>
                    </div>
                    <a class="more" href="#">
                    View more <i class="m-icon-swapright m-icon-white"></i>
                    </a>						
                </div>
            </div>
            <div class="span3 responsive" data-tablet="span6  fix-offset" data-desktop="span3">
                <div class="dashboard-stat purple">
                    <div class="visual">
                        <i class="icon-globe"></i>
                    </div>
                    <div class="details">
                        <div class="number">+89%</div>
                        <div class="desc">Brand Popularitas</div>
                    </div>
                    <a class="more" href="#">
                    View more <i class="m-icon-swapright m-icon-white"></i>
                    </a>						
                </div>
            </div>
            <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
                <div class="dashboard-stat yellow">
                    <div class="visual">
                        <i class="icon-bar-chart"></i>
                    </div>
                    <div class="details">
                        <div class="number">12,5M$</div>
                        <div class="desc">Total Profit</div>
                    </div>
                    <a class="more" href="#">
                    View more <i class="m-icon-swapright m-icon-white"></i>
                    </a>						
                </div>
            </div>
        </div>
        <!-- END DASHBOARD STATS -->
        <div class="clearfix"></div>
    </div>
</div>
{/block}

{block name=css_header}
<link rel="stylesheet" type="text/css" href="{site_url("assets/gritter/css/jquery.gritter.css")}" />
<link rel="stylesheet" type="text/css" href="{site_url("assets/bootstrap-daterangepicker/daterangepicker.css")}" />
<link href="{site_url("assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css")}" rel="stylesheet" />
<link href="{site_url("assets/jqvmap/jqvmap/jqvmap.css")}" media="screen" rel="stylesheet" type="text/css" />
{/block}

{block name=javascript_footer}	
<script src="{site_url("assets/jquery-ui/jquery-ui-1.10.1.custom.min.js")}"></script>		
<script src="{site_url("assets/jquery-slimscroll/jquery.slimscroll.min.js")}"></script>		
<script src="{site_url("assets/fullcalendar/fullcalendar/fullcalendar.min.js")}"></script>		
<script type="text/javascript" src="{site_url("assets/gritter/js/jquery.gritter.js")}"></script>
<script type="text/javascript" src="{site_url("assets/js/jquery.pulsate.min.js")}"></script>
<script>
    jQuery(document).ready(function() {		
{*            App.setPage("index");  // set current page*}
            App.init(); // init the rest of plugins and elements
    });
</script>
{/block}