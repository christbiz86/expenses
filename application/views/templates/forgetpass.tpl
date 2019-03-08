{extends file="layout-login.tpl"}

{block name=content}
<h1>Lupa Kata Sandi - Expense GoGo</h1>
{if $cek==''}
<form method="post" action="{site_url("welcome/forgetpass")}">
    <input class="email" type="text" value="{ci_form_validation field='email'}" name="email" placeholder="alamat email Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Lupa Password"></p>
</form>
<div class="message-login-box">
Sudah punya akun? <a href="{site_url("welcome")}">Sign In</a>
</div>
{else if $cek=='gagal'}
<form method="post" action="{site_url("welcome/forgetpass")}">
    <input class="email" type="text" value="{ci_form_validation field='email'}" name="email" placeholder="alamat email Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Lupa Password"></p>
</form>
<div class="message-login-box">
Anda belum memasukkan alamat email.    
</div>
{else if $cek=='sukses'}
<div class="message-login-box">
Kami telah mengirimkan email untuk reset Password. Segera cek email Anda di Inbox atau Spam.<br><br>
Kembali ke <a href="{site_url("welcome")}">Home</a>
</div>
{else}
    <span style="color: red">Alamat {$cek->email}</span> tidak terdaftar.<br>
    Klik disini untuk <a href="{site_url("welcome/register")}">Sign Up</a>
{/if}
{/block}