<?php /* Smarty version Smarty-3.1.13, created on 2013-12-02 09:50:39
         compiled from "application/views/templates/income/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1709681461526e1412c03796-90901126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eef7f51a4c37359385ba5df110af723c40bc3894' => 
    array (
      0 => 'application/views/templates/income/detail.tpl',
      1 => 1385952637,
      2 => 'file',
    ),
    '5f4d61325180270d3669b50100420575cc03324b' => 
    array (
      0 => 'application/views/templates/layout.tpl',
      1 => 1384831171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1709681461526e1412c03796-90901126',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_526e1412cbf702_44105341',
  'variables' => 
  array (
    'nama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526e1412cbf702_44105341')) {function content_526e1412cbf702_44105341($_smarty_tpl) {?><!DOCTYPE html>
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
                    <img src="<?php echo site_url("assets/img/logo.png");?>
" alt="logo" />
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
                    <li class="dropdown" id="header_notification_bar">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-warning-sign"></i>
                            <span class="badge">6</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <li>
                                <p>Anda punay 14 notifikasi baru</p>
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
                    </li>
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN INBOX DROPDOWN -->
                    <li class="dropdown" id="header_inbox_bar">
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
                    </li>
                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                    <li class="dropdown" id="header_task_bar">
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
                    </li>
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
            <h3 class="page-title">
               Data Pemasukan
               <small>data detail Pemasukan Dana</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="<?php echo site_url("home");?>
">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="<?php echo site_url("income");?>
">Data Pemasukan</a>
                </li>
            </ul>
       </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
       <div class="span12">
          <div class="tabbable tabbable-custom boxless">
             <div class="tab-content">
                <div class="tab-pane active">
                   <div class="portlet box blue">
                      <div class="portlet-title">
                         <h4><i class="icon-reorder"></i>Data Detail Pemasukan Dana</h4>
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                         <div class="form-horizontal form-view">
                            <h3>View Info Pemasukan Dana</h3>
                            <h3 class="form-section">Data Pembeli</h3>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label" for="firstName">Nama :</label>
                                     <div class="controls">
                                        <span class="text"><?php echo dec($_smarty_tpl->tpl_vars['row']->value->pembeli);?>
</span>
                                     </div>
                                  </div>
                               </div>
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label" for="lastName">Bank :</label>
                                     <div class="controls">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['row']->value->bank;?>
</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Pembayaran :</label>
                                     <div class="controls">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['row']->value->payment;?>
</span> 
                                     </div>
                                  </div>
                               </div>
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label" for="lastName">No. Rekening :</label>
                                     <div class="controls">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['row']->value->no_rek;?>
</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <h3 class="form-section">Data Pemasukan</h3>
                            <div class="row-fluid">
                               <div class="span12">
                                  <div class="control-group">
                                     <label class="control-label">Uraian:</label>
                                     <div class="controls">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['row']->value->uraian;?>
</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Tanggal:</label>
                                     <div class="controls">
                                        <span class="text"><?php echo showDate($_smarty_tpl->tpl_vars['row']->value->postdate);?>
</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Jumlah:</label>
                                     <div class="controls">
                                        <span class="text">
                                            <?php $_smarty_tpl->tpl_vars['jumlah'] = new Smarty_variable(dec($_smarty_tpl->tpl_vars['row']->value->jumlah), null, 0);?>
                                            Rp. <?php echo number_format($_smarty_tpl->tpl_vars['jumlah']->value,0,",",".");?>
</span>
                                     </div>
                                  </div>
                               </div>
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Terbilang:</label>
                                     <div class="controls">
                                        <span class="text"><?php echo dec($_smarty_tpl->tpl_vars['row']->value->terbilang);?>
</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Dokumen:</label>
                                     <div class="controls">
                                        <span class="text">
                                            <a target="_blank" href="<?php echo site_url("resources/dokumen");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->dokumen;?>
">Klik disini</a>
                                        </span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="form-actions">
                                <a href="<?php echo site_url("income/edit");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->income_id;?>
">
                                <button type="submit" class="btn blue"><i class="icon-pencil"></i> Edit</button>
                                </a>
                                <a href="<?php echo site_url("income/index");?>
"><button type="button" class="btn">Back</button></a>
                            </div>
                         </div>
                         <?php } ?>
                         <!-- END FORM-->  
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