<?php /* Smarty version Smarty-3.1.13, created on 2014-01-29 17:13:08
         compiled from "application/views/templates/request/approve.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1637490157525f438c9b3002-74127249%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3174bd3823304152aa0a1ae1e559b19b88b45a30' => 
    array (
      0 => 'application/views/templates/request/approve.tpl',
      1 => 1390990387,
      2 => 'file',
    ),
    '5f4d61325180270d3669b50100420575cc03324b' => 
    array (
      0 => 'application/views/templates/layout.tpl',
      1 => 1390534092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1637490157525f438c9b3002-74127249',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_525f438c9d5b22_87990655',
  'variables' => 
  array (
    'nama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525f438c9d5b22_87990655')) {function content_525f438c9d5b22_87990655($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_form_validation')) include '/var/www/html/CM/system/libraries/smarty/libs/plugins/function.ci_form_validation.php';
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
<link type="text/css" href="<?php echo base_url();?>
resources/calendar/jquery.datepick.css" rel="stylesheet">

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
                Data Persetujuan Dana
                <small>isi semua data persetujuan dana</small>
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
">Data Persetujuan Dana</a>
                </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
        <div class="span12">
            
            <form method="post" action="">
            <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'tgl_awal','error'=>'true'),$_smarty_tpl);?>
</span>
            <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'tgl_akhir','error'=>'true'),$_smarty_tpl);?>
</span>
            Periode : 
            <input name="tgl_awal" value="<?php echo smarty_function_ci_form_validation(array('field'=>'tgl_awal'),$_smarty_tpl);?>
" type="text" id="popupDatepicker2"> s/d 
            <input name="tgl_akhir" value="<?php echo smarty_function_ci_form_validation(array('field'=>'tgl_akhir'),$_smarty_tpl);?>
" type="text" id="popupDatepicker"><br>
            <button name="submit" value="submit" type="submit" class="btn blue"><i class="icon-ok"></i> Submit</button>
            </form>
            
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box light-grey">
                <div class="portlet-title">
                    <h4><i class="icon-globe"></i>Data Persetujuan Dana</h4>
                    <div class="tools">
                        
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th style="width:8px;">No</th>
                                <th>Nama</th>
                                <th class="hidden-480">Divisi</th>
                                <th class="hidden-480">Jumlah</th>
                                <th class="hidden-480">Tipe</th>
                                <th>Uraian</th>
                                <th>Tgl Request</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['cekold'] = new Smarty_variable('', null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['divisi'] = new Smarty_variable(getField('divisi',$_smarty_tpl->tpl_vars['sesi_login']->value,'login_id','login'), null, 0);?>
                            <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                            <?php $_smarty_tpl->tpl_vars['cekbaru'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value->request_id, null, 0);?>
                            <?php if ($_smarty_tpl->tpl_vars['cekbaru']->value!=$_smarty_tpl->tpl_vars['cekold']->value&&(strstr($_smarty_tpl->tpl_vars['cabang']->value,$_smarty_tpl->tpl_vars['row']->value->cabang_id)||$_smarty_tpl->tpl_vars['divisi']->value!='USER')){?>
                            <tr class="odd gradeX">
                                <td><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->full_name;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->cabang_nama;?>
</td>
                                <td style="text-align: right"><?php echo getTotalPd($_smarty_tpl->tpl_vars['row']->value->request_id);?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tipe;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['row']->value->uraian;?>
</td>
                                <td><?php echo showDate($_smarty_tpl->tpl_vars['row']->value->postdate);?>
</td>
                                <td <?php if ($_smarty_tpl->tpl_vars['row']->value->status=='Canceled'){?>style="color: red"<?php }?>>
                                    <?php echo $_smarty_tpl->tpl_vars['row']->value->status;?>

                                    <?php if ($_smarty_tpl->tpl_vars['row']->value->status!='New'){?>
                                        by <?php echo getField('full_name',$_smarty_tpl->tpl_vars['row']->value->approved_by,'gogo_login.login_id','login');?>
 - <?php echo showDate($_smarty_tpl->tpl_vars['row']->value->date_approve);?>

                                    <?php }?>
                                </td>
                                <td>
                                    <a target="_blank" href="<?php echo site_url("request/detail");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->request_id;?>
"><span style="cursor: pointer" class="label label-inverse">Detail</span></a>
                                    <?php if ($_smarty_tpl->tpl_vars['divisi']->value!='USER'){?>
                                        <?php $_smarty_tpl->tpl_vars['cek'] = new Smarty_variable(cekLevelApprove($_smarty_tpl->tpl_vars['divisi']->value,$_smarty_tpl->tpl_vars['row']->value->request_id), null, 0);?>
                                        <?php if ($_smarty_tpl->tpl_vars['cek']->value){?>
                                        <a href="<?php echo site_url("request/accept");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->request_id;?>
" onclick="return confirm('Anda yakin mau approve Permintaan Dana ini?');"><span style="cursor: pointer" class="label label-success">Approve</span></a>
                                        <a href="<?php echo site_url("request/reject");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->request_id;?>
" onclick="return confirm('Anda yakin mau decline Permintaan Dana ini?');"><span style="cursor: pointer" class="label label-warning">Decline</span></a>    
                                        <?php }?>
                                    <?php }elseif((getField('divisi',$_smarty_tpl->tpl_vars['row']->value->approved_by,'login_id','login')=='USER')){?>
                                        <?php if (($_smarty_tpl->tpl_vars['row']->value->approved_by)){?>
                                            <?php if (((getLevelPosisi($_smarty_tpl->tpl_vars['row']->value->approved_by)-getLevelPosisi($_smarty_tpl->tpl_vars['sesi_login']->value)==1)&&$_smarty_tpl->tpl_vars['row']->value->approved_by!=$_smarty_tpl->tpl_vars['sesi_login']->value&&$_smarty_tpl->tpl_vars['row']->value->status!='Decline')){?>
                                            <a href="<?php echo site_url("request/accept");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->request_id;?>
" onclick="return confirm('Anda yakin mau approve Permintaan Dana ini?');"><span style="cursor: pointer" class="label label-success">Approve</span></a>
                                            <a href="<?php echo site_url("request/reject");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->request_id;?>
" onclick="return confirm('Anda yakin mau decline Permintaan Dana ini?');"><span style="cursor: pointer" class="label label-warning">Decline</span></a>
                                            <?php }?>
                                        <?php }else{ ?>
                                            <!-- belum di approve sama sekali -->
                                            <a href="<?php echo site_url("request/accept");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->request_id;?>
" onclick="return confirm('Anda yakin mau approve Permintaan Dana ini?');"><span style="cursor: pointer" class="label label-success">Approve</span></a>
                                            <a href="<?php echo site_url("request/reject");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->request_id;?>
" onclick="return confirm('Anda yakin mau decline Permintaan Dana ini?');"><span style="cursor: pointer" class="label label-warning">Decline</span></a>
                                        <?php }?>
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
            <!-- END EXAMPLE TABLE PORTLET-->
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
<script type="text/javascript" src="<?php echo base_url();?>
resources/calendar/jquery.datepick.js"></script>
<script>
    jQuery(document).ready(function() {			
        // initiate layout and plugins
        App.setPage("table_managed");
        App.init();
        
        $('#popupDatepicker').datepick();
        $('#popupDatepicker2').datepick();
        $('#inlineDatepicker').datepick({onSelect: showDate});
         
    });
</script>

	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>