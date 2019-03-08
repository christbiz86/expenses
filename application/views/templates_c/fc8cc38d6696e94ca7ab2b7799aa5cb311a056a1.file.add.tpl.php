<?php /* Smarty version Smarty-3.1.13, created on 2014-02-04 14:53:29
         compiled from "application/views/templates/user/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29594384752536e3cb7f6f8-52860063%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc8cc38d6696e94ca7ab2b7799aa5cb311a056a1' => 
    array (
      0 => 'application/views/templates/user/add.tpl',
      1 => 1391500406,
      2 => 'file',
    ),
    '5f4d61325180270d3669b50100420575cc03324b' => 
    array (
      0 => 'application/views/templates/layout.tpl',
      1 => 1390534092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29594384752536e3cb7f6f8-52860063',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52536e3cb7fd04_19754762',
  'variables' => 
  array (
    'nama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52536e3cb7fd04_19754762')) {function content_52536e3cb7fd04_19754762($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_form_validation')) include '/var/www/html/CM/system/libraries/smarty/libs/plugins/function.ci_form_validation.php';
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
             Tambah User
             <small>form isian tambah user</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="<?php echo site_url("home");?>
">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li>
                <a href="<?php echo site_url("user");?>
">User</a>
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="<?php echo site_url("user/add");?>
">Tambah User</a></li>
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
                         <h4><i class="icon-reorder"></i>Form Tambah User</h4>
                         
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <form action="<?php echo site_url("user/add");?>
" method="post" class="form-horizontal">
                            <?php if ($_smarty_tpl->tpl_vars['tambah']->value=='existing'){?>
                            <div style="color: #b94a48;padding: 5px">Maaf, email sudah terdaftar. Silahkan gunakan alamat email yang lain.</div>
                            <?php }?>
                            <div class="control-group">
                                <label class="control-label">Nama</label>
                                <div class="controls">
                                    <input name="nama" type="text" value="<?php echo smarty_function_ci_form_validation(array('field'=>'nama'),$_smarty_tpl);?>
" placeholder="nama lengkap" class="m-wrap medium" />
                                    <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'nama','error'=>'true'),$_smarty_tpl);?>
</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Password</label>
                                <div class="controls">
                                    <input name="password" type="password" placeholder="kata sandi" class="m-wrap medium" />
                                    <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'password','error'=>'true'),$_smarty_tpl);?>
</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Konfirmasi Password</label>
                                <div class="controls">
                                    <input name="password1" type="password" placeholder="ulangi kata sandi" class="m-wrap medium" />
                                    <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'password1','error'=>'true'),$_smarty_tpl);?>
</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input name="email" value="<?php echo smarty_function_ci_form_validation(array('field'=>'email'),$_smarty_tpl);?>
" type="text" placeholder="alamat email" class="m-wrap medium" />
                                    <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'email','error'=>'true'),$_smarty_tpl);?>
</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Posisi</label>
                                <div class="controls">
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" value="USER" checked="" />User
                                    </label>
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" value="FIN" />Finance
                                    </label>  
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" value="ACCT" />Accounting
                                    </label>  
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" value="MGMT" />Management
                                    </label> 
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" value="TRE" />Treasury
                                    </label> 
                                </div>
                            </div>
                            <div class="control-group divisi">
                                <label class="control-label">Divisi</label>
                                <div class="controls">
                                    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['cabang']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
                                    <label class="radio">
                                    <input type="radio" name="cabang" value="<?php echo $_smarty_tpl->tpl_vars['row']->value->cabang_id;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->cabang_nama;?>

                                    </label>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Level</label>
                                <div class="controls">
                                    <select name="level">
                                        <?php  $_smarty_tpl->tpl_vars['row1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['level']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row1']->key => $_smarty_tpl->tpl_vars['row1']->value){
$_smarty_tpl->tpl_vars['row1']->_loop = true;
?>
                                            <?php if ($_smarty_tpl->tpl_vars['row1']->value->level_desc!='Administrator'){?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['row1']->value->level_id;?>
"><?php echo $_smarty_tpl->tpl_vars['row1']->value->level_desc;?>
</option>
                                            <?php }?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls">
                                    <label class="radio">
                                    <input type="radio" name="status" value="TRUE" checked="" />Aktif
                                    </label>
                                    <label class="radio">
                                    <input type="radio" name="status" value="FALSE" />Non-Aktif
                                    </label>  
                                </div>
                            </div>
                            <div class="control-group privileges">
                                <label class="control-label">Privileges</label>
                                <div class="controls">
                                    <div style="float: left;width: 150px"><input type="checkbox" name="supplier" value="TRUE">Supplier</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="struktur" value="TRUE">Struktur</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="budget" value="TRUE">Budget</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="list_coa" value="TRUE">List Pengeluaran</div>
                                    <div style="clear: both"></div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="reporting" value="TRUE">Reporting</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="libur" value="TRUE">Pengajuan Libur</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="request" value="TRUE">Permohonan Dana</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="income" value="TRUE">Pemasukan Dana</div>
                                    <div style="clear: both"></div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="scan" value="TRUE">Pindai Dokumen</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="stock" value="TRUE">Stok</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="accounting" value="TRUE">Akunting</div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" type="submit" class="btn blue"><i class="icon-ok"></i> Tambah</button>
                                <button type="button" class="btn" onclick="location.href='<?php echo site_url('user');?>
'">Cancel</button>
                            </div>
                         </form>
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
        
        $("#divisi").live("click", function(){
            var isi = $(this).val();
            if(isi != 'USER'){
                $('.privileges').hide();
                $('.divisi').hide();
            } else {
                $('.privileges').show();
                $('.divisi').show();
            }
        });
        
    });
</script>

	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>