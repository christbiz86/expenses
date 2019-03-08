{extends file="layout-info.tpl"}

{block name=content}
<!-- BEGIN EMPTY PAGE SIDEBAR -->
<div class="page-sidebar nav-collapse"></div>
<!-- END EMPTY PAGE SIDEBAR -->
<!-- BEGIN PAGE -->
<div class="page-content">
    <!-- BEGIN PAGE CONTAINER-->
    <div class="container-fluid">
        <!-- BEGIN PAGE HEADER-->
        <div class="row-fluid">
            <div class="span12">
                <!-- BEGIN PAGE TITLE & BREADCRUMB-->			
                <h3 class="page-title">
                    Tentang Kami				
                    <small>sekilas tentang ExpenseGoGo</small>
                </h3>
                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="{base_url()}">Home</a> 
                        <i class="icon-angle-right"></i>
                    </li>
                    <li><a href="{site_url("info/about_us")}">Tentang Kami</a></li>
                </ul>
                <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
        </div>
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row-fluid">
            <div class="span12">
                <p><b>Visi :</b></p>
                <p>Menjadi situs nomor satu di Indonesia yang digunakan oleh 
                perusahaan dalam hal memudahkan pengaturan laporan biaya.</p><br>
                <p><b>Misi :</b></p>
                <ul>
                    <li>Memberikan pelayanan yang terbaik bagi perusahaan dalam hal pengarsipan laporan biaya.</li>
                    <li>Memberikan kemudahan bagi perusahaan dalam hal pengarsipan laporan biaya, secara online melalui mobile phone.</li>
                    <li>Memberikan keamanan data yang telah di input oleh perorangan ke dalam database laporan biaya perusahaan.</li>
                    <li>Memberikan kemudahan dalam penganalisaan pemakaian laporan biaya sesuai dengan yang dibutuhkan oleh perusahaan.</li>
                </ul><br>
                <p><b>Slogan :</b></p>
                <p>"Even baby knows how to use 123"</p>
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>
    <!-- END PAGE CONTAINER-->	
</div>
<!-- END PAGE -->
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