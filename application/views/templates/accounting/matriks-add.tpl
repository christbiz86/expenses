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

function ubahharga(){
    for (i=1;i<3;i++){
        var isi = addtitik(stripNonNumeric($('#jumlah' + i).val()));
        document.getElementById("jumlah" + i).value = isi;
    }
}

function stripNonNumeric(str)
{
  str += '';
  var rgx = /^\d|\,|-$/;
  var out = '';
  for( var i = 0; i < str.length; i++ )
  {
    if( rgx.test( str.charAt(i) ) ){
      if( !( ( str.charAt(i) == '.' && out.indexOf( '.' ) != -1 ) ||
             ( str.charAt(i) == '-' && out.length != 0 ) ) ){
        out += str.charAt(i);
      }
    }
  }
  return out;
}

function addtitik(nStr){
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
      x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1 + x2;
}
{/literal}
</script>
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->   
    <div class="row-fluid">
       <div class="span12">
          <h3 class="page-title">
             Tambah Matriks Wewenang
             <small>form isian tambah matriks wewenang</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="{site_url("home")}">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li>
                <a href="{site_url("accounting")}">Accounting</a>
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="{site_url("accounting/matriksadd")}">Tambah Matriks</a></li>
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
                         <h4><i class="icon-reorder"></i>Form Tambah Matriks Wewenang</h4>
                         {*<div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                         </div>*}
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <form action="{site_url("accounting/matriksadd")}" method="post" class="form-horizontal">
                            {if $status=='error'}
                            <div style="color: #b94a48;padding: 5px">Maaf, jumlah limit bawah lebih besar daripada jumlah limit atas.</div>
                            {/if}
                            <div class="control-group">
                                <label class="control-label">Pengeluaran</label>
                                <div class="controls">
                                    <input name="group_desc" type="text" value="{ci_form_validation field='group_desc'}" placeholder="pengeluaran" class="m-wrap large" />
                                    <span class="help-block">{ci_form_validation field='group_desc' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Limit Bawah</label>
                                <div class="controls">
                                    <input id="jumlah1" name="limit_bawah" type="text" value="{ci_form_validation field='limit_bawah'}" placeholder="jumlah limit bawah pengeluaran" onkeyup="ubahharga()" onkeypress="return isNumberKey(event)" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='limit_bawah' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Limit Atas</label>
                                <div class="controls">
                                    <input id="jumlah2" name="limit_atas" type="text" value="{ci_form_validation field='limit_atas'}" placeholder="jumlah limit atas pengeluaran" onkeyup="ubahharga()" onkeypress="return isNumberKey(event)" class="m-wrap medium" />
                                    <span class="help-block">{ci_form_validation field='limit_atas' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Approval</label>
                                <div class="controls">
                                    <select name="approval_id">
                                        {foreach $approval as $row1}
                                            {if $row1->full_name != 'Administrator'}
                                            <option value="{$row1->login_id}">{$row1->full_name}</option>
                                            {/if}
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" type="submit" class="btn blue"><i class="icon-ok"></i> Tambah</button>
                                <button type="button" class="btn" onclick="location.href='{site_url('accounting')}'">Cancel</button>
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