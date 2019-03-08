{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
       <div class="span12">
            <h3 class="page-title">
               Data Supplier
               <small>data detail Supplier</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{site_url("supplier")}">Data Supplier</a>
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
                         <h4><i class="icon-reorder"></i>Data Supplier</h4>
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
                            <h3>View Info Supplier</h3>
                            <h3 class="form-section">Data Pribadi</h3>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label" for="firstName">Perusahaan:</label>
                                     <div class="controls">
                                        <span class="text">{$row->supplier_company}</span>
                                     </div>
                                  </div>
                               </div>
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label" for="lastName">Nama Lengkap:</label>
                                     <div class="controls">
                                        <span class="text">{$row->supplier_name}</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Email:</label>
                                     <div class="controls">
                                        <span class="text">{$row->supplier_email}</span> 
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <h3 class="form-section">Data Alamat</h3>
                            <div class="row-fluid">
                               <div class="span12">
                                  <div class="control-group">
                                     <label class="control-label">Alamat:</label>
                                     <div class="controls">
                                        <span class="text">{$row->supplier_address}</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="row-fluid">
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Kota:</label>
                                     <div class="controls">
                                        <span class="text">{$row->supplier_city}</span>
                                     </div>
                                  </div>
                               </div>
                               <div class="span6">
                                  <div class="control-group">
                                     <label class="control-label">Telp:</label>
                                     <div class="controls">
                                        <span class="text">{$row->supplier_telp}</span>
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="form-actions">
                                <a href="{site_url("supplier/edit")}/{$row->supplier_id}">
                                <button type="submit" class="btn blue"><i class="icon-pencil"></i> Edit</button>
                                </a>
                                <a href="{site_url("supplier/index")}"><button type="button" class="btn">Back</button></a>
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