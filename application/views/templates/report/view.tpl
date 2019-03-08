{extends file="layout.tpl"}

{block name=content}

<div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <h3 class="page-title">
                     Data Laporan
                     <small>isi laporan keseluruhan pengeluaran</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="{site_url("home")}">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="{site_url("report")}">Reporting</a>
                     </li>
                  </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN SAMPLE FORM PORTLET-->   
                  <div class="portlet box blue">
                     <div class="portlet-title">
                        <h4><i class="icon-bar-chart"></i>Laporan Pengeluaran Dana</h4>
                     </div>
                     <div class="portlet-body form">
                        <!-- BEGIN FORM-->
                        <form action="{site_url("report")}" class="form-horizontal" method="post">
                            <div class="control-group">
                              <label class="control-label">Periode</label>
                              <div class="controls">
                                    <input name="tgl_awal" value="{ci_form_validation field='tgl_awal'}" type="text" id="popupDatepicker2"> s/d 
                                    <input name="tgl_akhir" value="{ci_form_validation field='tgl_akhir'}" type="text" id="popupDatepicker"><br>
                                    <span class="help-block">{ci_form_validation field='tgl_awal' error='true'}</span>
                                    <span class="help-block">{ci_form_validation field='tgl_akhir' error='true'}</span>
                              </div>
                           </div>
                           <div class="form-actions">
                              <button type="submit" name="submit" value="submit" class="btn blue">Submit</button>
                              <button type="button" onclick="location.href='{site_url('home')}'" class="btn">Cancel</button>
                           </div>
                        </form>
                        <!-- END FORM-->           
                     </div>
                  </div>
                  <!-- END SAMPLE FORM PORTLET-->
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
{/block}

{block name=css_header}
<link type="text/css" href="{base_url()}resources/calendar/jquery.datepick.css" rel="stylesheet">
{/block}

{block name=javascript_footer}
<script type="text/javascript" src="{base_url()}resources/calendar/jquery.datepick.js"></script>
<script>
    jQuery(document).ready(function() {       
       // initiate layout and plugins
       App.init();
       {literal}
        $('#popupDatepicker').datepick();
        $('#popupDatepicker2').datepick();
        $('#inlineDatepicker').datepick({onSelect: showDate});
        {/literal}
    });
 </script>
{/block}