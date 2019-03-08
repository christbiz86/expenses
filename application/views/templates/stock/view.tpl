{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12"> 
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Data Stock
                <small>isi semua data stock</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{site_url("stock")}">Data Stock</a>
                </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box light-grey">
                <div class="portlet-title">
                    <h4><i class="icon-globe"></i>Data Stock</h4>
                    <div class="actions">
                        <a href="{site_url("stock/add")}" class="btn yellow"><i class="icon-pencil"></i> Tambah</a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>No</th>
                                {$noid = 1}
                                {foreach $column as $row}
                                <th {if $noid!=1}class="hidden-480"{/if}>{$row->spek_desc_name}</th>
                                {$noid = $noid + 1}
                                {/foreach}
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$no = 1}
                            {foreach $list as $data}
                            <tr>
                                <td>{$no}</td>
                                {$noid2 = 1}
                                {foreach $column as $row}
                                    {$field = $row->spek_desc_name}
                                <td {if $noid2!=1}class="hidden-480"{/if}>{$data->$field}</td>
                                {$noid2 = $noid2 + 1}
                                {/foreach}
                                <td>
                                    <a href="{site_url("stock/edit")}/{$data->stock_id}" onclick="return confirm('Anda yakin mau edit Stock ini?');">
                                        <img src="{site_url("assets/img/document_edit.png")}" width="20">
                                    </a>&nbsp;&nbsp;&nbsp;
                                    <a href="{site_url("stock/delete")}/{$data->stock_id}" onclick="return confirm('Anda yakin mau hapus Stock ini?');">
                                        <img src="{site_url("assets/img/document_delete.png")}" width="20">
                                    </a>
                                </td>
                            </tr>
                            {$no = $no + 1}
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- END PAGE CONTENT-->
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