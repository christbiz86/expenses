{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12"> 
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Data Struktur
                <small>isi semua data divisi, staff level dan user</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{site_url("struktur/cabang")}">Struktur User</a>
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
                <div class="row-fluid">
                    <div class="span6 responsive" data-tablet="span12 fix-offset" data-desktop="span6">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet box grey">
                            <div class="portlet-title">
                                <h4><i class="icon-user"></i>Leveling</h4>
                                <div class="actions">
                                    <a href="{site_url("struktur/addlevel")}" class="btn blue"><i class="icon-plus"></i> Tambah</a>
<!--                                    <div class="btn-group">
                                        <a class="btn green" href="site_url("struktur/excellevel")}">
                                        <i class="icon-book"></i> Export to Excel
                                        </a>
                                    </div>-->
                                </div>
                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover" id="sample_2">
                                    <thead>
                                        <tr>
                                            <th style="width:8px;">No</th>
                                            <th>Deskripsi</th>
                                            <th class="hidden-480">Level</th>
                                            <th class="hidden-480">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {$no = 1}
                                        {foreach $list as $row}
                                        <tr class="odd gradeX">
                                            <td>{$no}</td>
                                            <td>{$row->level_desc}</td>
                                            <td class="hidden-480">{$row->level_position}</td>
                                            <td>
                                                <a href="{site_url("struktur/editlevel")}/{$row->level_id}" onclick="return confirm('Anda yakin mau edit Level ini?');">
                                                    <img src="{site_url("assets/img/document_edit.png")}" width="20">
                                                </a>&nbsp;&nbsp;&nbsp;
                                                <a href="{site_url("struktur/deletelevel")}/{$row->level_id}" onclick="return confirm('Anda yakin mau hapus Level ini?');">
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
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
                    <div class="span6 responsive" data-tablet="span12 fix-offset" data-desktop="span6">
                        <!-- BEGIN EXAMPLE TABLE PORTLET-->
                        <div class="portlet box purple">
                            <div class="portlet-title">
                                <h4><i class="icon-cogs"></i>Divisi</h4>
                                <div class="actions">
                                    <a href="{site_url("struktur/addcabang")}" class="btn yellow"><i class="icon-plus"></i> Tambah</a>
                                </div>
                            </div>
                            <div class="portlet-body">
                                <table class="table table-striped table-bordered table-hover" id="sample_3">
                                    <thead>
                                        <tr>
                                            <th style="width:8px;">No</th>
                                            <th>Divisi</th>
                                            <th class="hidden-480">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {$no = 1}
                                        {foreach $cabang as $row1}
                                        <tr class="odd gradeX">
                                            <td>{$no}</td>
                                            <td>{$row1->cabang_nama}</td>
                                            <td>
                                                <a href="{site_url("struktur/editcabang")}/{$row1->cabang_id}" onclick="return confirm('Anda yakin mau edit Cabang ini?');">
                                                    <img src="{site_url("assets/img/document_edit.png")}" width="20">
                                                </a>&nbsp;&nbsp;&nbsp;
                                                <a href="{site_url("struktur/deletecabang")}/{$row1->cabang_id}" onclick="return confirm('Anda yakin mau hapus Cabang ini?');">
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
                        <!-- END EXAMPLE TABLE PORTLET-->
                    </div>
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