{extends file="layout.tpl"}

{block name=content}    
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12">  
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Data Persetujuan Dana
                <small>isi semua data persetujuan dana</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{site_url("request")}">Data Persetujuan Dana</a>
                </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
        <div class="span12">
            
            <form method="post" action="">
            <span class="help-block">{ci_form_validation field='tgl_awal' error='true'}</span>
            <span class="help-block">{ci_form_validation field='tgl_akhir' error='true'}</span>
            Periode : 
            <input name="tgl_awal" value="{ci_form_validation field='tgl_awal'}" type="text" id="popupDatepicker2"> s/d 
            <input name="tgl_akhir" value="{ci_form_validation field='tgl_akhir'}" type="text" id="popupDatepicker"><br>
            <button name="submit" value="submit" type="submit" class="btn blue"><i class="icon-ok"></i> Submit</button>
            </form>
            
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box light-grey">
                <div class="portlet-title">
                    <h4><i class="icon-globe"></i>Data Persetujuan Dana</h4>
                    <div class="tools">
                        {*<a href="javascript:;" class="collapse"></a>
                        <a href="javascript:;" class="reload"></a>
                        <a href="javascript:;" class="remove"></a>*}
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                            <tr>
                                <th style="width:8px;">No</th>
                                <th>Nama</th>
                                <th class="hidden-480">Divisi</th>
                                <th class="hidden-480">Jumlah</th>
                                <th class="hidden-480">Tipe</th>
                                <th>Uraian</th>
                                <th>Tgl Request</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {$no = 1}
                            {$cekold = ''}
                            {$divisi = getField('divisi',$sesi_login,'login_id','login')}
                            {foreach $list as $row}
                            {$cekbaru = $row->request_id}
                            {if $cekbaru != $cekold && ($cabang|strstr:$row->cabang_id || $divisi!= 'USER')}
                            <tr class="odd gradeX">
                                <td>{$no}</td>
                                <td>{$row->full_name}</td>
                                <td>{$row->cabang_nama}</td>
                                <td style="text-align: right">{getTotalPd($row->request_id)}</td>
                                <td>{$row->tipe}</td>
                                <td>{$row->uraian}</td>
                                <td>{showDate($row->postdate)}</td>
                                <td {if $row->status=='Canceled'}style="color: red"{/if}>
                                    {$row->status}
                                    {if $row->status!='New'}
                                        by {getField('full_name',$row->approved_by,'gogo_login.login_id','login')} - {showDate($row->date_approve)}
                                    {/if}
                                </td>
                                <td>
                                    <a target="_blank" href="{site_url("request/detail")}/{$row->request_id}"><span style="cursor: pointer" class="label label-inverse">Detail</span></a>
                                    {if $divisi!='USER'}
                                        {$cek = cekLevelApprove($divisi,$row->request_id)}
                                        {if $cek}
                                        <a href="{site_url("request/accept")}/{$row->request_id}" onclick="return confirm('Anda yakin mau approve Permintaan Dana ini?');"><span style="cursor: pointer" class="label label-success">Approve</span></a>
                                        <a href="{site_url("request/reject")}/{$row->request_id}" onclick="return confirm('Anda yakin mau decline Permintaan Dana ini?');"><span style="cursor: pointer" class="label label-warning">Decline</span></a>    
                                        {/if}
                                    {else if (getField('divisi',$row->approved_by,'login_id','login')=='USER')}
                                        {if ($row->approved_by)}
                                            {if ((getLevelPosisi($row->approved_by) - getLevelPosisi($sesi_login) == 1) && $row->approved_by != $sesi_login && $row->status!='Decline')}
                                            <a href="{site_url("request/accept")}/{$row->request_id}" onclick="return confirm('Anda yakin mau approve Permintaan Dana ini?');"><span style="cursor: pointer" class="label label-success">Approve</span></a>
                                            <a href="{site_url("request/reject")}/{$row->request_id}" onclick="return confirm('Anda yakin mau decline Permintaan Dana ini?');"><span style="cursor: pointer" class="label label-warning">Decline</span></a>
                                            {/if}
                                        {else}
                                            <!-- belum di approve sama sekali -->
                                            <a href="{site_url("request/accept")}/{$row->request_id}" onclick="return confirm('Anda yakin mau approve Permintaan Dana ini?');"><span style="cursor: pointer" class="label label-success">Approve</span></a>
                                            <a href="{site_url("request/reject")}/{$row->request_id}" onclick="return confirm('Anda yakin mau decline Permintaan Dana ini?');"><span style="cursor: pointer" class="label label-warning">Decline</span></a>
                                        {/if}
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
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>
<!-- END PAGE CONTENT-->
</div>
{/block}

{block name=css_header}
<link href="{site_url("assets/fancybox/source/jquery.fancybox.css")}" rel="stylesheet" />
<link rel="stylesheet" href="{site_url("assets/data-tables/DT_bootstrap.css")}" />
<link rel="stylesheet" type="text/css" href="{site_url("assets/chosen-bootstrap/chosen/chosen.css")}" />
<link type="text/css" href="{base_url()}resources/calendar/jquery.datepick.css" rel="stylesheet">
{/block}

{block name=javascript_footer}
<script type="text/javascript" src="{site_url("assets/data-tables/jquery.dataTables.js")}"></script>
<script type="text/javascript" src="{site_url("assets/data-tables/DT_bootstrap.js")}"></script>
<script type="text/javascript" src="{base_url()}resources/calendar/jquery.datepick.js"></script>
<script>
    jQuery(document).ready(function() {			
        // initiate layout and plugins
        App.setPage("table_managed");
        App.init();
        {literal}
        $('#popupDatepicker').datepick();
        $('#popupDatepicker2').datepick();
        $('#inlineDatepicker').datepick({onSelect: showDate});
        {/literal} 
    });
</script>
{/block}
