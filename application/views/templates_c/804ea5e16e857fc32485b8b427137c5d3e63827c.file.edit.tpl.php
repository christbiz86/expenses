<?php /* Smarty version Smarty-3.1.13, created on 2013-11-13 10:41:35
         compiled from "application/views/templates/income/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1860848310526e1987ee3004-56272938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '804ea5e16e857fc32485b8b427137c5d3e63827c' => 
    array (
      0 => 'application/views/templates/income/edit.tpl',
      1 => 1384163999,
      2 => 'file',
    ),
    '5f4d61325180270d3669b50100420575cc03324b' => 
    array (
      0 => 'application/views/templates/layout.tpl',
      1 => 1384163994,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1860848310526e1987ee3004-56272938',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_526e19880921c7_84745128',
  'variables' => 
  array (
    'nama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526e19880921c7_84745128')) {function content_526e19880921c7_84745128($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_form_validation')) include '/var/www/html/system/libraries/smarty/libs/plugins/function.ci_form_validation.php';
?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>ExpenseGoGo Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
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
            
    <script type="text/javascript">
    
function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)){
        alert('Hanya boleh diisi dengan angka saja');
        return false;
    } else {
        return true;
    }
}

function ubahharga(){
    var nStr = addtitik(stripNonNumeric($('#jumlah').val()));
    document.getElementById("jumlah").value = nStr;
}

function stripNonNumeric(str)
{
  str += '';
  var rgx = /^\d|\,|-$/;
  var out = '';
  for( var i = 0; i < str.length; i++ )
  {
    if( rgx.test( str.charAt(i) ) ){
      if( !( ( str.charAt(i) == '.' && out.indexOf( '.' ) != -1 ) ||
             ( str.charAt(i) == '-' && out.length != 0 ) ) ){
        out += str.charAt(i);
      }
    }
  }
  return out;
}

function addtitik(nStr){
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
      x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1 + x2;
}

</script>
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
       <div class="span12">
          <h3 class="page-title">
             Edit Permintaan Dana
             <small>form isian edit permintaan dana</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="<?php echo site_url("home");?>
">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li>
                <a href="<?php echo site_url("request");?>
">Pemasukan Dana</a>
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="<?php echo site_url("request/edit");?>
/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">Edit Pemasukan Dana</a></li>
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
                         <h4><i class="icon-reorder"></i>Form Edit Pemasukan Dana</h4>
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <form action="<?php echo site_url("income/edit");?>
/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="post" class="form-horizontal">
                            <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                            <div class="control-group">
                                <label class="control-label">Nama</label>
                                <div class="controls">
                                    <input name="nama" type="text" disabled="" value="<?php echo $_smarty_tpl->tpl_vars['nama']->value;?>
"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Pengeluaran</label>
                                <div class="controls">
                                    <select class="span4 m-wrap" name="item" tabindex="1">
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value->item_id;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value->item_desc;?>
</option>
                                        <?php  $_smarty_tpl->tpl_vars['hasil'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['hasil']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['hasil']->key => $_smarty_tpl->tpl_vars['hasil']->value){
$_smarty_tpl->tpl_vars['hasil']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['hasil']->value->item_id;?>
"><?php echo $_smarty_tpl->tpl_vars['hasil']->value->item_desc;?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Uraian</label>
                                <div class="controls">
                                    <textarea class="span6 m-wrap" rows="3" name="uraian"><?php echo $_smarty_tpl->tpl_vars['data']->value->uraian;?>
</textarea>
                                    <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'uraian','error'=>'true'),$_smarty_tpl);?>
</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Jumlah</label>
                                <div class="controls">
                                    <input type="text" id="jumlah" value="<?php echo dec($_smarty_tpl->tpl_vars['data']->value->jumlah);?>
" placeholder="jumlah budget" class="m-wrap medium" onclick="ubahharga()" name="jumlah" onkeyup="ubahharga()" onkeypress="return isNumberKey(event)" />
                                    <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'jumlah','error'=>'true'),$_smarty_tpl);?>
</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Terbilang</label>
                                <div class="controls">
                                    <input name="terbilang" value="<?php echo dec($_smarty_tpl->tpl_vars['data']->value->terbilang);?>
" type="text" placeholder="terbilang" class="m-wrap large" />
                                    <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'terbilang','error'=>'true'),$_smarty_tpl);?>
</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Customer</label>
                                <div class="controls">
                                    <select class="span4 m-wrap" name="supplier" tabindex="1">
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value->supplier_id;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value->supplier_name;?>
</option>
                                        <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['supplier']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value){
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['list']->value->supplier_id;?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value->supplier_name;?>
</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Pembayaran</label>
                                <div class="controls">
                                    <select class="span2 m-wrap" data-placeholder="Pilih cara pembayaran" name="payment" tabindex="1">
                                        <option value="Tunai" <?php if ($_smarty_tpl->tpl_vars['data']->value->payment=='Tunai'){?>selected=""<?php }?>>Tunai</option>
                                        <option value="Transfer" <?php if ($_smarty_tpl->tpl_vars['data']->value->payment=='Transfer'){?>selected=""<?php }?>>Transfer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nama Pembeli</label>
                                <div class="controls">
                                    <input name="pembeli" value="<?php echo dec($_smarty_tpl->tpl_vars['data']->value->pembeli);?>
" type="text" placeholder="nama penerima" class="m-wrap large" />
                                    <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'pembeli','error'=>'true'),$_smarty_tpl);?>
</span>
                                </div>
                            </div>
                            <div class="control-group transfer" <?php if ($_smarty_tpl->tpl_vars['data']->value->payment=='Tunai'){?>style="display: none"<?php }?>>
                                <label class="control-label">Bank & No Rekening</label>
                                <div class="controls">
                                    <input name="bank" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->bank;?>
" type="text" placeholder="nama bank" class="m-wrap small" />
                                    <input name="no_rek" value="<?php echo $_smarty_tpl->tpl_vars['data']->value->no_rek;?>
" type="text" placeholder="no rekening" class="m-wrap large" />
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" onclick="return confirm('Anda yakin mau edit Permintaan Dana?');" type="submit" class="btn blue"><i class="icon-ok"></i> Edit</button>
                                <button type="button" class="btn" onclick="location.href='<?php echo site_url('user');?>
'">Cancel</button>
                            </div>
                            <?php } ?>
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
        
        $("select[name='payment']").live("change", function(){
            var isi = $(this).val();
            if(isi=='Tunai'){
                $('.transfer').hide();
            } else {
                $('.transfer').show();
            }
        });
    });
</script>

	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>