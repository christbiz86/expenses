{extends file="layout.tpl"}

{block name=content}
<div class="container-fluid">
    <!-- BEGIN PAGE HEADER-->
    <div class="row-fluid">
        <div class="span12"> 
            <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
            <h3 class="page-title">
                Daftar Harga
                <small>isi semua paket dan harga dari 123GoGo</small>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{site_url("home")}">Home</a> 
                    <i class="icon-angle-right"></i>
                </li>
                <li>
                    <a href="{site_url("harga")}">Harga</a>
                </li>
            </ul>
            <!-- END PAGE TITLE & BREADCRUMB-->
        </div>
    </div>
    <!-- END PAGE HEADER-->
    <!-- BEGIN PAGE CONTENT-->
    <div class="row-fluid">
        <div class="span12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box yellow">
                <div class="portlet-title">
                    <h4><i class="icon-money"></i>Tabel Harga</h4>
                </div>
                <div class="portlet-body">
                    <div class="row-fluid">
                        <div class="span3-tabel">
                            <div class="pricing-table">
                                <h3>Basic</h3>
                                <div class="desc">
                                    Paket basic 123GoGo
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> 5 user akun</li>
                                    <li><i class="icon-angle-right"></i> 50 jumlah SmartScan</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                </ul>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Bulanan
                                        </div>
                                        <div class="amount ">
                                            7.99		
                                        </div>
                                    </div>
                                    <br><br>
                                    <form style="text-align: center;" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="PQRP2TJVGC95L">
                                    <input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="spance10 visible-phone"></div>
                        <div class="span3-tabel">
                            <div class="pricing-table">
                                <h3>Standard</h3>
                                <div class="desc">
                                    Paket standar 123GoGo
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> 10 user akun</li>
                                    <li><i class="icon-angle-right"></i> 100 jumlah SmartScan</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                </ul>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Bulanan
                                        </div>
                                        <div class="amount ">
                                            14.99		
                                        </div>
                                    </div>
                                    <br><br>
                                    <form style="text-align: center" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="728CESXRGMTRU">
                                    <input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="spance10 visible-phone"></div>
                        <div class="span3-tabel">
                            <div class="pricing-table">
                                <h3>Professional</h3>
                                <div class="desc">
                                    Paket profesional 123GoGo
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> 25 user akun</li>
                                    <li><i class="icon-angle-right"></i> 250 jumlah SmartScan</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                </ul>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Bulanan
                                        </div>
                                        <div class="amount ">
                                            28.99		
                                        </div>
                                    </div>
                                    <br><br>
                                    <form style="text-align: center" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="KUNYWUAG99GWW">
                                    <input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="spance10 visible-phone"></div>
                        <div class="span3-tabel">
                            <div class="pricing-table selected">
                                <h3>Enterprise</h3>
                                <div class="desc">
                                    Paket enterprise 123GoGo
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> 50 user akun</li>
                                    <li><i class="icon-angle-right"></i> 500 jumlah SmartScan</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                </ul>
                                <div class="rate">
                                    <div class="price">
                                        <div class="currency ">
                                            $<br />
                                            Bulanan
                                        </div>
                                        <div class="amount ">
                                            59.99		
                                        </div>
                                    </div>
                                    <br><br>
                                    <form style="text-align: center" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                    <input type="hidden" name="cmd" value="_s-xclick">
                                    <input type="hidden" name="hosted_button_id" value="KZJQK6CL5ZM8G">
                                    <input type="image" src="https://www.paypalobjects.com/en_GB/SG/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
                                    <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="spance10 visible-phone"></div>
                        <div class="span3-tabel">
                            <div class="pricing-table">
                                <h3>Ultimate</h3>
                                <div class="desc">
                                    Paket ultimate 123GoGo
                                </div>
                                <ul>
                                    <li><i class="icon-angle-right"></i> lebih dari 50 user akun</li>
                                    <li><i class="icon-angle-right"></i> lebih dari 500 jumlah SmartScan</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                    <li>&nbsp;</li>
                                </ul>
                                <div class="rate">
                                    <div class="price">
                                        {*<div class="currency ">
                                            $<br />
                                            Bulanan
                                        </div>
                                        <div class="amount ">
                                            ~		
                                        </div>*}
                                    </div>
                                    <a href="{site_url("welcome/kontak")}" class="btn green">
                                    Hubungi Kami <i class="m-icon-swapright m-icon-white"></i>
                                    </a> 	
                                </div>
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