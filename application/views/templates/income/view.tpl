{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12"> 
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Data Pemasukan
                <small>isi semua data pemasukan</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{site_url("income")}">Data Pemasukan</a>
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
            <div class="portlet box red">
                <div class="portlet-title">
                    <h4><i class="icon-briefcase"></i>Data Pemasukan</h4>
                    <div class="actions">
                        <a href="{site_url("income/add")}" class="btn blue"><i class="icon-pencil"></i> Tambah</a>
                        <div class="btn-group">
                            <a class="btn grey" href="#" data-toggle="dropdown">
                            <i class="icon-user"></i> Tools
                            <i class="icon-angle-down "></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:window.print()">Print</a></li>
                                <li><a href="{site_url("income/excel")}">Export to Excel</a></li>
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
                                <th class="hidden-480">Jenis</th>
                                <th class="hidden-480">Cabang</th>
                                <th>Jumlah</th>
                                <th class="hidden-480">Uraian</th>
                                <th class="hidden-480">Tgl Pemasukan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$no = 1}
                            {$cekold = ''}
                            {foreach $list as $row}
                            {$cekbaru = $row->income_id}
                            {if $cekbaru != $cekold && $cabang|strstr:$row->cabang_id}
                            <tr class="odd gradeX">
                                <td>{$no}</td>
                                <td>{$row->full_name}</td>
                                <td class="hidden-480">{$row->item_desc}</td>
                                <td class="hidden-480">{$row->cabang_nama}</td>
                                <td style="text-align: right">
                                    {$jumlah = $row->jumlah|dec}
                                    Rp. {$jumlah|number_format:0:",":"."}</td>
                                <td class="hidden-480">{$row->uraian}</td>
                                <td class="hidden-480">{showDate($row->postdate)}</td>
                                <td>
                                    <a href="{site_url("income/detail")}/{$row->income_id}">
                                        <img src="{site_url("assets/img/document_detail.png")}" width="20">
                                    </a>&nbsp;&nbsp;&nbsp;
                                    <a href="{site_url("income/edit")}/{$row->income_id}" onclick="return confirm('Anda yakin mau edit Pemasukan ini?');">
                                        <img src="{site_url("assets/img/document_edit.png")}" width="20">
                                    </a>&nbsp;&nbsp;&nbsp;
                                    <a href="{site_url("income/delete")}/{$row->income_id}" onclick="return confirm('Anda yakin mau hapus Pemasukan ini?');">
                                        <img src="{site_url("assets/img/document_delete.png")}" width="20">
                                    </a>
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