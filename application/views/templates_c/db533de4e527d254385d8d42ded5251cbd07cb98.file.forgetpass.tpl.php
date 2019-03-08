<?php /* Smarty version Smarty-3.1.13, created on 2013-11-26 17:32:12
         compiled from "application/views/templates/forgetpass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:726957939522ea484930c80-67800426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db533de4e527d254385d8d42ded5251cbd07cb98' => 
    array (
      0 => 'application/views/templates/forgetpass.tpl',
      1 => 1384163994,
      2 => 'file',
    ),
    '34d0e19025473fbbe8124dfe98b6cf6a6477e3c8' => 
    array (
      0 => 'application/views/templates/layout-login.tpl',
      1 => 1384831182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '726957939522ea484930c80-67800426',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522ea484acff63_39073907',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522ea484acff63_39073907')) {function content_522ea484acff63_39073907($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_form_validation')) include '/var/www/html/system/libraries/smarty/libs/plugins/function.ci_form_validation.php';
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Simple and Easy Expense Reports System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="simple and easy expense reports system">
    <meta name="author" content="Celebes Mineral">
    <meta HTTP-EQUIV="Cache-control" content="public, max-age=28800" />
    <link href="<?php echo base_url("resources/css/style.css");?>
" rel="stylesheet">
</head>
<body class="body-login">
    <div style="color: white;float: left;padding: 15px;">
        <a class="link-help" href="">Bantuan</a><span class="link-batas"> | </span>
        <a class="link-help" href="<?php echo site_url("info/about_us");?>
">Tentang Kami</a><span class="link-batas"> | </span>
        <a class="link-help" href="">Syarat</a><span class="link-batas"> | </span>
        <a class="link-help" href="">Privasi</a><span class="link-batas"> | </span>
        <a class="link-help" href="">Feedback</a><span class="link-batas"> | </span>
        <span class="copyright">&COPY; 123GoGo</span>
    </div>
    <div class="sign-in"><a href="<?php echo site_url("welcome/register");?>
">Registrasi</a></div>
    <div class="clear"></div>
    <img alt="simple" src="<?php echo site_url("resources/images/logo.png");?>
" style="margin-top: 30px;" />
    
    
<h1>Lupa Kata Sandi - Expense GoGo</h1>
<?php if ($_smarty_tpl->tpl_vars['cek']->value==''){?>
<form method="post" action="<?php echo site_url("welcome/forgetpass");?>
">
    <input class="email" type="text" value="<?php echo smarty_function_ci_form_validation(array('field'=>'email'),$_smarty_tpl);?>
" name="email" placeholder="alamat email Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Lupa Password"></p>
</form>
<div class="message-login-box">
Sudah punya akun? <a href="<?php echo site_url("welcome");?>
">Sign In</a>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['cek']->value=='gagal'){?>
<form method="post" action="<?php echo site_url("welcome/forgetpass");?>
">
    <input class="email" type="text" value="<?php echo smarty_function_ci_form_validation(array('field'=>'email'),$_smarty_tpl);?>
" name="email" placeholder="alamat email Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Lupa Password"></p>
</form>
<div class="message-login-box">
Anda belum memasukkan alamat email.    
</div>
<?php }elseif($_smarty_tpl->tpl_vars['cek']->value=='sukses'){?>
<div class="message-login-box">
Kami telah mengirimkan email untuk reset Password. Segera cek email Anda di Inbox atau Spam.<br><br>
Kembali ke <a href="<?php echo site_url("welcome");?>
">Home</a>
</div>
<?php }else{ ?>
    <span style="color: red">Alamat <?php echo $_smarty_tpl->tpl_vars['cek']->value->email;?>
</span> tidak terdaftar.<br>
    Klik disini untuk <a href="<?php echo site_url("welcome/register");?>
">Sign Up</a>
<?php }?>

    
</body>
</html><?php }} ?>