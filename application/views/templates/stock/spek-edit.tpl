{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
       <div class="span12">
          <h3 class="page-title">
             Edit Spesifikasi
             <small>form isian edit spesifikasi</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="{site_url("home")}">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li>
                <a href="{site_url("stock/spek")}">Data Spesifikasi</a>
             </li>
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
                   <div class="portlet box green">
                      <div class="portlet-title">
                         <h4><i class="icon-reorder"></i>Form Edit Spesifikasi</h4>
                         {*<div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                         </div>*}
                      </div>
                      <div class="portlet-body form">
                         {foreach $list as $row}
                         <!-- BEGIN FORM-->
                         <form action="{site_url("stock/spekedit")}/{$row->spek_desc_id}" method="post" class="form-horizontal">
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Spesifikasi</label>
                                     <div class="controls">
                                        <input type="text" value="{$row->spek_desc_name}" class="m-wrap span12" placeholder="Spesifikasi" name="desc">
                                        <span class="help-block">{ci_form_validation field='desc' error='true'}</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" type="submit" class="btn blue" onclick="return confirm('Anda yakin mau edit Spesifikasi ini?');"><i class="icon-ok"></i> Edit</button>
                                <button type="button" class="btn" onclick="location.href='{site_url('stock/spek')}'">Cancel</button>
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