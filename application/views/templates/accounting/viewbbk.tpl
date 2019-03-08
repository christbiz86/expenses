{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12"> 
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Data Bukti Bank Keluar
                <small>isi semua data BBK - bukti bank keluar</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{site_url("accounting/viewbbk")}">Data BBK</a>
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
            <div class="portlet box yellow">
                <div class="portlet-title">
                    <h4><i class="icon-hdd"></i>Bukti Bank Keluar</h4>
                    <div class="actions">
{*                        <a href="#" class="btn blue"><i class="icon-pencil"></i> Tambah</a>*}
                        <div class="btn-group">
                            <a class="btn green" href="#" data-toggle="dropdown">
                            <i class="icon-cogs"></i> Tools
                            <i class="icon-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:window.print()">Print</a></li>
{*                                <li><a href="{site_url("accounting/bbkexcel")}">Export to Excel</a></li>*}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
{*                    <form action="{site_url("accounting/addjurnal")}" method="post" class="form-horizontal">*}
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>No Jurnal</th>
                                <th>Nama</th>
                                <th class="hidden-480">Cabang</th>
                                <th class="hidden-480">Pengeluaran</th>
                                <th>Jumlah</th>
                                <th class="hidden-480">Tgl. BBK</th>
                                <th class="hidden-480">Status BBK</th>
                                <th class="hidden-480">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$no = 1}
                            {foreach $list as $row}
                            <tr>
                                <td>{$row->jurnal_no}</td>
                                <td>{$row->full_name}</td>
                                <td class="hidden-480">{getCabang($row->cabang_id)}</td>
                                <td class="hidden-480">{$row->item_desc}</td>
                                <td style="text-align: right">
                                    {$jumlah = $row->jumlah|dec}
                                    Rp. {$jumlah|number_format:0:",":"."}</td>
                                <td class="hidden-480">{showDate($row->bbk_createddate)}</td>
                                <td class="hidden-480">{$row->status_bbk}</td>
                                <td class="hidden-480">
                                    <a href="{site_url("accounting/bbkaccept")}/{$row->jurnal_no}" onclick="return confirm('Anda yakin mau approve BBK ini?');"><span style="cursor: pointer" class="label label-success">Approve</span></a>
                                    <a href="{site_url("accounting/bbkreject")}/{$row->jurnal_no}" onclick="return confirm('Anda yakin mau decline BBK ini?');"><span style="cursor: pointer" class="label label-warning">Decline</span></a>
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