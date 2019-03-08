<?php /* Smarty version Smarty-3.1.13, created on 2014-01-28 13:49:57
         compiled from "application/views/templates/request/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63099772752566b78b92a53-19638260%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59f17f5a5e9d48cc89a0f6d30989664093ff3b7f' => 
    array (
      0 => 'application/views/templates/request/add.tpl',
      1 => 1390891795,
      2 => 'file',
    ),
    '5f4d61325180270d3669b50100420575cc03324b' => 
    array (
      0 => 'application/views/templates/layout.tpl',
      1 => 1390534092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63099772752566b78b92a53-19638260',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52566b78c43795_00656874',
  'variables' => 
  array (
    'nama' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52566b78c43795_00656874')) {function content_52566b78c43795_00656874($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_form_validation')) include '/var/www/html/CM/system/libraries/smarty/libs/plugins/function.ci_form_validation.php';
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
            
<script type="text/javascript">
        
fields = 1;
function addInput() {
    if (fields != 10) {
        document.getElementById('text').innerHTML += "<div class=\"control-group\"><label class=\"control-label\">Pengeluaran</label><div class=\"controls\"><select class=\"span4 m-wrap\" name=\"item[]\" tabindex=\"1\"><option value=\"\"> --- </option><?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?><option value=\"<?php echo $_smarty_tpl->tpl_vars['data']->value->item_id;?>
\"><?php echo $_smarty_tpl->tpl_vars['data']->value->item_desc;?>
</option><?php } ?></select>&nbsp;&nbsp;&nbsp;Rp. <input type=\"text\" id=\"jumlah" + fields + "\" placeholder=\"jumlah permintaan\" class=\"m-wrap medium\" name=\"jumlah[]\" onkeyup=\"ubahharga()\" onkeypress=\"return isNumberKey(event)\" /></div></div>";
        fields += 1;
    } else {
        //document.getElementById('text').innerHTML += "<br />Only 10 upload fields allowed.";
        document.form.add.disabled=true;
    }
}

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
    for (i=1;i<10;i++){
        var isi = addtitik(stripNonNumeric($('#jumlah' + i).val()));
        document.getElementById("jumlah" + i).value = isi;
    }
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
             Tambah Permintaan Dana
             <small>form isian tambah permintaan dana</small>
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
">Permintaan Dana</a>
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="<?php echo site_url("request/add");?>
">Tambah Permintaan Dana</a></li>
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
                         <h4><i class="icon-reorder"></i>Form Tambah Permintaan Dana</h4>
                         
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <form action="<?php echo site_url("request/add");?>
" enctype="multipart/form-data" method="post" class="form-horizontal">
                            <?php if ($_smarty_tpl->tpl_vars['budget']->value=='over'){?>
                            <div style="color: #b94a48;padding: 15px;font-size: 20px;">Maaf, Anda belum memasukkan budget atau Anda sudah over-budget.</div>
                            <?php }?>
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
                                    <select class="span4 m-wrap" name="item[]" tabindex="1">
                                        <option value=""> --- </option>
                                        <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['item']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['data']->value->item_id;?>
"><?php echo $_smarty_tpl->tpl_vars['data']->value->item_desc;?>
</option>
                                        <?php } ?>
                                    </select>
                                    &nbsp;&nbsp;&nbsp;Rp. <input type="text" id="jumlah" value="<?php echo smarty_function_ci_form_validation(array('field'=>'jumlah'),$_smarty_tpl);?>
" placeholder="jumlah permintaan" class="m-wrap medium" name="jumlah[]" onkeyup="ubahharga()" onkeypress="return isNumberKey(event)" />
                                    <input type="button" onclick="addInput()" name="add" value="Tambah pengeluaran" />
                                </div>
                            </div>
                            
                            <div id="text"></div>
                                
                            <div class="control-group">
                                <label class="control-label">Uraian</label>
                                <div class="controls">
                                    <textarea class="span6 m-wrap" rows="3" name="uraian" value="<?php echo smarty_function_ci_form_validation(array('field'=>'uraian'),$_smarty_tpl);?>
"></textarea>
                                    <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'uraian','error'=>'true'),$_smarty_tpl);?>
</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Terbilang</label>
                                <div class="controls">
                                    <input name="terbilang" value="<?php echo smarty_function_ci_form_validation(array('field'=>'terbilang'),$_smarty_tpl);?>
" type="text" placeholder="terbilang" class="m-wrap large" />
                                    <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'terbilang','error'=>'true'),$_smarty_tpl);?>
</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Supplier</label>
                                <div class="controls">
                                    <select class="span4 m-wrap" name="supplier" tabindex="1">
                                        <option value="">---- Pilih Satu ----</option>
                                        <option value="Others">Others</option>
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
                                    <input type="text" class="sup-other" value="<?php echo smarty_function_ci_form_validation(array('field'=>'supplier_other'),$_smarty_tpl);?>
" class="input-short" name="supplier_other" style="display: none" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tipe</label>
                                <div class="controls">
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="tipe" value="Reimbursable" style="opacity: 0;"></span>
                                    </div>
                                    <span class="tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here.">Reimbursable</span>
                                    </label>
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="tipe" value="Billable" style="opacity: 0;"></span>
                                    </div>
                                    <span class="tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here.">Billable</span>
                                    </label>
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="tipe" value="Urgent Request" style="opacity: 0;"></span>
                                    </div>
                                    <span class="tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here.">Urgent Request</span>
                                    </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Pembayaran</label>
                                <div class="controls">
                                    <select class="span2 m-wrap" data-placeholder="Pilih cara pembayaran" name="payment" tabindex="1">
                                        <option value="Tunai">Tunai</option>
                                        <option value="Transfer">Transfer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nama Penerima</label>
                                <div class="controls">
                                    <input name="penerima" value="<?php echo smarty_function_ci_form_validation(array('field'=>'penerima'),$_smarty_tpl);?>
" type="text" placeholder="nama penerima" class="m-wrap large" />
                                    <span class="help-block"><?php echo smarty_function_ci_form_validation(array('field'=>'penerima','error'=>'true'),$_smarty_tpl);?>
</span>
                                </div>
                            </div>
                            <div class="control-group transfer" style="display: none">
                                <label class="control-label">Bank & No Rekening</label>
                                <div class="controls">
                                    <input name="bank" value="<?php echo smarty_function_ci_form_validation(array('field'=>'bank'),$_smarty_tpl);?>
" type="text" placeholder="nama bank" class="m-wrap small" />
                                    <input name="no_rek" value="<?php echo smarty_function_ci_form_validation(array('field'=>'no_rek'),$_smarty_tpl);?>
" type="text" placeholder="no rekening" class="m-wrap large" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Dokumen lampiran</label>
                                <div class="controls">
                                    <input type="file" name="dokumen[]" class="multi"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Komentar</label>
                                <div class="controls">
                                    <textarea class="span6 m-wrap" rows="3" name="comment" value="<?php echo smarty_function_ci_form_validation(array('field'=>'comment'),$_smarty_tpl);?>
"></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" onclick="return confirm('Anda yakin mau tambah Permintaan Dana?');" type="submit" class="btn blue"><i class="icon-ok"></i> Tambah</button>
                                <button type="button" class="btn" onclick="location.href='<?php echo site_url('request');?>
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
	
<script src="<?php echo site_url("resources/jquery.MultiFile.js");?>
" type="text/javascript" language="javascript"></script>

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
        
        $("select[name='supplier']").live("change", function(){
            var isisup = $(this).val();
            if(isisup=='Others'){
                $('.sup-other').show();
            } else {
                $('.sup-other').hide();
            }
        });
    });
</script>

	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html><?php }} ?>