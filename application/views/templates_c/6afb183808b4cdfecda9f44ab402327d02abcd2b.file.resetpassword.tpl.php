<?php /* Smarty version Smarty-3.1.13, created on 2013-09-25 10:44:24
         compiled from "application/views/templates/resetpassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:85117830352426a92344ac9-79316325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6afb183808b4cdfecda9f44ab402327d02abcd2b' => 
    array (
      0 => 'application/views/templates/resetpassword.tpl',
      1 => 1380098377,
      2 => 'file',
    ),
    '34d0e19025473fbbe8124dfe98b6cf6a6477e3c8' => 
    array (
      0 => 'application/views/templates/layout-login.tpl',
      1 => 1380080340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85117830352426a92344ac9-79316325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52426a924482f5_81836436',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52426a924482f5_81836436')) {function content_52426a924482f5_81836436($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Simple and Easy Expense Reports System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="simple and easy expense reports system">
    <meta name="author" content="Celebes Mineral">
    <link href="<?php echo base_url("resources/css/style.css");?>
" rel="stylesheet">
</head>
<body class="body-login">
    <div style="color: white;float: left;padding: 15px;">
        <a class="link-help" href="">Help</a><span class="link-batas"> | </span>
        <a class="link-help" href="">About Us</a><span class="link-batas"> | </span>
        <a class="link-help" href="">Terms</a><span class="link-batas"> | </span>
        <a class="link-help" href="">Privacy</a><span class="link-batas"> | </span>
        <a class="link-help" href="">Feedback</a><span class="link-batas"> | </span>
        <span class="copyright">&COPY; ExpenseGoGo</span>
    </div>
    <div class="sign-in"><a href="<?php echo site_url("welcome/register");?>
">Sign Up</a></div>
    <div class="clear"></div>
    <img alt="simple" src="<?php echo site_url("resources/images/logo.png");?>
" style="margin-top: 30px;" />
    
    
<h1>Reset Password Anda</h1>
<?php if ($_smarty_tpl->tpl_vars['cek']->value=='kosong'){?>
<div class="message-login-box">
    Alamat Anda tidak terdaftar.<br>
    Klik disini untuk <a href="<?php echo site_url("welcome/register");?>
">Sign Up</a>
</div>
<?php }elseif($_smarty_tpl->tpl_vars['cek']->value=='start'){?>
<form method="post" action="<?php echo site_url("welcome/submitresetpassword");?>
/<?php echo $_smarty_tpl->tpl_vars['pincode']->value;?>
">
    <input class="email" type="password" name="password1" placeholder="password baru Anda"><br>
    <input class="email" type="password" name="password2" placeholder="ulangi password Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Reset Password"></p>
</form>
<?php }elseif($_smarty_tpl->tpl_vars['cek']->value=='tidakdiisi'){?>
<form method="post" action="<?php echo site_url("welcome/submitresetpassword");?>
/<?php echo $_smarty_tpl->tpl_vars['pincode']->value;?>
">
    <input class="email" type="password" name="password1" placeholder="password baru Anda"><br>
    <input class="email" type="password" name="password2" placeholder="ulangi password Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Reset Password"></p>
</form>  
<div class="message-login-box">
    Maaf, Anda belum memasukkan Password baru Anda!!!
</div>
<?php }elseif($_smarty_tpl->tpl_vars['cek']->value=='bedapass'){?>
<form method="post" action="<?php echo site_url("welcome/submitresetpassword");?>
/<?php echo $_smarty_tpl->tpl_vars['pincode']->value;?>
">
    <input class="email" type="password" name="password1" placeholder="password baru Anda"><br>
    <input class="email" type="password" name="password2" placeholder="ulangi password Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Reset Password"></p>
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