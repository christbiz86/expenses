<?php /* Smarty version Smarty-3.1.13, created on 2013-11-25 14:24:03
         compiled from "application/views/templates/aktivasi.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20319224165260e445cb7af5-41810445%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '046ac9ec6c9edacc32e43dcde249eb6af84f919e' => 
    array (
      0 => 'application/views/templates/aktivasi.tpl',
      1 => 1384164000,
      2 => 'file',
    ),
    '34d0e19025473fbbe8124dfe98b6cf6a6477e3c8' => 
    array (
      0 => 'application/views/templates/layout-login.tpl',
      1 => 1384831182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20319224165260e445cb7af5-41810445',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5260e445d11669_76495806',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5260e445d11669_76495806')) {function content_5260e445d11669_76495806($_smarty_tpl) {?><!DOCTYPE html>
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
    
    
<h1>Aktivasi Akun Anda</h1>
<?php if ($_smarty_tpl->tpl_vars['cek']->value=='kosong'){?>
<div class="message-login-box">
    Alamat email Anda tidak terdaftar.<br>
    Klik disini untuk <a href="<?php echo site_url("welcome/register");?>
">Registrasi</a>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['cek']->value=='start'){?>
<form method="post" action="<?php echo site_url("welcome/submitaktivasi");?>
/<?php echo $_smarty_tpl->tpl_vars['pincode']->value;?>
">
    <input class="email" type="password" name="password1" placeholder="password baru Anda"><br>
    <input class="email" type="password" name="password2" placeholder="ulangi password Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Aktivasi Akun"></p>
</form>
<?php }elseif($_smarty_tpl->tpl_vars['cek']->value=='tidakdiisi'){?>
<form method="post" action="<?php echo site_url("welcome/submitaktivasi");?>
/<?php echo $_smarty_tpl->tpl_vars['pincode']->value;?>
">
    <input class="email" type="password" name="password1" placeholder="password baru Anda"><br>
    <input class="email" type="password" name="password2" placeholder="ulangi password Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Aktivasi Akun"></p>
</form>  
<div class="message-login-box">
    Maaf, Anda belum memasukkan Password Anda!!!
</div>
<?php }elseif($_smarty_tpl->tpl_vars['cek']->value=='bedapass'){?>
<form method="post" action="<?php echo site_url("welcome/submitaktivasi");?>
/<?php echo $_smarty_tpl->tpl_vars['pincode']->value;?>
">
    <input class="email" type="password" name="password1" placeholder="password baru Anda"><br>
    <input class="email" type="password" name="password2" placeholder="ulangi password Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Aktivasi Akun"></p>
</form>  
<div class="message-login-box">
    Maaf, Password yang Anda masukkan tidak sama!!! Silahkan diulangi kembali.
</div>
<?php }elseif($_smarty_tpl->tpl_vars['cek']->value=='sukses'){?>
<div class="message-login-box">
    Anda telah berhasil mengganti password. Klik disini untuk <a href="<?php echo site_url("welcome");?>
">Sign In</a>
</div>
<?php }?>

    
</body>
</html><?php }} ?>