{extends file="layout.tpl"}

{block name=content}
<script type="text/javascript">
{literal}    
function isNumberKey(evt)
{
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)){
        alert('Hanya boleh diisi dengan angka saja');
        return false;
    } else {
        return true;
    }
}
{/literal}
</script>
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
       <div class="span12">
          <h3 class="page-title">
             Tambah Leveling
             <small>form isian tambah leveling</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="{site_url("home")}">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li>
                <a href="{site_url("struktur/cabang")}">Cabang & Level</a>
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="{site_url("struktur/addlevel")}">Tambah Leveling</a></li>
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
                         <h4><i class="icon-reorder"></i>Form Tambah Leveling</h4>
                         {*<div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                         </div>*}
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <form action="{site_url("struktur/addlevel")}" method="post" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Deskripsi</label>
                                <div class="controls">
                                    <input name="desc" type="text" value="{ci_form_validation field='desc'}" placeholder="deskripsi level" class="m-wrap medium" />
                                    <span class="help-inline">Contoh : Manager, Supervisor, Staff</span>
                                    <span class="help-block">{ci_form_validation field='desc' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Level</label>
                                <div class="controls">
                                    <input style="width: 50px" type="text" name="level" onkeypress="return isNumberKey(event)" class="m-wrap span12"> 
                                    <span class="help-block">{ci_form_validation field='level' error='true'}</span>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" type="submit" class="btn blue"><i class="icon-ok"></i> Tambah</button>
                                <button type="button" class="btn" onclick="location.href='{site_url('struktur/cabang')}'">Cancel</button>
                            </div>
                         </form>
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