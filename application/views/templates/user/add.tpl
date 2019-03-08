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
                         <h4><i class="icon-reorder"></i>Form Tambah User</h4>
                         {*<div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                         </div>*}
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <form action="{site_url("user/add")}" method="post" class="form-horizontal">
                            {if $tambah=='existing'}
                            <div style="color: #b94a48;padding: 5px">Maaf, email sudah terdaftar. Silahkan gunakan alamat email yang lain.</div>
                            {/if}
                            <div class="control-group">
                                <label class="control-label">Nama</label>
                                <div class="controls">
                                    <input name="nama" type="text" value="{ci_form_validation field='nama'}" placeholder="nama lengkap" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='nama' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Password</label>
                                <div class="controls">
                                    <input name="password" type="password" placeholder="kata sandi" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='password' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Konfirmasi Password</label>
                                <div class="controls">
                                    <input name="password1" type="password" placeholder="ulangi kata sandi" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='password1' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email</label>
                                <div class="controls">
                                    <input name="email" value="{ci_form_validation field='email'}" type="text" placeholder="alamat email" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='email' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Posisi</label>
                                <div class="controls">
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" value="USER" checked="" />User
                                    </label>
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" value="FIN" />Finance
                                    </label>  
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" value="ACCT" />Accounting
                                    </label>  
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" value="MGMT" />Management
                                    </label> 
                                    <label class="radio">
                                    <input type="radio" id="divisi" name="divisi" value="TRE" />Treasury
                                    </label> 
                                </div>
                            </div>
                            <div class="control-group divisi">
                                <label class="control-label">Divisi</label>
                                <div class="controls">
                                    {foreach $cabang as $row}
                                    <label class="radio">
                                    <input type="radio" name="cabang" value="{$row->cabang_id}">{$row->cabang_nama}
                                    </label>
                                    {/foreach}
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Level</label>
                                <div class="controls">
                                    <select name="level">
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
                                    <input type="radio" name="status" value="TRUE" checked="" />Aktif
                                    </label>
                                    <label class="radio">
                                    <input type="radio" name="status" value="FALSE" />Non-Aktif
                                    </label>  
                                </div>
                            </div>
                            <div class="control-group privileges">
                                <label class="control-label">Privileges</label>
                                <div class="controls">
                                    <div style="float: left;width: 150px"><input type="checkbox" name="supplier" value="TRUE">Supplier</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="struktur" value="TRUE">Struktur</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="budget" value="TRUE">Budget</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="list_coa" value="TRUE">List Pengeluaran</div>
                                    <div style="clear: both"></div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="reporting" value="TRUE">Reporting</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="libur" value="TRUE">Pengajuan Libur</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="request" value="TRUE">Permohonan Dana</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="income" value="TRUE">Pemasukan Dana</div>
                                    <div style="clear: both"></div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="scan" value="TRUE">Pindai Dokumen</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="stock" value="TRUE">Stok</div>
                                    <div style="float: left;width: 150px"><input type="checkbox" name="accounting" value="TRUE">Akunting</div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" type="submit" class="btn blue"><i class="icon-ok"></i> Tambah</button>
                                <button type="button" class="btn" onclick="location.href='{site_url('user')}'">Cancel</button>
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