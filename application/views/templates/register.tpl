{extends file="layout-login.tpl"}

{block name=content}

<h1>Register - Expense GoGo</h1>
{if $cek=='start'}
<form method="post" action="{site_url("welcome/register")}">
    <input class="email" type="text" value="{ci_form_validation field='email'}" name="email" placeholder="alamat email Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Free Register"></p>
</form>
<div class="message-login-box">
Sudah punya akun? <a href="{site_url("welcome")}">Sign In</a>
</div>
{else if $cek=='sukses'}
<div class="message-login-box">
Anda berhasil registrasi. Silahkan cek email Anda untuk verifikasi.<br><br>
Kembali ke <a href="{site_url("welcome")}">Home</a>
</div>
{else if $cek=='gagal'}
<form method="post" action="{site_url("welcome/register")}">
    <input class="email" type="text" value="{ci_form_validation field='email'}" name="email" placeholder="your email address"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Free Register"></p>
</form>
<div class="message-login-box">
Anda belum memasukkan alamat email.    
</div>
{else}
<div class="message-login-box">
<span style="color: red">Alamat {$cek->email}</span> sudah terdaftar.<br>
Klik disini untuk <a href="{site_url("welcome")}">Sign In</a> atau <a href="{site_url("welcome/forgetpass")}">Lupa Password Anda?</a>
</div>
{/if}  

{/block}