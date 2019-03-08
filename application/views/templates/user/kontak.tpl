{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
       <div class="span12">
          <h3 class="page-title">
             Hubungi Kami
             <small>form isian hubungi kami</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="{site_url("home")}">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="{site_url("welcome/kontak")}">Hubungi Kami</a></li>
          </ul>
       </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
       <div class="span12">
          <div class="tabbable tabbable-custom boxless">
             <div class="tab-content">
                <div class="tab-pane active">
                   <div class="portlet box green">
                      <div class="portlet-title">
                         <h4><i class="icon-reorder"></i>Form Hubungi Kami</h4>
                         {*<div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                         </div>*}
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <form action="{site_url("welcome/kontak")}" method="post" class="form-horizontal">
                            {if $cek=='sukses'}
                            <div style="color: #b94a48;padding: 5px;font-size: 20px">Terima kasih, kami akan segera menghubungi Anda.</div>
                            {/if}
                            <h3 class="form-section">Isi Pesan Anda</h3>
                            <div class="row-fluid">
                               <div class="span6 ">
                                  <div class="control-group">
                                     <label class="control-label">Judul</label>
                                     <div class="controls">
                                        <input type="text" name="judul" value="{ci_form_validation field='judul'}" class="m-wrap large" >
                                        <span class="help-block">{ci_form_validation field='judul' error='true'}</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6 ">
                                  <div class="control-group">
                                     <label class="control-label">Isi Pesan</label>
                                     <div class="controls">
                                         <textarea class="medium m-wrap" name="isi" rows="5"></textarea>
                                         <span class="help-block">{ci_form_validation field='isi' error='true'}</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" type="submit" class="btn blue"><i class="icon-ok"></i> Hubungi Kami</button>
                                <button type="button" class="btn" onclick="location.href='{site_url('welcome')}'">Cancel</button>
                            </div>
                         </form>
                         <!-- END FORM-->                
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>
{/block}

{block name=css_header}
<link href="{site_url("assets/fancybox/source/jquery.fancybox.css")}" rel="stylesheet" />
<link rel="stylesheet" href="{site_url("assets/data-tables/DT_bootstrap.css")}" />
<link rel="stylesheet" type="text/css" href="{site_url("assets/chosen-bootstrap/chosen/chosen.css")}" />
{/block}

{block name=javascript_footer}
<script type="text/javascript" src="{site_url("assets/data-tables/jquery.dataTables.js")}"></script>
<script type="text/javascript" src="{site_url("assets/data-tables/DT_bootstrap.js")}"></script>
<script>
    jQuery(document).ready(function() {			
        // initiate layout and plugins
        App.setPage("table_managed");
        App.init();
    });
</script>
{/block}