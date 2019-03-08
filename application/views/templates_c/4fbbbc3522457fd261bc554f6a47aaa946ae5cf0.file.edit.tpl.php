<?php /* Smarty version Smarty-3.1.13, created on 2014-01-30 14:14:51
         compiled from "application/views/templates/listing/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15366322825264f0ca0f7764-79104267%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fbbbc3522457fd261bc554f6a47aaa946ae5cf0' => 
    array (
      0 => 'application/views/templates/listing/edit.tpl',
      1 => 1391066090,
      2 => 'file',
    ),
    '5f4d61325180270d3669b50100420575cc03324b' => 
    array (
      0 => 'application/views/templates/layout.tpl',
      1 => 1390534092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15366322825264f0ca0f7764-79104267',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5264f0ca195976_89247799',
  'variables' => 
  array (
    'nama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5264f0ca195976_89247799')) {function content_5264f0ca195976_89247799($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_form_validation')) include '/var/www/html/CM/system/libraries/smarty/libs/plugins/function.ci_form_validation.php';
?><!DOCTYPE html>
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
          <h3 class="page-title">
             Tambah Jenis Pengeluaran
             <small>form isian edit jenis pengeluaran</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="<?php echo site_url("home");?>
">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="<?php echo site_url("listing/add");?>
">Edit Jenis Pengeluaran</a></li>
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
                         <h4><i class="icon-reorder"></i>Form Edit Jenis Pengeluaran</h4>
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                         <form action="<?php echo site_url("listing/edit");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->item_id;?>
" method="post" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Nama Pengeluaran</label>
                                <div class="controls">
                                    <input name="desc" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->item_desc;?>
" type="text" class="m-wrap medium" />
                                    <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'desc','error'=>'true'),$_smarty_tpl);?>
</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kode Transaksi</label>
                                <div class="controls">
                                    <input name="kode" type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->item_kode;?>
" class="m-wrap medium" />
                                    <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'kode','error'=>'true'),$_smarty_tpl);?>
</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tipe</label>
                                <div class="controls">
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="tipe" value="Income" <?php if ($_smarty_tpl->tpl_vars['row']->value->item_tipe=='Income'){?>checked=""<?php }?> style="opacity: 0;"></span>
                                    </div>
                                    Pemasukan
                                    </label>
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="tipe" value="Expense" <?php if ($_smarty_tpl->tpl_vars['row']->value->item_tipe=='Expense'){?>checked=""<?php }?> style="opacity: 0;"></span>
                                    </div>
                                    Pengeluaran
                                    </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls">
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="status" value="Aktif" <?php if ($_smarty_tpl->tpl_vars['row']->value->item_status=='Aktif'){?>checked=""<?php }?> style="opacity: 0;"></span>
                                    </div>
                                    Aktif
                                    </label>
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="status" value="Non-aktif" <?php if ($_smarty_tpl->tpl_vars['row']->value->item_status=='Non-aktif'){?>checked=""<?php }?> style="opacity: 0;"></span>
                                    </div>
                                    Non-aktif
                                    </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Group</label>
                                <div class="controls">
                                    <select class="span4 m-wrap" name="group_id" tabindex="1">
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['row']->value->group_id;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->group_desc;?>
</option>
                                        <option value=""> --- </option>
                                        <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['group']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value->group_id;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value->group_desc;?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" onclick="return confirm('Anda yakin mau edit Pengeluaran ini?');" type="submit" class="btn blue"><i class="icon-ok"></i> Edit</button>
                                <button type="button" class="btn" onclick="location.href='<?php echo site_url('listing');?>
'">Cancel</button>
                            </div>
                         </form>
                        <?php } ?>
                         <!-- END FORM-->                
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
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