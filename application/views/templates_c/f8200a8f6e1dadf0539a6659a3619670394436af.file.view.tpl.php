<?php /* Smarty version Smarty-3.1.13, created on 2014-01-29 10:03:54
         compiled from "application/views/templates/request/view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1145990014525e444b7a6b96-88962248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8200a8f6e1dadf0539a6659a3619670394436af' => 
    array (
      0 => 'application/views/templates/request/view.tpl',
      1 => 1390964633,
      2 => 'file',
    ),
    '5f4d61325180270d3669b50100420575cc03324b' => 
    array (
      0 => 'application/views/templates/layout.tpl',
      1 => 1390534092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1145990014525e444b7a6b96-88962248',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_525e444b7a71f4_26362732',
  'variables' => 
  array (
    'nama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525e444b7a71f4_26362732')) {function content_525e444b7a71f4_26362732($_smarty_tpl) {?><!DOCTYPE html>
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
                Data Permintaan Dana
                <small>isi semua data permintaan dana</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="<?php echo site_url("home");?>
">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="<?php echo site_url("request");?>
">Data Permintaan Dana</a>
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
                    <h4><i class="icon-credit-card"></i>Data Permintaan Dana</h4>
                    <div class="actions">
                        <a href="<?php echo site_url("request/add");?>
" class="btn purple"><i class="icon-pencil"></i> Tambah</a>
                        <div class="btn-group">
                            <a class="btn green" href="#" data-toggle="dropdown">
                            <i class="icon-user"></i> Tools
                            <i class="icon-angle-down "></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:window.print()">Print</a></li>
                                <li><a href="<?php echo site_url("request/excel");?>
">Export to Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th class="hidden-480">Divisi</th>
                                <th class="hidden-480">Pengeluaran</th>
                                <th class="hidden-480">Jumlah</th>
                                <th class="hidden-480">Total</th>
                                <th class="hidden-480">Tipe</th>
                                <th class="hidden-480">Uraian</th>
                                <th class="hidden-480">Tgl Request</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['cekold'] = new Smarty_variable('', null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <?php $_smarty_tpl->tpl_vars['cekbaru'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value->request_id, null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['cekbaru']->value!=$_smarty_tpl->tpl_vars['cekold']->value&&strstr($_smarty_tpl->tpl_vars['cabang']->value,$_smarty_tpl->tpl_vars['row']->value->cabang_id)){?>
                            <tr class="odd gradeX">
                                <td><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->full_name;?>
</td>
                                <td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['row']->value->cabang_nama;?>
</td>
                                <td class="hidden-480"><?php echo getMultiItem($_smarty_tpl->tpl_vars['row']->value->request_id,'item_desc');?>
</td>
                                <td class="hidden-480" style="text-align: right">
                                    <?php echo getMultiItem($_smarty_tpl->tpl_vars['row']->value->request_id,'jumlah');?>

                                </td>
                                <td class="hidden-480" style="text-align: right">
                                    <?php echo getTotalPd($_smarty_tpl->tpl_vars['row']->value->request_id);?>

                                </td>
                                <td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['row']->value->tipe;?>
</td>
                                <td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['row']->value->uraian;?>
</td>
                                <td class="hidden-480"><?php echo showDate($_smarty_tpl->tpl_vars['row']->value->postdate);?>
</td>
                                <td <?php if ($_smarty_tpl->tpl_vars['row']->value->status=='Canceled'){?>style="color: red"<?php }?>>
                                    <?php echo getStatus($_smarty_tpl->tpl_vars['row']->value->request_id);?>

                                </td>
                                <td>
                                    <a href="<?php echo site_url("request/detail");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->request_id;?>
">
                                        <img src="<?php echo site_url("assets/img/document_detail.png");?>
" width="20">
                                    </a>&nbsp;&nbsp;&nbsp;
                                    <?php if ($_smarty_tpl->tpl_vars['row']->value->approved_by=='0'){?>
                                    <a href="<?php echo site_url("request/edit");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->request_id;?>
" onclick="return confirm('Anda yakin mau edit Request ini?');">
                                        <img src="<?php echo site_url("assets/img/document_edit.png");?>
" width="20">
                                    </a>&nbsp;&nbsp;&nbsp;
                                    <a href="<?php echo site_url("request/cancel");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->request_id;?>
" onclick="return confirm('Anda yakin mau Cancel Request ini?');">
                                        <img src="<?php echo site_url("assets/img/document_cancel.gif");?>
" width="20">
                                    </a>
                                    <?php }?>
                                </td>
                            </tr>
                            <?php $_smarty_tpl->tpl_vars['cekold'] = new Smarty_variable($_smarty_tpl->tpl_vars['cekbaru']->value, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
                            <?php }?>
                            <?php } ?>
                        </tbody>
                    </table>
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