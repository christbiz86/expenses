{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
       <div class="span12">
            <h3 class="page-title">
               Data Permohonan Dana
               <small>data detail Permohonan Dana</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{site_url("request")}">Data Permohonan Dana</a>
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
                   <div class="portlet box blue">
                      <div class="portlet-title">
                         <h4><i class="icon-reorder"></i>Data Detail Permohonan Dana</h4>
                         {*<div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                         </div>*}
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         {foreach $list as $row}
                         <div class="form-horizontal form-view">
                            <h3>View Info Permohonan Dana</h3>
                            <h3 class="form-section">Data Pemohon</h3>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label" for="firstName">Nama :</label>
                                     <div class="controls">
                                        <span class="text">{$row->full_name}</span>
                                     </div>
                                  </div>
                               </div>
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label" for="lastName">Cabang:</label>
                                     <div class="controls">
                                        <span class="text">{$row->cabang_nama}</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Email:</label>
                                     <div class="controls">
                                        <span class="text">{$row->email}</span> 
                                     </div>
                                  </div>
                               </div>
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label" for="lastName">Level:</label>
                                     <div class="controls">
                                        <span class="text">{$row->level_desc}</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <h3 class="form-section">Data Permohonan Dana</h3>
                            <div class="row-fluid">
                               <div class="span12">
                                  <div class="control-group">
                                     <label class="control-label">Uraian:</label>
                                     <div class="controls">
                                        <span class="text">{$row->uraian}</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Tanggal:</label>
                                     <div class="controls">
                                        <span class="text">{showDate($row->postdate)}</span>
                                     </div>
                                  </div>
                               </div>
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Pengeluaran :</label>
                                     <div class="controls">
                                        <span class="text">
                                            <table>
                                                <tr>
                                                    <td>{getMultiItem($row->request_id,'item_desc')}</td>
                                                    <td>{getMultiItem($row->request_id,'jumlah')}</td>
                                                </tr>
                                            </table>
                                        </span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Status:</label>
                                     <div class="controls">
                                        <span class="text">{getStatus($row->request_id)}
                                        </span>
                                     </div>
                                  </div>
                               </div>
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Jumlah Total:</label>
                                     <div class="controls">
                                        <span class="text">{getTotalPd($row->request_id)}</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Dokumen:</label>
                                     <div class="controls">
                                        {if $row->dokumen}
                                        <span class="text">
                                            <a target="_blank" href="{site_url("resources/dokumen")}/{$row->dokumen}">Klik disini</a>
                                        </span>
                                        {/if}
                                     </div>
                                  </div>
                                </div>
                                <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Terbilang:</label>
                                     <div class="controls">
                                        <span class="text">{$row->terbilang|dec}</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="form-actions">
                                {if $row->approved_by == '0'}
                                <a href="{site_url("request/edit")}/{$row->request_id}">
                                <button type="submit" class="btn blue"><i class="icon-pencil"></i> Edit</button>
                                </a>
                                {/if}
                                <a href="{site_url("request/index")}"><button type="button" class="btn">Back</button></a>
                            </div>
                         </div>
                         {/foreach}
                         <!-- END FORM-->  
                      </div>
                   </div>
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