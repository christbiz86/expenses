<?php /* Smarty version Smarty-3.1.13, created on 2014-01-24 11:25:28
         compiled from "application/views/templates/struktur/cabang.tpl" */ ?>
<?php /*%%SmartyHeaderCode:567615883524a6d707007a8-64609378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c00f675ed6992f9fc24fc0333d4a64c136cad41' => 
    array (
      0 => 'application/views/templates/struktur/cabang.tpl',
      1 => 1390537527,
      2 => 'file',
    ),
    '5f4d61325180270d3669b50100420575cc03324b' => 
    array (
      0 => 'application/views/templates/layout.tpl',
      1 => 1390534092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '567615883524a6d707007a8-64609378',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_524a6d7085b732_21030223',
  'variables' => 
  array (
    'nama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524a6d7085b732_21030223')) {function content_524a6d7085b732_21030223($_smarty_tpl) {?><!DOCTYPE html>
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
                Data Struktur
                <small>isi semua data divisi, staff level dan user</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="<?php echo site_url("home");?>
">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="<?php echo site_url("struktur/cabang");?>
">Struktur User</a>
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
            <div class="portlet box light-grey">
                <div class="row-fluid">
                    <div class="span6 responsive" data-tablet="span12 fix-offset" data-desktop="span6">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet box grey">
                            <div class="portlet-title">
                                <h4><i class="icon-user"></i>Leveling</h4>
                                <div class="actions">
                                    <a href="<?php echo site_url("struktur/addlevel");?>
" class="btn blue"><i class="icon-plus"></i> Tambah</a>
<!--                                    <div class="btn-group">
                                        <a class="btn green" href="site_url("struktur/excellevel")}">
                                        <i class="icon-book"></i> Export to Excel
                                        </a>
                                    </div>-->
                                </div>
                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover" id="sample_2">
                                    <thead>
                                        <tr>
                                            <th style="width:8px;">No</th>
                                            <th>Deskripsi</th>
                                            <th class="hidden-480">Level</th>
                                            <th class="hidden-480">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->level_desc;?>
</td>
                                            <td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['row']->value->level_position;?>
</td>
                                            <td>
                                                <a href="<?php echo site_url("struktur/editlevel");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->level_id;?>
" onclick="return confirm('Anda yakin mau edit Level ini?');">
                                                    <img src="<?php echo site_url("assets/img/document_edit.png");?>
" width="20">
                                                </a>&nbsp;&nbsp;&nbsp;
                                                <a href="<?php echo site_url("struktur/deletelevel");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->level_id;?>
" onclick="return confirm('Anda yakin mau hapus Level ini?');">
                                                    <img src="<?php echo site_url("assets/img/document_delete.png");?>
" width="20">
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                    <div class="span6 responsive" data-tablet="span12 fix-offset" data-desktop="span6">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet box purple">
                            <div class="portlet-title">
                                <h4><i class="icon-cogs"></i>Divisi</h4>
                                <div class="actions">
                                    <a href="<?php echo site_url("struktur/addcabang");?>
" class="btn yellow"><i class="icon-plus"></i> Tambah</a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover" id="sample_3">
                                    <thead>
                                        <tr>
                                            <th style="width:8px;">No</th>
                                            <th>Divisi</th>
                                            <th class="hidden-480">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
                                        <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cabang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
$_smarty_tpl->tpl_vars['row1']->_loop = true;
?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['row1']->value->cabang_nama;?>
</td>
                                            <td>
                                                <a href="<?php echo site_url("struktur/editcabang");?>
/<?php echo $_smarty_tpl->tpl_vars['row1']->value->cabang_id;?>
" onclick="return confirm('Anda yakin mau edit Cabang ini?');">
                                                    <img src="<?php echo site_url("assets/img/document_edit.png");?>
" width="20">
                                                </a>&nbsp;&nbsp;&nbsp;
                                                <a href="<?php echo site_url("struktur/deletecabang");?>
/<?php echo $_smarty_tpl->tpl_vars['row1']->value->cabang_id;?>
" onclick="return confirm('Anda yakin mau hapus Cabang ini?');">
                                                    <img src="<?php echo site_url("assets/img/document_delete.png");?>
" width="20">
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END EXAMPLE TABLE PORTLET-->
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