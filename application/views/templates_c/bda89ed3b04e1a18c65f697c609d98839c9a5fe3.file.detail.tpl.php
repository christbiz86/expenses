<?php /* Smarty version Smarty-3.1.13, created on 2014-01-29 09:49:09
         compiled from "application/views/templates/request/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:309392509525e5ab52fc173-15527806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bda89ed3b04e1a18c65f697c609d98839c9a5fe3' => 
    array (
      0 => 'application/views/templates/request/detail.tpl',
      1 => 1390963747,
      2 => 'file',
    ),
    '5f4d61325180270d3669b50100420575cc03324b' => 
    array (
      0 => 'application/views/templates/layout.tpl',
      1 => 1390534092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '309392509525e5ab52fc173-15527806',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_525e5ab5396989_04098543',
  'variables' => 
  array (
    'nama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525e5ab5396989_04098543')) {function content_525e5ab5396989_04098543($_smarty_tpl) {?><!DOCTYPE html>
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
               Data Permohonan Dana
               <small>data detail Permohonan Dana</small>
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
">Data Permohonan Dana</a>
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
                         <h4><i class="icon-reorder"></i>Data Detail Permohonan Dana</h4>
                         
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                         <div class="form-horizontal form-view">
                            <h3>View Info Permohonan Dana</h3>
                            <h3 class="form-section">Data Pemohon</h3>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label" for="firstName">Nama :</label>
                                     <div class="controls">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['row']->value->full_name;?>
</span>
                                     </div>
                                  </div>
                               </div>
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label" for="lastName">Cabang:</label>
                                     <div class="controls">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['row']->value->cabang_nama;?>
</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Email:</label>
                                     <div class="controls">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['row']->value->email;?>
</span> 
                                     </div>
                                  </div>
                               </div>
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label" for="lastName">Level:</label>
                                     <div class="controls">
                                        <span class="text"><?php echo $_smarty_tpl->tpl_vars['row']->value->level_desc;?>
</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <h3 class="form-section">Data Permohonan Dana</h3>
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
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Pengeluaran :</label>
                                     <div class="controls">
                                        <span class="text">
                                            <table>
                                                <tr>
                                                    <td><?php echo getMultiItem($_smarty_tpl->tpl_vars['row']->value->request_id,'item_desc');?>
</td>
                                                    <td><?php echo getMultiItem($_smarty_tpl->tpl_vars['row']->value->request_id,'jumlah');?>
</td>
                                                </tr>
                                            </table>
                                        </span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Status:</label>
                                     <div class="controls">
                                        <span class="text"><?php echo getStatus($_smarty_tpl->tpl_vars['row']->value->request_id);?>

                                        </span>
                                     </div>
                                  </div>
                               </div>
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Jumlah Total:</label>
                                     <div class="controls">
                                        <span class="text"><?php echo getTotalPd($_smarty_tpl->tpl_vars['row']->value->request_id);?>
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
                                        <?php if ($_smarty_tpl->tpl_vars['row']->value->dokumen){?>
                                        <span class="text">
                                            <a target="_blank" href="<?php echo site_url("resources/dokumen");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->dokumen;?>
">Klik disini</a>
                                        </span>
                                        <?php }?>
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
                            <div class="form-actions">
                                <?php if ($_smarty_tpl->tpl_vars['row']->value->approved_by=='0'){?>
                                <a href="<?php echo site_url("request/edit");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->request_id;?>
">
                                <button type="submit" class="btn blue"><i class="icon-pencil"></i> Edit</button>
                                </a>
                                <?php }?>
                                <a href="<?php echo site_url("request/index");?>
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