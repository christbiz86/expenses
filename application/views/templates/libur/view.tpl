{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12"> 
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Data Permintaan Libur
                <small>isi semua data permintaan libur</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{site_url("libur")}">Data Cuti</a>
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
            <div class="portlet box green">
                <div class="portlet-title">
                    <h4><i class="icon-time"></i>Data Permintaan Libur</h4>
                    <div class="actions">
                        <a href="{site_url("libur/request")}" class="btn red"><i class="icon-pencil"></i> Tambah</a>
                        <div class="btn-group">
                            <a class="btn yellow" href="#" data-toggle="dropdown">
                            <i class="icon-user"></i> Tools
                            <i class="icon-angle-down "></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:window.print()">Print</a></li>
                                <li><a href="{site_url("libur/excel")}">Export to Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Periode</th>
                                <th class="hidden-480">Keterangan Cuti</th>
                                <th class="hidden-480">Pengganti</th>
                                <th>Status</th>
                                <th class="hidden-480">Tgl. Buat</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$no = 1}
                            {foreach $list as $row}
                            <tr>
                                <td>{$no}</td>
                                <td>{showDate($row->libur_start)} - {showDate($row->libur_end)}</td>
                                <td class="hidden-480">{$row->uraian}</td>
                                <td class="hidden-480">{$row->full_name}</td>
                                <td>
                                    {if $row->user_ganti != $id}
                                        {$row->status}
                                        {if $row->status != 'New'}
                                            - {showDate($row->approved_date)}
                                        {else}
                                            &nbsp;&nbsp;&nbsp;<a href="{site_url("libur/cancel")}/{$row->libur_id}" onclick="return confirm('Anda yakin mau cancel Permintaan Cuti ini?');">
                                                <span style="cursor: pointer" class="label label-warning">Cancel</span>
                                            </a>
                                        {/if}
                                    {else}
                                        {if $row->status == 'New'}
                                        &nbsp;&nbsp;&nbsp;<a href="{site_url("libur/accept")}/{$row->libur_id}" onclick="return confirm('Anda yakin mau approve Permintaan Cuti ini?');">
                                            <span style="cursor: pointer" class="label label-success">Approve</span>
                                        </a>
                                        {else}
                                        Approved - {showDate($row->approved_date)}
                                        {/if}
                                    {/if}
                                </td>
                                <td class="hidden-480">{showDate($row->postdate)}</td>
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
