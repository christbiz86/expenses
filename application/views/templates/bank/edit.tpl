{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
       <div class="span12">
          <h3 class="page-title">
             Edit Data Bank
             <small>form isian edit data bank</small>
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
             <li><a href="{site_url("bank/add")}">Tambah Data Bank</a></li>
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
                         <h4><i class="icon-reorder"></i>Form Edit Data Bank</h4>
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         {foreach $list as $data}
                         <form action="{site_url("bank/edit")}/{$data->bank_id}" method="post" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Nama Bank</label>
                                <div class="controls">
                                    <input name="bank_nama" type="text" value="{$data->bank_nama}" placeholder="nama bank" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='bank_nama' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">No Rekening</label>
                                <div class="controls">
                                    <input name="bank_norek" type="text" value="{$data->bank_norek}" placeholder="nomor rekening bank" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='bank_norek' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kode Transaksi</label>
                                <div class="controls">
                                    <input name="item_kode" type="text" value="{$data->item_kode}" placeholder="kode transaksi" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='item_kode' error='true'}</span>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" type="submit" class="btn blue"><i class="icon-ok"></i> Edit</button>
                                <button type="button" class="btn" onclick="location.href='{site_url('bank')}'">Cancel</button>
                            </div>
                         </form>
                        {/foreach}
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