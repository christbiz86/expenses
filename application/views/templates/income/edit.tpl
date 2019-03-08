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
    var nStr = addtitik(stripNonNumeric($('#jumlah').val()));
    document.getElementById("jumlah").value = nStr;
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
             Edit Permintaan Dana
             <small>form isian edit permintaan dana</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="{site_url("home")}">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li>
                <a href="{site_url("request")}">Pemasukan Dana</a>
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="{site_url("request/edit")}/{$id}">Edit Pemasukan Dana</a></li>
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
                         <h4><i class="icon-reorder"></i>Form Edit Pemasukan Dana</h4>
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <form action="{site_url("income/edit")}/{$id}" method="post" class="form-horizontal">
                            {foreach $list as $data}
                            <div class="control-group">
                                <label class="control-label">Nama</label>
                                <div class="controls">
                                    <input name="nama" type="text" disabled="" value="{$nama}"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Pengeluaran</label>
                                <div class="controls">
                                    <select class="span4 m-wrap" name="item" tabindex="1">
                                        <option value="{$data->item_id}">{$data->item_desc}</option>
                                        {foreach $item as $hasil}
                                        <option value="{$hasil->item_id}">{$hasil->item_desc}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Uraian</label>
                                <div class="controls">
                                    <textarea class="span6 m-wrap" rows="3" name="uraian">{$data->uraian}</textarea>
                                    <span class="help-block">{ci_form_validation field='uraian' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Jumlah</label>
                                <div class="controls">
                                    <input type="text" id="jumlah" value="{$data->jumlah|dec}" placeholder="jumlah budget" class="m-wrap medium" onclick="ubahharga()" name="jumlah" onkeyup="ubahharga()" onkeypress="return isNumberKey(event)" />
                                    <span class="help-block">{ci_form_validation field='jumlah' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Terbilang</label>
                                <div class="controls">
                                    <input name="terbilang" value="{$data->terbilang|dec}" type="text" placeholder="terbilang" class="m-wrap large" />
                                    <span class="help-block">{ci_form_validation field='terbilang' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Customer</label>
                                <div class="controls">
                                    <select class="span4 m-wrap" name="supplier" tabindex="1">
                                        <option value="{$data->supplier_id}">{$data->supplier_name}</option>
                                        {foreach $supplier as $list}
                                        <option value="{$list->supplier_id}">{$list->supplier_name}</option>
                                        {/foreach}
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Pembayaran</label>
                                <div class="controls">
                                    <select class="span2 m-wrap" data-placeholder="Pilih cara pembayaran" name="payment" tabindex="1">
                                        <option value="Tunai" {if $data->payment=='Tunai'}selected=""{/if}>Tunai</option>
                                        <option value="Transfer" {if $data->payment=='Transfer'}selected=""{/if}>Transfer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nama Pembeli</label>
                                <div class="controls">
                                    <input name="pembeli" value="{$data->pembeli|dec}" type="text" placeholder="nama penerima" class="m-wrap large" />
                                    <span class="help-block">{ci_form_validation field='pembeli' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group transfer" {if $data->payment=='Tunai'}style="display: none"{/if}>
                                <label class="control-label">Bank & No Rekening</label>
                                <div class="controls">
                                    <input name="bank" value="{$data->bank}" type="text" placeholder="nama bank" class="m-wrap small" />
                                    <input name="no_rek" value="{$data->no_rek}" type="text" placeholder="no rekening" class="m-wrap large" />
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" onclick="return confirm('Anda yakin mau edit Permintaan Dana?');" type="submit" class="btn blue"><i class="icon-ok"></i> Edit</button>
                                <button type="button" class="btn" onclick="location.href='{site_url('user')}'">Cancel</button>
                            </div>
                            {/foreach}
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
        
        $("select[name='payment']").live("change", function(){
            var isi = $(this).val();
            if(isi=='Tunai'){
                $('.transfer').hide();
            } else {
                $('.transfer').show();
            }
        });
    });
</script>
{/block}