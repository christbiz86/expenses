{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
       <div class="span12">
          <h3 class="page-title">
             Pindai Dokumen
             <small>form isian untuk pindai dokumen</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="{site_url("home")}">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="{site_url("scan")}">Pindai Dokumen</a></li>
          </ul>
       </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
       <div class="span12">
          <div class="tabbable tabbable-custom boxless">
             <div class="tab-content">
                <div class="tab-pane active">
                   <div class="portlet box blue">
                      <div class="portlet-title">
                         <h4><i class="icon-reorder"></i>Form Pindai Dokumen</h4>
                         {*<div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                         </div>*}
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         {foreach $list as $row}
                         <form action="{site_url("scan/edit")}/{$row->scan_id}" method="post" class="form-horizontal" enctype="multipart/form-data">
                            <div class="control-group">
                                <label class="control-label">Nama Dokumen</label>
                                <div class="controls">
                                    <input name="nama" type="text" value="{$row->scan_nama}" placeholder="nama lengkap" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='nama' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Dokumen</label>
                                <div class="controls">
                                    {assign var="hasil" value=","|explode:$row->scan_dokumen} 
                                    {$no=1}
                                    {foreach $hasil as $data}
                                        <div class="dok{$no}">
                                        <button type="button" id="dokumen" class="dok{$no}" style="height: 22px;">Hapus</button> 
                                        <input type="file" name="dokumen[]" value="{$data}">
                                        <input type="text" style="display: none" name="dokumen[]" value="{$data}">
                                        {$data}
                                        </div>
                                    {$no = $no+1}
                                    {/foreach}
                                    <input type="file" name="dokumen[]" class="multi" accept="gif|jpg|pdf|doc|xls|xlsx|docx"/>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" type="submit" class="btn blue"><i class="icon-ok"></i> Edit</button>
                                <button type="button" class="btn" onclick="location.href='{site_url('scan')}'">Cancel</button>
                            </div>
                         </form>
                         {/foreach}
                         <!-- END FORM-->                
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
</div>
{/block}

{block name=css_header}
<link href="{site_url("assets/fancybox/source/jquery.fancybox.css")}" rel="stylesheet" />
<link rel="stylesheet" href="{site_url("assets/data-tables/DT_bootstrap.css")}" />
<link rel="stylesheet" type="text/css" href="{site_url("assets/chosen-bootstrap/chosen/chosen.css")}" />
{/block}

{block name=javascript_footer}
<script src="{site_url("resources/jquery.MultiFile.js")}" type="text/javascript" language="javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="{site_url("assets/data-tables/jquery.dataTables.js")}"></script>
<script type="text/javascript" src="{site_url("assets/data-tables/DT_bootstrap.js")}"></script>
<script>
    jQuery(document).ready(function() {			
        // initiate layout and plugins
        App.setPage("table_managed");
        App.init();
        
        $("#dokumen").live("click", function(){
            var isi = $(this).attr('class');
            $('.'+isi).remove();
        });
    });
</script>
{/block}