<?php /* Smarty version Smarty-3.1.13, created on 2014-02-05 11:01:03
         compiled from "application/views/templates/accounting/viewjurnal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:189684632752d642cc7921b1-35992323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5673f399b30df3b89ed1124c33cbe919c4f2858' => 
    array (
      0 => 'application/views/templates/accounting/viewjurnal.tpl',
      1 => 1391572861,
      2 => 'file',
    ),
    '5f4d61325180270d3669b50100420575cc03324b' => 
    array (
      0 => 'application/views/templates/layout.tpl',
      1 => 1390534092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189684632752d642cc7921b1-35992323',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52d642cc900e19_39524898',
  'variables' => 
  array (
    'nama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d642cc900e19_39524898')) {function content_52d642cc900e19_39524898($_smarty_tpl) {?><!DOCTYPE html>
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
    
<link type="text/css" href="<?php echo base_url();?>
resources/calendar/jquery.datepick.css" rel="stylesheet">
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
                Data Akunting
                <small>isi semua data jurnal</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="<?php echo site_url("home");?>
">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="<?php echo site_url("accounting");?>
">Akunting</a>
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
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-hdd"></i>Akunting - Lihat Jurnal</h4>
                    <div class="actions">

                        <div class="btn-group">
                            <a class="btn green" href="#" data-toggle="dropdown">
                            <i class="icon-cogs"></i> Tools
                            <i class="icon-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:window.print()">Print</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <form action="<?php echo site_url("accounting/printbbk");?>
" method="post" target="_blank">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Jurnal</th>
                                <th class="hidden-480">Tgl. Buat</th>
                                <th class="hidden-480">Bank</th>
                                <th class="480">Pengeluaran</th>
                                <th class="480">Jumlah</th>
                                <th class="480">Status BBK</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->jurnal_no;?>
</td>
                                <td class="hidden-480"><?php echo showDate($_smarty_tpl->tpl_vars['row']->value->jurnal_createddate);?>
</td>
                                <td class="hidden-480">
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value->bank_id==0){?> YMHD <?php }else{ ?>
                                    <?php echo getBankData($_smarty_tpl->tpl_vars['row']->value->bank_id);?>

                                    <?php }?>
                                </td>
                                <td>
                                    <?php echo getMultiItem($_smarty_tpl->tpl_vars['row']->value->request_id,'item_desc');?>

                                </td>
                                <td style="text-align: right"><?php echo getTotalPd($_smarty_tpl->tpl_vars['row']->value->request_id);?>
</td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value->status_bbk;?>
 pada <?php echo showDate($_smarty_tpl->tpl_vars['row']->value->postdate);?>

                                </td>
                                <td>
                                    <?php if ($_smarty_tpl->tpl_vars['submenu']->value=='listjurnal'){?>
                                        <a target="_blank" href="<?php echo site_url("accounting/detailjurnal");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->jurnal_no;?>
">
                                            <input type="button" value="Lihat Jurnal">
                                        </a>
                                        <?php if ($_smarty_tpl->tpl_vars['row']->value->status_bbk=='Finish'){?>
                                            &nbsp;
                                            <a target="_blank" href="<?php echo site_url("accounting/detailjurnalbalik");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->jurnal_no;?>
">
                                                <input type="button" value="Lihat Jurnal Balik">
                                            </a>
                                        <?php }?><br>
                                    <?php }else{ ?>
                                    <input type="checkbox" name="request_id[]" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->request_id;?>
">
                                    <?php }?>
                                </td>
                            </tr>
                            <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
                            <?php } ?>
                        </tbody>
                    </table>
                    <?php if ($_smarty_tpl->tpl_vars['list']->value&&$_smarty_tpl->tpl_vars['submenu']->value=='viewjurnal'){?>
                    <input class="span2 m-wrap" placeholder="nomor cheque" name="no_cheque" type="text">
                    <input class="span2 m-wrap" placeholder="tanggal jatuh tempo" name="jatuh_tempo" type="text" id="popupDatepicker">
                    <select class="span2 m-wrap medium" name="bank_id">
                        <option value="">-- Pilih rekening bank --</option>
                        <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list_bank']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value->bank_id;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value->bank_nama;?>
 - <?php echo $_smarty_tpl->tpl_vars['data']->value->bank_norek;?>
</option>
                        <?php } ?>
                    </select><br>
                    <input type="submit" name="submit" value="Buat BBK">
                    <?php }?>
                </form>
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
	
<script type="text/javascript" src="<?php echo base_url();?>
resources/calendar/jquery.datepick.js"></script>
<script type="text/javascript" src="<?php echo site_url("assets/data-tables/jquery.dataTables.js");?>
"></script>
<script type="text/javascript" src="<?php echo site_url("assets/data-tables/DT_bootstrap.js");?>
"></script>
<script>
    jQuery(document).ready(function() {			
        // initiate layout and plugins
        App.setPage("table_managed");
        App.init();
        
        $('#popupDatepicker').datepick();
        $('#inlineDatepicker').datepick({onSelect: showDate});
        
    });
</script>

	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>