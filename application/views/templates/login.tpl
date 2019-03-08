{extends file="layout-login.tpl"}

{block name=content}
<h1>Simple Expense Reports</h1>
<form method="post" action="{site_url("welcome")}">
    <input class="email" type="text" name="email" placeholder="alamat email Anda"><br>
    <input class="email" type="password" name="password" placeholder="password Anda"><br>
    <p><input class="sign-up" type="submit" name="submit" value="Login"></p>
</form>
{if $status=='kosong'}
<div class="message-login-box">
    Maaf, Anda belum memasukkan Username atau Password!!!
</div>
{else if $status=='gagal'}
<div class="message-login-box">
    Maaf, Anda salah memasukkan Username atau Password!!!
</div>
{/if}
{/block}