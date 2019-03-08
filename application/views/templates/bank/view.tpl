{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12"> 
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Data Bank
                <small>isi semua data bank</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{site_url("bank")}">Daftar Bank</a>
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
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-hdd"></i>Daftar Bank</h4>
                    <div class="actions">
                        <a href="{site_url("bank/add")}" class="btn green"><i class="icon-pencil"></i> Tambah</a>
                        <div class="btn-group">
                            <a class="btn red" href="#" data-toggle="dropdown">
                            <i class="icon-cogs"></i> Tools
                            <i class="icon-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:window.print()">Print</a></li>
                                <li><a href="{site_url("bank/excel")}">Export to Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th class="hidden-480">No</th>
                                <th>Nama Bank</th>
                                <th>No Rekening</th>
                                <th class="hidden-480">Kode Transaksi</th>
                                <th class="hidden-480">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$no = 1}
                            {foreach $list as $row}
                            <tr class="odd gradeX">
                                <td class="hidden-480">{$no}</td>
                                <td>{$row->bank_nama}</td>
                                <td>{$row->bank_norek}</td>
                                <td class="hidden-480">{$row->item_kode}</td>
                                <td class="hidden-480">
                                    <a href="{site_url("bank/edit")}/{$row->bank_id}" onclick="return confirm('Anda yakin mau edit Bank ini?');">
                                        <img src="{site_url("assets/img/document_edit.png")}" width="20">
                                    </a>&nbsp;&nbsp;&nbsp;
                                    <a href="{site_url("bank/delete")}/{$row->bank_id}" onclick="return confirm('Anda yakin mau Delete Bank ini?');">
                                        <img src="{site_url("assets/img/document_cancel.gif")}" width="20">
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