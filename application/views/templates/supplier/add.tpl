{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
       <div class="span12">
          <h3 class="page-title">
             Tambah Supplier
             <small>form isian tambah supplier</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="{site_url("home")}">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li>
                <a href="{site_url("supplier")}">Supplier</a>
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="{site_url("supplier/add")}">Tambah Supplier</a></li>
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
                         <h4><i class="icon-reorder"></i>Form Tambah Supplier</h4>
                         {*<div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                         </div>*}
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <form action="{site_url("supplier/add")}" method="post" class="form-horizontal">
                            <h3 class="form-section">Info Supplier</h3>
                            <div class="row-fluid">
                               <div class="span6 ">
                                  <div class="control-group">
                                     <label class="control-label">Perusahaan</label>
                                     <div class="controls">
                                        <input type="text" value="{ci_form_validation field='company'}" class="m-wrap span12" placeholder="Nama perusahaan Anda" name="company">
                                        <span class="help-block">{ci_form_validation field='company' error='true'}</span>
                                     </div>
                                  </div>
                               </div>
                               <div class="span6 ">
                                  <div class="control-group">
                                     <label class="control-label">Nama Lengkap</label>
                                     <div class="controls">
                                        <input type="text" value="{ci_form_validation field='name'}" class="m-wrap span12" placeholder="Nama lengkap Anda" name="name">
                                        <span class="help-block">{ci_form_validation field='name' error='true'}</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6 ">
                                  <div class="control-group">
                                     <label class="control-label">Email</label>
                                     <div class="controls">
                                        <input type="text" value="{ci_form_validation field='email'}" class="m-wrap span12" placeholder="Email Anda" name="email">
                                        <span class="help-block">{ci_form_validation field='email' error='true'}</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <h3 class="form-section">Data Alamat</h3>
                            <div class="row-fluid">
                               <div class="span12 ">
                                  <div class="control-group">
                                     <label class="control-label">Alamat</label>
                                     <div class="controls">
                                        <input type="text" name="alamat" value="{ci_form_validation field='alamat'}" class="m-wrap span12" >
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6 ">
                                  <div class="control-group">
                                     <label class="control-label">Telp</label>
                                     <div class="controls">
                                        <input type="text" name="telp" value="{ci_form_validation field='telp'}" class="m-wrap span12"> 
                                     </div>
                                  </div>
                               </div>
                               <div class="span6 ">
                                  <div class="control-group">
                                     <label class="control-label">Kota</label>
                                     <div class="controls">
                                        <input type="text" name="kota" value="{ci_form_validation field='kota'}" class="m-wrap span12"> 
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6 ">
                                  <div class="control-group">
                                     <label class="control-label">Fax</label>
                                     <div class="controls">
                                        <input type="text" name="fax" value="{ci_form_validation field='fax'}" class="m-wrap span12"> 
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" type="submit" class="btn blue"><i class="icon-ok"></i> Tambah</button>
                                <button type="button" class="btn" onclick="location.href='{site_url('supplier')}'">Cancel</button>
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