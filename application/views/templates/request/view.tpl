{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12"> 
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Data Permintaan Dana
                <small>isi semua data permintaan dana</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{site_url("request")}">Data Permintaan Dana</a>
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
                    <h4><i class="icon-credit-card"></i>Data Permintaan Dana</h4>
                    <div class="actions">
                        <a href="{site_url("request/add")}" class="btn purple"><i class="icon-pencil"></i> Tambah</a>
                        <div class="btn-group">
                            <a class="btn green" href="#" data-toggle="dropdown">
                            <i class="icon-user"></i> Tools
                            <i class="icon-angle-down "></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:window.print()">Print</a></li>
                                <li><a href="{site_url("request/excel")}">Export to Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th class="hidden-480">Divisi</th>
                                <th class="hidden-480">Pengeluaran</th>
                                <th class="hidden-480">Jumlah</th>
                                <th class="hidden-480">Total</th>
                                <th class="hidden-480">Tipe</th>
                                <th class="hidden-480">Uraian</th>
                                <th class="hidden-480">Tgl Request</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$no = 1}
                            {$cekold = ''}
                            {foreach $list as $row}
                            {$cekbaru = $row->request_id}
                            {if $cekbaru != $cekold && $cabang|strstr:$row->cabang_id}
                            <tr class="odd gradeX">
                                <td>{$no}</td>
                                <td>{$row->full_name}</td>
                                <td class="hidden-480">{$row->cabang_nama}</td>
                                <td class="hidden-480">{getMultiItem($row->request_id,'item_desc')}</td>
                                <td class="hidden-480" style="text-align: right">
                                    {getMultiItem($row->request_id,'jumlah')}
                                </td>
                                <td class="hidden-480" style="text-align: right">
                                    {getTotalPd($row->request_id)}
                                </td>
                                <td class="hidden-480">{$row->tipe}</td>
                                <td class="hidden-480">{$row->uraian}</td>
                                <td class="hidden-480">{showDate($row->postdate)}</td>
                                <td {if $row->status=='Canceled'}style="color: red"{/if}>
                                    {getStatus($row->request_id)}
                                </td>
                                <td>
                                    <a href="{site_url("request/detail")}/{$row->request_id}">
                                        <img src="{site_url("assets/img/document_detail.png")}" width="20">
                                    </a>&nbsp;&nbsp;&nbsp;
                                    {if $row->approved_by == '0'}
                                    <a href="{site_url("request/edit")}/{$row->request_id}" onclick="return confirm('Anda yakin mau edit Request ini?');">
                                        <img src="{site_url("assets/img/document_edit.png")}" width="20">
                                    </a>&nbsp;&nbsp;&nbsp;
                                    <a href="{site_url("request/cancel")}/{$row->request_id}" onclick="return confirm('Anda yakin mau Cancel Request ini?');">
                                        <img src="{site_url("assets/img/document_cancel.gif")}" width="20">
                                    </a>
                                    {/if}
                                </td>
                            </tr>
                            {$cekold = $cekbaru}
                            {$no = $no+1}
                            {/if}
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
