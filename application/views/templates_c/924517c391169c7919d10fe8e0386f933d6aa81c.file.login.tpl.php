<?php /* Smarty version Smarty-3.1.13, created on 2014-01-24 11:00:22
         compiled from "application/views/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:152563804352205f36e6a824-18893497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '924517c391169c7919d10fe8e0386f933d6aa81c' => 
    array (
      0 => 'application/views/templates/login.tpl',
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
  'nocache_hash' => '152563804352205f36e6a824-18893497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52205f36ee2748_18645572',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52205f36ee2748_18645572')) {function content_52205f36ee2748_18645572($_smarty_tpl) {?><!DOCTYPE html>
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
    
    
<h1>Simple Expense Reports</h1>
<form method="post" action="<?php echo site_url("welcome");?>
">
    <input class="email" type="text" name="email" placeholder="alamat email Anda"><br>
    <input class="email" type="password" name="password" placeholder="password Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Login"></p>
</form>
<?php if ($_smarty_tpl->tpl_vars['status']->value=='kosong'){?>
<div class="message-login-box">
    Maaf, Anda belum memasukkan Username atau Password!!!
</div>
<?php }elseif($_smarty_tpl->tpl_vars['status']->value=='gagal'){?>
<div class="message-login-box">
    Maaf, Anda salah memasukkan Username atau Password!!!
</div>
<?php }?>

    
</body>
</html><?php }} ?>