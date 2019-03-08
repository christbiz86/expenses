
{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
       <div class="span12">
          <h3 class="page-title">
             Tambah Bank
             <small>form isian tambah bank</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="{site_url("home")}">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li>
                <a href="{site_url("bank")}">Daftar Bank</a>
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="{site_url("bank/add")}">Tambah Bank</a></li>
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
                   <div class="portlet box blue">
                      <div class="portlet-title">
                         <h4><i class="icon-reorder"></i>Form Tambah Bank</h4>
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <form action="{site_url("bank/add")}" method="post" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Nama Bank</label>
                                <div class="controls">
                                    <input type="text" value="{ci_form_validation field='bank_nama'}" placeholder="nama bank" class="m-wrap medium" name="bank_nama" />
                                    <span class="help-block">{ci_form_validation field='bank_nama' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">No Rekening</label>
                                <div class="controls">
                                    <input type="text" value="{ci_form_validation field='bank_norek'}" placeholder="no rekening bank" class="m-wrap medium" name="bank_norek" />
                                    <span class="help-block">{ci_form_validation field='bank_norek' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kode Transaksi</label>
                                <div class="controls">
                                    <input type="text" value="{ci_form_validation field='item_kode'}" placeholder="kode transaksi" class="m-wrap medium" name="item_kode" />
                                    <span class="help-block">{ci_form_validation field='item_kode' error='true'}</span>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" onclick="return confirm('Anda yakin mau tambah Bank?');" type="submit" class="btn blue"><i class="icon-ok"></i> Tambah</button>
                                <button type="button" class="btn" onclick="location.href='{site_url('bank')}'">Cancel</button>
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