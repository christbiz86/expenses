{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12"> 
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Data Akunting
                <small>isi semua data jurnal</small>
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
            <div class="portlet box blue">
                <div class="portlet-title">
                    <h4><i class="icon-hdd"></i>Akunting - Lihat Jurnal</h4>
                    <div class="actions">
{*                        <a href="#" class="btn blue"><i class="icon-pencil"></i> Tambah</a>*}
                        <div class="btn-group">
                            <a class="btn green" href="#" data-toggle="dropdown">
                            <i class="icon-cogs"></i> Tools
                            <i class="icon-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:window.print()">Print</a></li>
{*                                <li><a href="{site_url("accounting/excel")}">Export to Excel</a></li>*}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <form action="{site_url("accounting/printbbk")}" method="post" target="_blank">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Jurnal</th>
                                <th class="hidden-480">Tgl. Buat</th>
                                <th class="hidden-480">Bank</th>
                                <th class="480">Pengeluaran</th>
                                <th class="480">Jumlah</th>
                                <th class="480">Status BBK</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$no = 1}
                            {foreach $list as $row}
                            <tr>
                                <td>{$no}</td>
                                <td>{$row->jurnal_no}</td>
                                <td class="hidden-480">{showDate($row->jurnal_createddate)}</td>
                                <td class="hidden-480">
                                    {if $row->bank_id == 0} YMHD {else}
                                    {getBankData($row->bank_id)}
                                    {/if}
                                </td>
                                <td>
                                    {getMultiItem($row->request_id,'item_desc')}
                                </td>
                                <td style="text-align: right">{getTotalPd($row->request_id)}</td>
                                <td>
                                    {$row->status_bbk} pada {showDate($row->postdate)}
                                </td>
                                <td>
                                    {if $submenu=='listjurnal'}
                                        <a target="_blank" href="{site_url("accounting/detailjurnal")}/{$row->jurnal_no}">
                                            <input type="button" value="Lihat Jurnal">
                                        </a>
                                        {if $row->status_bbk == 'Finish'}
                                            &nbsp;
                                            <a target="_blank" href="{site_url("accounting/detailjurnalbalik")}/{$row->jurnal_no}">
                                                <input type="button" value="Lihat Jurnal Balik">
                                            </a>
                                        {/if}<br>
                                    {else}
                                    <input type="checkbox" name="request_id[]" value="{$row->request_id}">
                                    {/if}
                                </td>
                            </tr>
                            {$no = $no + 1}
                            {/foreach}
                        </tbody>
                    </table>
                    {if $list && $submenu=='viewjurnal'}
                    <input class="span2 m-wrap" placeholder="nomor cheque" name="no_cheque" type="text">
                    <input class="span2 m-wrap" placeholder="tanggal jatuh tempo" name="jatuh_tempo" type="text" id="popupDatepicker">
                    <select class="span2 m-wrap medium" name="bank_id">
                        <option value="">-- Pilih rekening bank --</option>
                        {foreach $list_bank as $data}
                        <option value="{$data->bank_id}">{$data->bank_nama} - {$data->bank_norek}</option>
                        {/foreach}
                    </select><br>
                    <input type="submit" name="submit" value="Buat BBK">
                    {/if}
                </form>
                </div>
            </div>
        </div>
    </div>
<!-- END PAGE CONTENT-->
</div>
{/block}

{block name=css_header}
<link type="text/css" href="{base_url()}resources/calendar/jquery.datepick.css" rel="stylesheet">
<link href="{site_url("assets/fancybox/source/jquery.fancybox.css")}" rel="stylesheet" />
<link rel="stylesheet" href="{site_url("assets/data-tables/DT_bootstrap.css")}" />
<link rel="stylesheet" type="text/css" href="{site_url("assets/chosen-bootstrap/chosen/chosen.css")}" />
{/block}

{block name=javascript_footer}
<script type="text/javascript" src="{base_url()}resources/calendar/jquery.datepick.js"></script>
<script type="text/javascript" src="{site_url("assets/data-tables/jquery.dataTables.js")}"></script>
<script type="text/javascript" src="{site_url("assets/data-tables/DT_bootstrap.js")}"></script>
<script>
    jQuery(document).ready(function() {			
        // initiate layout and plugins
        App.setPage("table_managed");
        App.init();
        {literal}
        $('#popupDatepicker').datepick();
        $('#inlineDatepicker').datepick({onSelect: showDate});
        {/literal}
    });
</script>
{/block}