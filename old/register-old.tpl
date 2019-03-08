{extends file="layout.tpl"}

{block name=content}
<div class="row-fluid">
    <div class="span12 center login-header">
        <h2>New Register - Expense GoGo</h2>
    </div><!--/span-->
</div><!--/row-->
<div class="row-fluid">
    <div class="well span5 center login-box">
        {if $cek=='sukses'}
        You have successfully register. Please check your email for verification.<br><br>
        Back to <a href="{site_url("welcome")}">Home</a>
        {else}
        <form class="form-horizontal" action="{site_url("welcome/register")}" method="post">
            <fieldset>
                <div class="input-prepend" title="Email" data-rel="tooltip">
                    <span class="add-on"><i class="icon-user"></i></span>
                    <input autofocus class="input-large span10" value="{ci_form_validation field='email'}" name="email" id="username" type="text" placeholder="your email" />
                    <span style="color: red">{ci_form_validation field='email' error='true'}</span>
                </div>
                <div class="clearfix"></div>
                <div class="input-prepend">
                <label class="remember" for="remember">
                    {if $cek=='gagal' or $cek==''}
                    Already have an account? <a href="{site_url("welcome")}">Sign In</a>
                    {else}
                    <span style="color: red">{$cek->email}</span> already registered.<br>
                    Click here to <a href="{site_url("welcome")}">Sign In</a> or <a href="{site_url("welcome/forgetpass")}">Forgotten your password?</a>
                    {/if}
                </label>
                </div>
                <div class="clearfix"></div>
                <p class="center span5">
                    <button type="submit" name="submit" value="submit" class="btn btn-primary">Free Register</button>
                </p>
            </fieldset>
        </form>
        {/if}
    </div><!--/span-->
</div><!--/row-->
{/block}