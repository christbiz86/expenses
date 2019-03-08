<?php /* Smarty version Smarty-3.1.13, created on 2014-02-04 09:19:41
         compiled from "application/views/templates/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1490810930522e74b7a50794-15145091%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2707ab0acc682bc626c51f9193f8cef2d544cf1' => 
    array (
      0 => 'application/views/templates/register.tpl',
      1 => 1390534093,
      2 => 'file',
    ),
    '34d0e19025473fbbe8124dfe98b6cf6a6477e3c8' => 
    array (
      0 => 'application/views/templates/layout-login.tpl',
      1 => 1390534094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1490810930522e74b7a50794-15145091',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_522e74b7b66ca5_24076569',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_522e74b7b66ca5_24076569')) {function content_522e74b7b66ca5_24076569($_smarty_tpl) {?><?php if (!is_callable('smarty_function_ci_form_validation')) include '/var/www/html/CM/system/libraries/smarty/libs/plugins/function.ci_form_validation.php';
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
    
    

<h1>Register - Expense GoGo</h1>
<?php if ($_smarty_tpl->tpl_vars['cek']->value=='start'){?>
<form method="post" action="<?php echo site_url("welcome/register");?>
">
    <input class="email" type="text" value="<?php echo smarty_function_ci_form_validation(array('field'=>'email'),$_smarty_tpl);?>
" name="email" placeholder="alamat email Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Free Register"></p>
</form>
<div class="message-login-box">
Sudah punya akun? <a href="<?php echo site_url("welcome");?>
">Sign In</a>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['cek']->value=='sukses'){?>
<div class="message-login-box">
Anda berhasil registrasi. Silahkan cek email Anda untuk verifikasi.<br><br>
Kembali ke <a href="<?php echo site_url("welcome");?>
">Home</a>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['cek']->value=='gagal'){?>
<form method="post" action="<?php echo site_url("welcome/register");?>
">
    <input class="email" type="text" value="<?php echo smarty_function_ci_form_validation(array('field'=>'email'),$_smarty_tpl);?>
" name="email" placeholder="your email address"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Free Register"></p>
</form>
<div class="message-login-box">
Anda belum memasukkan alamat email.    
</div>
<?php }else{ ?>
<div class="message-login-box">
<span style="color: red">Alamat <?php echo $_smarty_tpl->tpl_vars['cek']->value->email;?>
</span> sudah terdaftar.<br>
Klik disini untuk <a href="<?php echo site_url("welcome");?>
">Sign In</a> atau <a href="<?php echo site_url("welcome/forgetpass");?>
">Lupa Password Anda?</a>
</div>
<?php }?>  


    
</body>
</html><?php }} ?>