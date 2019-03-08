{extends file="layout.tpl"}

{block name=content}

<div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                     Profil Pengguna
                     <small>ganti kata sandi</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="{site_url("home")}">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="{site_url("home/changepassword")}">Change Password</a>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN SAMPLE FORM PORTLET-->   
                  <div class="portlet box yellow">
                     <div class="portlet-title">
                        <h4><i class="icon-reorder"></i>Ganti Password</h4>
                        {*<div class="tools">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>*}
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="{site_url("home/changepassword")}" class="form-horizontal" method="post">
                            {if $password=='lama'}
                            <div style="color: #b94a48;padding: 5px">Maaf, Anda salah memasukkan password lama. Silahkan ulangi kembali.</div>
                            {else if $password=='beda'}
                            <div style="color: #b94a48;padding: 5px">Maaf, password baru Anda tidak sama. Silahkan ulangi kembali.</div>
                            {/if}
                            <div class="control-group">
                              <label class="control-label">Current Password</label>
                              <div class="controls">
                                    <input type="password" name="old_password" value="{ci_form_validation field='old_password'}" class="span6 m-wrap" />
                                    <span class="help-block">{ci_form_validation field='old_password' error='true'}</span>
                              </div>
                           </div>
                           <div class="control-group">
                              <label class="control-label">Password Baru</label>
                              <div class="controls">
                                    <input type="password" name="new_password" value="{ci_form_validation field='new_password'}" class="span6 m-wrap" />
                                    <span class="help-block">{ci_form_validation field='new_password' error='true'}</span>
                              </div>
                           </div>
                              <div class="control-group">
                              <label class="control-label">Ulangi Password Baru</label>
                              <div class="controls">
                                    <input type="password" name="retype_password" value="{ci_form_validation field='retype_password'}" class="span6 m-wrap" />
                                    <span class="help-block">{ci_form_validation field='retype_password' error='true'}</span>
                              </div>
                           </div>
                           <div class="form-actions">
                              <button type="submit" name="submit" value="Submit" class="btn green" onclick="return confirm('Anda yakin mau ganti Password?');">Submit</button>
                              <button type="button" onclick="location.href='{site_url('home')}'" class="btn">Cancel</button>
                           </div>
                        </form>
                        <!-- END FORM-->           
                     </div>
                  </div>
                  <!-- END SAMPLE FORM PORTLET-->
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>


{/block}

{block name=css_header}
<link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
{/block}

{block name=javascript_footer}
<script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
<script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
<script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script>
    jQuery(document).ready(function() {       
       // initiate layout and plugins
       App.init();
    });
 </script>
{/block}