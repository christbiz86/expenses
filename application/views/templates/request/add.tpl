{extends file="layout.tpl"}

{block name=content}
<script type="text/javascript">
{literal}        
fields = 1;
function addInput() {
    if (fields != 10) {
        document.getElementById('text').innerHTML += "<div class=\"control-group\"><label class=\"control-label\">Pengeluaran</label><div class=\"controls\"><select class=\"span4 m-wrap\" name=\"item[]\" tabindex=\"1\"><option value=\"\"> --- </option>{/literal}{foreach $item as $data}{literal}<option value=\"{/literal}{$data->item_id}{literal}\">{/literal}{$data->item_desc}{literal}</option>{/literal}{/foreach}{literal}</select>&nbsp;&nbsp;&nbsp;Rp. <input type=\"text\" id=\"jumlah" + fields + "\" placeholder=\"jumlah permintaan\" class=\"m-wrap medium\" name=\"jumlah[]\" onkeyup=\"ubahharga()\" onkeypress=\"return isNumberKey(event)\" /></div></div>";
        fields += 1;
    } else {
        //document.getElementById('text').innerHTML += "<br />Only 10 upload fields allowed.";
        document.form.add.disabled=true;
    }
}

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
    for (i=1;i<10;i++){
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
             Tambah Permintaan Dana
             <small>form isian tambah permintaan dana</small>
          </h3>
          <ul class="breadcrumb">
             <li>
                <i class="icon-home"></i>
                <a href="{site_url("home")}">Home</a> 
                <span class="icon-angle-right"></span>
             </li>
             <li>
                <a href="{site_url("request")}">Permintaan Dana</a>
                <span class="icon-angle-right"></span>
             </li>
             <li><a href="{site_url("request/add")}">Tambah Permintaan Dana</a></li>
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
                         <h4><i class="icon-reorder"></i>Form Tambah Permintaan Dana</h4>
                         {*<div class="tools">
                            <a href="javascript:;" class="collapse"></a>
                            <a href="javascript:;" class="reload"></a>
                            <a href="javascript:;" class="remove"></a>
                         </div>*}
                      </div>
                      <div class="portlet-body form">
                         <!-- BEGIN FORM-->
                         <form action="{site_url("request/add")}" enctype="multipart/form-data" method="post" class="form-horizontal">
                            {if $budget=='over'}
                            <div style="color: #b94a48;padding: 15px;font-size: 20px;">Maaf, Anda belum memasukkan budget atau Anda sudah over-budget.</div>
                            {/if}
                             <div class="control-group">
                                <label class="control-label">Nama</label>
                                <div class="controls">
                                    <input name="nama" type="text" disabled="" value="{$nama}"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Pengeluaran</label>
                                <div class="controls">
                                    <select class="span4 m-wrap" name="item[]" tabindex="1">
                                        <option value=""> --- </option>
                                        {foreach $item as $data}
                                        <option value="{$data->item_id}">{$data->item_desc}</option>
                                        {/foreach}
                                    </select>
                                    &nbsp;&nbsp;&nbsp;Rp. <input type="text" id="jumlah" value="{ci_form_validation field='jumlah'}" placeholder="jumlah permintaan" class="m-wrap medium" name="jumlah[]" onkeyup="ubahharga()" onkeypress="return isNumberKey(event)" />
                                    <input type="button" onclick="addInput()" name="add" value="Tambah pengeluaran" />
                                </div>
                            </div>
                            
                            <div id="text"></div>
                                
                            <div class="control-group">
                                <label class="control-label">Uraian</label>
                                <div class="controls">
                                    <textarea class="span6 m-wrap" rows="3" name="uraian" value="{ci_form_validation field='uraian'}"></textarea>
                                    <span class="help-block">{ci_form_validation field='uraian' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Terbilang</label>
                                <div class="controls">
                                    <input name="terbilang" value="{ci_form_validation field='terbilang'}" type="text" placeholder="terbilang" class="m-wrap large" />
                                    <span class="help-block">{ci_form_validation field='terbilang' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Supplier</label>
                                <div class="controls">
                                    <select class="span4 m-wrap" name="supplier" tabindex="1">
                                        <option value="">---- Pilih Satu ----</option>
                                        <option value="Others">Others</option>
                                        {foreach $supplier as $list}
                                        <option value="{$list->supplier_id}">{$list->supplier_name}</option>
                                        {/foreach}
                                    </select>
                                    <input type="text" class="sup-other" value="{ci_form_validation field='supplier_other'}" class="input-short" name="supplier_other" style="display: none" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Tipe</label>
                                <div class="controls">
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="tipe" value="Reimbursable" style="opacity: 0;"></span>
                                    </div>
                                    <span class="tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here.">Reimbursable</span>
                                    </label>
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="tipe" value="Billable" style="opacity: 0;"></span>
                                    </div>
                                    <span class="tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here.">Billable</span>
                                    </label>
                                    <label class="radio">
                                    <div class="radio" id="uniform-undefined">
                                        <span><input type="radio" name="tipe" value="Urgent Request" style="opacity: 0;"></span>
                                    </div>
                                    <span class="tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here.">Urgent Request</span>
                                    </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Pembayaran</label>
                                <div class="controls">
                                    <select class="span2 m-wrap" data-placeholder="Pilih cara pembayaran" name="payment" tabindex="1">
                                        <option value="Tunai">Tunai</option>
                                        <option value="Transfer">Transfer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Nama Penerima</label>
                                <div class="controls">
                                    <input name="penerima" value="{ci_form_validation field='penerima'}" type="text" placeholder="nama penerima" class="m-wrap large" />
                                    <span class="help-block">{ci_form_validation field='penerima' error='true'}</span>
                                </div>
                            </div>
                            <div class="control-group transfer" style="display: none">
                                <label class="control-label">Bank & No Rekening</label>
                                <div class="controls">
                                    <input name="bank" value="{ci_form_validation field='bank'}" type="text" placeholder="nama bank" class="m-wrap small" />
                                    <input name="no_rek" value="{ci_form_validation field='no_rek'}" type="text" placeholder="no rekening" class="m-wrap large" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Dokumen lampiran</label>
                                <div class="controls">
                                    <input type="file" name="dokumen[]" class="multi"/>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Komentar</label>
                                <div class="controls">
                                    <textarea class="span6 m-wrap" rows="3" name="comment" value="{ci_form_validation field='comment'}"></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button name="submit" value="submit" onclick="return confirm('Anda yakin mau tambah Permintaan Dana?');" type="submit" class="btn blue"><i class="icon-ok"></i> Tambah</button>
                                <button type="button" class="btn" onclick="location.href='{site_url('request')}'">Cancel</button>
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
<script src="{site_url("resources/jquery.MultiFile.js")}" type="text/javascript" language="javascript"></script>
{*<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js" type="text/javascript"></script>*}
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
        
        $("select[name='supplier']").live("change", function(){
            var isisup = $(this).val();
            if(isisup=='Others'){
                $('.sup-other').show();
            } else {
                $('.sup-other').hide();
            }
        });
    });
</script>
{/block}