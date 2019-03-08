{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12"> 
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Data Budget
                <small>isi semua data budget</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{site_url("budget")}">Data Budget</a>
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
                    <h4><i class="icon-book"></i>Data Budget</h4>
                    <div class="actions">
                        <a href="{site_url("budget/add")}" class="btn blue"><i class="icon-pencil"></i> Tambah</a>
                        <div class="btn-group">
                            <a class="btn red" href="#" data-toggle="dropdown">
                            <i class="icon-user"></i> Tools
                            <i class="icon-angle-down "></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:window.print()">Print</a></li>
{*                                <li><a href="#">Save as PDF</a></li>*}
                                <li><a href="{site_url("budget/excel")}">Export to Excel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th class="hidden-480">No</th>
                                <th>Divisi</th>
                                <th class="hidden-480">Periode</th>
                                <th class="hidden-480">Pengeluaran</th>
                                <th class="hidden-480">Jumlah</th>
                                <th>Sisa Budget</th>
                                <th class="hidden-480">Postdate</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$no = 1}
                            {foreach $list as $row}
                            <tr class="odd gradeX">
                                <td class="hidden-480">{$no}</td>
                                <td>{getCabang($row->cabang_id)}</td>
                                <td class="hidden-480">{$row->budget_period|ucfirst}</td>
                                <td class="hidden-480">{$row->item_desc}</td>
                                <td class="hidden-480" style="text-align: right">Rp. {$row->jumlah|number_format:0:",":"."}</td>
                                <td style="text-align: right">{hitungSisaBudget($row->jumlah, $row->item_id, $row->budget_period, $row->cabang_id)}</td>
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
