{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12"> 
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Data Laporan
                <small>isi semua data permintaan dana</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{site_url("report")}">Data Laporan</a>
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
                    <h4><i class="icon-globe"></i>Data Laporan</h4>
                </div>
                <div class="portlet-body">
                    <div class="clearfix">
                        <div class="btn-group pull-right">
                            <button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="icon-angle-down"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Print</a></li>
                                <li><a href="#">Save as PDF</a></li>
                                <li><a href="#">Export to Excel</a></li>
                            </ul>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th class="hidden-480">Cabang</th>
                                <th class="hidden-480">Level</th>
                                <th class="hidden-480">Tipe</th>
                                <th class="hidden-480">Uraian</th>
                                <th class="hidden-480">Jumlah</th>
                                <th class="hidden-480">Tgl. Request</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            {$no = 1}
                            {$cekold = ''}
                            {foreach $list as $row}
                            {$cekbaru = $row->request_id}
                            {if $cekbaru != $cekold}
                            <tr class="odd gradeX">
                                <td>{$no}</td>
                                <td>{$row->full_name}</td>
                                <td class="hidden-480">{$row->cabang_nama}</td>
                                <td class="center hidden-480">{$row->level_desc}</td>
                                <td class="hidden-480">{$row->tipe|dec}</td>
                                <td class="hidden-480">{$row->uraian}</td>
                                <td class="hidden-480" style="text-align: right">
                                    {$jumlah = $row->jumlah|dec}
                                    Rp. {$jumlah|number_format:0:",":"."}</td>
                                <td class="hidden-480">{showDate($row->postdate)}</td>
                                <td {if $row->status=='Canceled'}style="color: red"{/if}>
                                    {$row->status}
                                    {if $row->status!='New'}
                                        by {getField('full_name',$row->approved_by,'gogo_login.login_id','login')} - {showDate($row->date_approve)}
                                    {/if}
                                </td>
                                <td style="width: 20px;">
                                    <a href="{site_url("request/detail")}/{$row->request_id}">
                                        <img src="{site_url("assets/img/document_detail.png")}" width="20">
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