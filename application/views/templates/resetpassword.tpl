{extends file="layout-login.tpl"}

{block name=content}
<h1>Reset Password Anda</h1>
{if $cek=='kosong'}
<div class="message-login-box">
    Alamat Anda tidak terdaftar.<br>
    Klik disini untuk <a href="{site_url("welcome/register")}">Sign Up</a>
</div>
{else if $cek=='start'}
<form method="post" action="{site_url("welcome/submitresetpassword")}/{$pincode}">
    <input class="email" type="password" name="password1" placeholder="password baru Anda"><br>
    <input class="email" type="password" name="password2" placeholder="ulangi password Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Reset Password"></p>
</form>
{else if $cek=='tidakdiisi'}
<form method="post" action="{site_url("welcome/submitresetpassword")}/{$pincode}">
    <input class="email" type="password" name="password1" placeholder="password baru Anda"><br>
    <input class="email" type="password" name="password2" placeholder="ulangi password Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Reset Password"></p>
</form>  
<div class="message-login-box">
    Maaf, Anda belum memasukkan Password baru Anda!!!
</div>
{else if $cek=='bedapass'}
<form method="post" action="{site_url("welcome/submitresetpassword")}/{$pincode}">
    <input class="email" type="password" name="password1" placeholder="password baru Anda"><br>
    <input class="email" type="password" name="password2" placeholder="ulangi password Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Reset Password"></p>
</form>  
<div class="message-login-box">
    Maaf, Password yang Anda masukkan tidak sama!!! Silahkan diulangi kembali.
</div>
{else if $cek=='sukses'}
<div class="message-login-box">
    Anda telah berhasil mengganti password. Klik disini untuk <a href="{site_url("welcome")}">Sign In</a>
</div>
{/if}
{/block}