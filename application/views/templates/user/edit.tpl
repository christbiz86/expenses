{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
       <div class="span12">
          <h3 class="page-title">
             Tambah User
             <small>form isian tambah user</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="{site_url("home")}">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li>
                <a href="{site_url("user")}">User</a>
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="{site_url("user/add")}">Tambah User</a></li>
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
                         <h4><i class="icon-reorder"></i>Form Edit User</h4>
                         {*<div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                         </div>*}
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         {foreach $list as $data}
                         <form action="{site_url("user/edit")}/{$data->login_id}" method="post" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Nama</label>
                                <div class="controls">
                                    <input name="nama" type="text" value="{$data->full_name}" placeholder="nama lengkap" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='nama' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Password</label>
                                <div class="controls">
                                    <input name="password" value="{$data->password}" type="password" placeholder="kata sandi" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='password' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Konfirmasi Password</label>
                                <div class="controls">
                                    <input name="password1" value="{$data->password}" type="password" placeholder="ulangi kata sandi" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='password1' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input name="email" value="{$data->email}" type="text" placeholder="alamat email" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='email' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Posisi</label>
                                <div class="controls">
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" {if $data->divisi=="USER"}checked=""{/if} value="USER" checked="" />User
                                    </label>
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" {if $data->divisi=="FIN"}checked=""{/if} value="FIN" />Finance
                                    </label>  
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" {if $data->divisi=="ACCT"}checked=""{/if} value="ACCT" />Accounting
                                    </label>  
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" {if $data->divisi=="MGMT"}checked=""{/if} value="MGMT" />Management
                                    </label> 
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" {if $data->divisi=="TRE"}checked=""{/if} value="TRE" />Treasury
                                    </label> 
                                </div>
                            </div>
                            <div class="control-group" style="{if $data->divisi!="USER"}display: none{/if}">
                                <label class="control-label">Divisi</label>
                                <div class="controls">
                                    {foreach $cabang as $row}
                                        <label class="radio">
                                        <input type="radio" name="cabang" {if $data->cabang_id|strstr:$row->cabang_id}checked=""{/if} value="{$row->cabang_id}">{$row->cabang_nama}
                                        </label>
                                    {/foreach}
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Level</label>
                                <div class="controls">
                                    <select name="level">
                                        <option value="{$data->level_id}">{$data->level_desc}</option>
                                        {foreach $level as $row1}
                                            {if $row1->level_desc != 'Administrator'}
                                            <option value="{$row1->level_id}">{$row1->level_desc}</option>
                                            {/if}
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Status</label>
                                <div class="controls">
                                    <label class="radio">
                                    <input type="radio" name="status" value="TRUE" {if $data->status=="TRUE"}checked=""{/if}/>Aktif
                                    </label>
                                    <label class="radio">
                                    <input type="radio" name="status" value="FALSE" {if $data->status=="FALSE"}checked=""{/if}/>Non-Aktif
                                    </label>  
                                </div>
                            </div>
                                <div class="control-group privileges" style="{if $data->divisi!="USER"}display: none{/if}">
                                <label class="control-label">Privileges</label>
                                <div class="controls">
                                    <div style="float: left;width: 150px"><input type="checkbox" {if $data->supplier=='TRUE'}checked=""{/if} name="supplier" value="TRUE">Supplier</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" {if $data->struktur=='TRUE'}checked=""{/if} name="struktur" value="TRUE">Struktur</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" {if $data->budget=='TRUE'}checked=""{/if} name="budget" value="TRUE">Budget</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" {if $data->list_coa=='TRUE'}checked=""{/if} name="list_coa" value="TRUE">List Pengeluaran</div>
                                    <div style="clear: both"></div>
                                    <div style="float: left;width: 150px"><input type="checkbox" {if $data->reporting=='TRUE'}checked=""{/if} name="reporting" value="TRUE">Reporting</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" {if $data->libur=='TRUE'}checked=""{/if} name="libur" value="TRUE">Pengajuan Libur</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" {if $data->request=='TRUE'}checked=""{/if} name="request" value="TRUE">Permohonan Dana</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" {if $data->income=='TRUE'}checked=""{/if} name="income" value="TRUE">Pemasukan Dana</div>
                                    <div style="clear: both"></div>
                                    <div style="float: left;width: 150px"><input type="checkbox" {if $data->scan=='TRUE'}checked=""{/if} name="scan" value="TRUE">Pindai Dokumen</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" {if $data->stock=='TRUE'}checked=""{/if} name="stock" value="TRUE">Stok</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" {if $data->accounting=='TRUE'}checked=""{/if} name="accounting" value="TRUE">Akunting</div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" type="submit" class="btn blue"><i class="icon-ok"></i> Edit</button>
                                <button type="button" class="btn" onclick="location.href='{site_url('user')}'">Cancel</button>
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
        
        $("#divisi").live("click", function(){
            var isi = $(this).val();
            if(isi != 'USER'){
                $('.privileges').hide();
                $('.divisi').hide();
            } else {
                $('.privileges').show();
                $('.divisi').show();
            }
        });
    });
</script>
{/block}