<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Simple and Easy Expense Reports System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="simple and easy expense reports system">
    <meta name="author" content="Celebes Mineral">
    <meta HTTP-EQUIV="Cache-control" content="public, max-age=28800" />
    <link href="{base_url("resources/css/style.css")}" rel="stylesheet">
</head>
<body class="body-login">
    <div style="color: white;float: left;padding: 15px;">
        <a class="link-help" href="">Bantuan</a><span class="link-batas"> | </span>
        <a class="link-help" href="{site_url("info/about_us")}">Tentang Kami</a><span class="link-batas"> | </span>
        <a class="link-help" href="">Syarat</a><span class="link-batas"> | </span>
        <a class="link-help" href="">Privasi</a><span class="link-batas"> | </span>
        <a class="link-help" href="">Feedback</a><span class="link-batas"> | </span>
        <span class="copyright">&COPY; 123GoGo</span>
    </div>
    <div class="sign-in"><a href="{site_url("welcome/register")}">Registrasi</a></div>
    <div class="clear"></div>
    <img alt="simple" src="{site_url("resources/images/logo.png")}" style="margin-top: 30px;" />
    
    {block name=content}{/block}
    
</body>
</html>