{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
       <div class="span12">
          <h3 class="page-title">
             Tambah Jenis Transaksi
             <small>form isian tambah jenis transaksi</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="{site_url("home")}">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="{site_url("listing/add")}">Tambah Jenis Transaksi</a></li>
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
                         <h4><i class="icon-reorder"></i>Form Tambah Jenis Transaksi</h4>
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <form action="{site_url("listing/add")}" method="post" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Nama Transaksi</label>
                                <div class="controls">
                                    <input name="desc" type="text" placeholder="jenis transaksi" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='desc' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kode Transaksi</label>
                                <div class="controls">
                                    <input name="kode" type="text" placeholder="kode transaksi" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='kode' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tipe</label>
                                <div class="controls">
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="tipe" value="Income" checked="" style="opacity: 0;"></span>
                                    </div>
                                    Pemasukan
                                    </label>
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="tipe" value="Expense" style="opacity: 0;"></span>
                                    </div>
                                    Pengeluaran
                                    </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls">
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="status" value="Aktif" checked="" style="opacity: 0;"></span>
                                    </div>
                                    Aktif
                                    </label>
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="status" value="Non-aktif" style="opacity: 0;"></span>
                                    </div>
                                    Non-aktif
                                    </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Group</label>
                                <div class="controls">
                                    <select class="span4 m-wrap" name="group_id" tabindex="1">
                                        <option value=""> --- </option>
                                        {foreach $group as $data}
                                            <option value="{$data->group_id}">{$data->group_desc}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" type="submit" class="btn blue"><i class="icon-ok"></i> Tambah</button>
                                <button type="button" class="btn" onclick="location.href='{site_url('listing')}'">Cancel</button>
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