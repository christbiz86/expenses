<?php /* Smarty version Smarty-3.1.13, created on 2014-01-24 11:13:48
         compiled from "application/views/templates/harga/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1008023723527c47de1fdf33-20547148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '090a9bdf274fc3d426bbcf5bd086e6e2a5801044' => 
    array (
      0 => 'application/views/templates/harga/view.tpl',
      1 => 1390534160,
      2 => 'file',
    ),
    '5f4d61325180270d3669b50100420575cc03324b' => 
    array (
      0 => 'application/views/templates/layout.tpl',
      1 => 1390534092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1008023723527c47de1fdf33-20547148',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_527c47de2506c9_87660834',
  'variables' => 
  array (
    'nama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527c47de2506c9_87660834')) {function content_527c47de2506c9_87660834($_smarty_tpl) {?><!DOCTYPE html>
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
    <link href="<?php echo site_url("assets/bootstrap/css/bootstrap.min.css");?>
" rel="stylesheet" />
    <link href="<?php echo site_url("assets/css/metro.css");?>
" rel="stylesheet" />
    <link href="<?php echo site_url("assets/bootstrap/css/bootstrap-responsive.min.css");?>
" rel="stylesheet" />
    <link href="<?php echo site_url("assets/font-awesome/css/font-awesome.css");?>
" rel="stylesheet" />
    <link href="<?php echo site_url("assets/css/style.css");?>
" rel="stylesheet" />
    <link href="<?php echo site_url("assets/css/style_responsive.css");?>
" rel="stylesheet" />
    <link href="<?php echo site_url("assets/css/style_default.css");?>
" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/uniform/css/uniform.default.css");?>
" />
    
<link href="<?php echo site_url("assets/fancybox/source/jquery.fancybox.css");?>
" rel="stylesheet" />
<link rel="stylesheet" href="<?php echo site_url("assets/data-tables/DT_bootstrap.css");?>
" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url("assets/chosen-bootstrap/chosen/chosen.css");?>
" />

    <link rel="shortcut icon" href="<?php echo site_url("favicon.ico");?>
" />
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
                <a class="brand" href="<?php echo base_url();?>
">

                </a>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                    <img src="<?php echo site_url("assets/img/menu-toggler.png");?>
" alt="" />
                </a>          
                <!-- END RESPONSIVE MENU TOGGLER -->				
                <!-- BEGIN TOP NAVIGATION MENU -->					
                <ul class="nav pull-right">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->	
                    
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN INBOX DROPDOWN -->
                    
                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                   
                    <!-- END TODO DROPDOWN -->
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown user">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img alt="" src="<?php echo site_url("assets/img/avatar_small.png");?>
" />
                            <span class="username"><?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
</span>
                            <i class="icon-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url("home/changepassword");?>
"><i class="icon-user"></i> Ganti Password</a></li>
                            
                            <li class="divider"></li>
                            <li><a href="<?php echo site_url("welcome/logout");?>
"><i class="icon-key"></i> Log Out</a></li>
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
        <?php echo $_smarty_tpl->getSubTemplate ("menu-left.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        <!-- END SIDEBAR -->
        
        <!-- BEGIN PAGE -->
        <div class="page-content">
            <!-- BEGIN PAGE CONTAINER-->
            
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12"> 
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Daftar Harga
                <small>isi semua paket dan harga dari 123GoGo</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="<?php echo site_url("home");?>
">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="<?php echo site_url("harga");?>
">Harga</a>
                </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box yellow">
                <div class="portlet-title">
                    <h4><i class="icon-money"></i>Tabel Harga</h4>
                </div>
                <div class="portlet-body">
                    <div class="row-fluid">
                        <div class="span3-tabel">
                            <div class="pricing-table">
                                <h3>Basic</h3>
                                <div class="desc">
                                    Paket basic 123GoGo
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> 5 user akun</li>
                                    <li><i class="icon-angle-right"></i> 50 jumlah SmartScan</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                </ul>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Bulanan
                                        </div>
                                        <div class="amount ">
                                            7.99		
                                        </div>
                                    </div>
                                    <br><br>
                                    <form style="text-align: center;" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="PQRP2TJVGC95L">
                                    <input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="spance10 visible-phone"></div>
                        <div class="span3-tabel">
                            <div class="pricing-table">
                                <h3>Standard</h3>
                                <div class="desc">
                                    Paket standar 123GoGo
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> 10 user akun</li>
                                    <li><i class="icon-angle-right"></i> 100 jumlah SmartScan</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                </ul>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Bulanan
                                        </div>
                                        <div class="amount ">
                                            14.99		
                                        </div>
                                    </div>
                                    <br><br>
                                    <form style="text-align: center" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="728CESXRGMTRU">
                                    <input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="spance10 visible-phone"></div>
                        <div class="span3-tabel">
                            <div class="pricing-table">
                                <h3>Professional</h3>
                                <div class="desc">
                                    Paket profesional 123GoGo
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> 25 user akun</li>
                                    <li><i class="icon-angle-right"></i> 250 jumlah SmartScan</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                </ul>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Bulanan
                                        </div>
                                        <div class="amount ">
                                            28.99		
                                        </div>
                                    </div>
                                    <br><br>
                                    <form style="text-align: center" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="KUNYWUAG99GWW">
                                    <input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="spance10 visible-phone"></div>
                        <div class="span3-tabel">
                            <div class="pricing-table selected">
                                <h3>Enterprise</h3>
                                <div class="desc">
                                    Paket enterprise 123GoGo
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> 50 user akun</li>
                                    <li><i class="icon-angle-right"></i> 500 jumlah SmartScan</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                </ul>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Bulanan
                                        </div>
                                        <div class="amount ">
                                            59.99		
                                        </div>
                                    </div>
                                    <br><br>
                                    <form style="text-align: center" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="KZJQK6CL5ZM8G">
                                    <input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="spance10 visible-phone"></div>
                        <div class="span3-tabel">
                            <div class="pricing-table">
                                <h3>Ultimate</h3>
                                <div class="desc">
                                    Paket ultimate 123GoGo
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> lebih dari 50 user akun</li>
                                    <li><i class="icon-angle-right"></i> lebih dari 500 jumlah SmartScan</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                </ul>
                                <div class="rate">
                                    <div class="price">
                                        
                                    </div>
                                    <a href="<?php echo site_url("welcome/kontak");?>
" class="btn green">
                                    Hubungi Kami <i class="m-icon-swapright m-icon-white"></i>
                                    </a> 	
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
<!-- END PAGE CONTENT-->
</div>

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
        <script src="<?php echo site_url("assets/js/jquery-1.8.3.min.js");?>
"></script>
        <script src="<?php echo site_url("assets/breakpoints/breakpoints.js");?>
"></script>	
        <script src="<?php echo site_url("assets/bootstrap/js/bootstrap.min.js");?>
"></script>
        <script src="<?php echo site_url("assets/js/jquery.blockui.js");?>
"></script>		
        <script src="<?php echo site_url("assets/js/jquery.cookie.js");?>
"></script>
        <!--[if lt IE 9]>
        <script src="<?php echo site_url("assets/js/excanvas.js");?>
"></script>
        <script src="<?php echo site_url("assets/js/respond.js");?>
"></script>	
        <![endif]-->	
        <script type="text/javascript" src="<?php echo site_url("assets/uniform/jquery.uniform.min.js");?>
"></script>	
        <script src="<?php echo site_url("assets/js/app.js");?>
"></script>		
	
<script type="text/javascript" src="<?php echo site_url("assets/data-tables/jquery.dataTables.js");?>
"></script>
<script type="text/javascript" src="<?php echo site_url("assets/data-tables/DT_bootstrap.js");?>
"></script>
<script>
    jQuery(document).ready(function() {			
        // initiate layout and plugins
        App.setPage("table_managed");
        App.init();
    });
</script>

	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>