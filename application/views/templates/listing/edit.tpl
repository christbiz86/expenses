{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
       <div class="span12">
          <h3 class="page-title">
             Tambah Jenis Pengeluaran
             <small>form isian edit jenis pengeluaran</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="{site_url("home")}">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="{site_url("listing/add")}">Edit Jenis Pengeluaran</a></li>
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
                         <h4><i class="icon-reorder"></i>Form Edit Jenis Pengeluaran</h4>
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         {foreach $list as $row}
                         <form action="{site_url("listing/edit")}/{$row->item_id}" method="post" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Nama Pengeluaran</label>
                                <div class="controls">
                                    <input name="desc" value="{$row->item_desc}" type="text" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='desc' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Kode Transaksi</label>
                                <div class="controls">
                                    <input name="kode" type="text" value="{$row->item_kode}" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='kode' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tipe</label>
                                <div class="controls">
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="tipe" value="Income" {if $row->item_tipe=='Income'}checked=""{/if} style="opacity: 0;"></span>
                                    </div>
                                    Pemasukan
                                    </label>
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="tipe" value="Expense" {if $row->item_tipe=='Expense'}checked=""{/if} style="opacity: 0;"></span>
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
                                        <span><input type="radio" name="status" value="Aktif" {if $row->item_status=='Aktif'}checked=""{/if} style="opacity: 0;"></span>
                                    </div>
                                    Aktif
                                    </label>
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="status" value="Non-aktif" {if $row->item_status=='Non-aktif'}checked=""{/if} style="opacity: 0;"></span>
                                    </div>
                                    Non-aktif
                                    </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Group</label>
                                <div class="controls">
                                    <select class="span4 m-wrap" name="group_id" tabindex="1">
                                        <option value="{$row->group_id}">{$row->group_desc}</option>
                                        <option value=""> --- </option>
                                        {foreach $group as $data}
                                            <option value="{$data->group_id}">{$data->group_desc}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" onclick="return confirm('Anda yakin mau edit Pengeluaran ini?');" type="submit" class="btn blue"><i class="icon-ok"></i> Edit</button>
                                <button type="button" class="btn" onclick="location.href='{site_url('listing')}'">Cancel</button>
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