{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12"> 
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Data Akunting
                <small>isi semua data permohonan dana</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{site_url("accounting")}">Akunting</a>
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
                    <h4><i class="icon-hdd"></i>Akunting</h4>
                    <div class="actions">
{*                        <a href="#" class="btn blue"><i class="icon-pencil"></i> Tambah</a>*}
                        <div class="btn-group">
                            <a class="btn green" href="#" data-toggle="dropdown">
                            <i class="icon-cogs"></i> Tools
                            <i class="icon-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:window.print()">Print</a></li>
                                <li><a href="{site_url("accounting/excel")}">Export to Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
{*                    <form action="{site_url("accounting/addjurnal")}" method="post" class="form-horizontal">*}
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th class="hidden-480">Cabang</th>
                                <th class="hidden-480">Pengeluaran</th>
                                <th class="hidden-480">Kode Account</th>
                                <th>Jumlah</th>
                                <th class="hidden-480">Tipe</th>
                                <th class="hidden-480">Tgl. Approve</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$no = 1}
                            {foreach $list as $row}
                            <tr>
                                <td>{$no}</td>
                                <td>{$row->full_name}</td>
                                <td class="hidden-480">{getCabang($row->cabang_id)}</td>
                                <td class="hidden-480">{$row->item_desc}</td>
                                <td class="hidden-480">{$row->item_kode}</td>
                                <td style="text-align: right">
                                    {$jumlah = $row->jumlah|dec}
                                    Rp. {$jumlah|number_format:0:",":"."}</td>
                                <td class="hidden-480">{$row->tipe}</td>
                                <td class="hidden-480">{showDate($row->date_approve)}</td>
                                <td class="hidden-480">
                                    <a href="{site_url("accounting/addjurnal")}/{$row->accounting_id}" onclick="return confirm('Anda yakin mau buat Jurnal dari PD ini?');">
                                        <input type="button" value="Buat Jurnal">
                                    </a>&nbsp;&nbsp;&nbsp;
                                </td>
{*                                <td><input type="checkbox" value="{$row->request_id}" name="request_id[]"></td>*}
                            </tr>
                            {$no = $no + 1}
                            {/foreach}
                        </tbody>
                    </table>
                    {*{if $jumlah != 0}
                    <input type="submit" value="Buat Jurnal" name="submit">
                    {/if}
                    </form>*}
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