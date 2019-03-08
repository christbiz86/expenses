<div class="page-sidebar nav-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->        	
    <ul>
        <li>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <div class="sidebar-toggler hidden-phone"></div>
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        </li>
        <li>
            <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
            <form class="sidebar-search">
                {*<div class="input-box">
                    <a href="javascript:;" class="remove"></a>
                    <input type="text" placeholder="Search..." />				
                    <input type="button" class="submit" value=" " />
                </div>*}
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        {*<li class="start{if $menu=='dashboard'} active{/if}">
            <a href="{site_url("home")}">
            <i class="icon-home"></i> 
            <span class="title">Dashboard</span>
            <span class="selected"></span>
            </a>
        </li>*}
        {if $privileges->supplier=='TRUE'}
        <li class="{if $menu=='supplier'}active{/if}">
            <a href="{site_url("supplier/index")}">
            <i class="icon-group"></i> 
            <span class="title">Supplier</span>
            </a>
        </li>
        {/if}
        {if $privileges->struktur=='TRUE'}
        <li class="has-sub{if $menu=='struktur'} active{/if}">
            <a href="javascript:;">
            <i class="icon-user-md"></i> 
            <span class="title">Struktur User</span>
            <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li class="{if $submenu=='cabang'} active{/if}"><a href="{site_url("struktur/cabang")}">Divisi & Level</a></li>
                <li class="{if $submenu=='user'} active{/if}"><a href="{site_url("user/index")}">User</a></li>
                <li class="{if $submenu=='bank'} active{/if}"><a href="{site_url("bank/index")}">Bank</a></li>
            </ul>
        </li>
        {/if}
        {if $privileges->scan=='TRUE'}
        <li class="{if $menu=='scan'} active{/if}">
            <a href="{site_url("scan/index")}">
            <i class="icon-upload"></i> 
            <span class="title">Scan Dokumen</span>
            </a>
        </li>
        {/if}
        {if $privileges->budget=='TRUE'}
        <li class="{if $menu=='budget'} active{/if}">
            <a href="{site_url("budget/index")}">
            <i class="icon-book"></i> 
            <span class="title">Budgeting</span>
            </a>
        </li>
        {/if}
        {if $privileges->list_coa=='TRUE'}
        <li class="{if $menu=='listing'} active{/if}">
            <a href="{site_url("listing/index")}">
            <i class="icon-th-list"></i> 
            <span class="title">Jenis Transaksi</span>
            </a>
        </li>
        {/if}
        {if $privileges->accounting=='TRUE'}
        <li class="has-sub{if $menu=='accounting'} active{/if}">
            <a href="javascript:;">
                <i class="icon-hdd"></i> 
                <span class="title">Akunting</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li class="{if $submenu=='viewjurnal'} active{/if}"><a href="{site_url("accounting/index")}">Buat BBK</a></li>
                <li class="{if $submenu=='bbk'} active{/if}"><a href="{site_url("accounting/bbk")}">Lihat BBK</a></li>
                <li class="{if $submenu=='matriks'} active{/if}"><a href="{site_url("accounting/matriks")}">Matriks Wewenang</a></li>
                <li class="{if $submenu=='listjurnal'} active{/if}"><a href="{site_url("accounting/listjurnal")}">Lihat Jurnal</a></li>
            </ul>
        </li>
        {/if}
        {if $privileges->reporting=='TRUE'}
        <li class="{if $menu=='report'}active{/if}">
            <a href="{site_url("report/index")}">
            <i class="icon-bar-chart"></i> 
            <span class="title">Reporting</span>
            </a>
        </li>
        {/if}
        <li class="{if $menu=='harga'}active{/if}">
            <a href="{site_url("harga/index")}">
            <i class="icon-money"></i> 
            <span class="title">Harga</span>
            </a>
        </li>
        {if $privileges->stock=='TRUE'}
        <li class="has-sub {if $menu=='stock'}active{/if}">
            <a href="javascript:;">
                <i class="icon-qrcode"></i> 
                <span class="title">Data Stock</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li class="{if $submenu=='addstock'} active{/if}"><a href="{site_url("stock/add")}">Tambah Stock</a></li>
                <li class="{if $submenu=='viewstock'} active{/if}"><a href="{site_url("stock/index")}">Lihat Stock</a></li>
                <li class="{if $submenu=='spek'} active{/if}"><a href="{site_url("stock/spek")}">Spesifikasi</a></li>
            </ul>
        </li>
        {/if}
        {if $privileges->libur=='TRUE'}
        <li class="{if $menu=='libur'}active{/if}">
            <a href="{site_url("libur/index")}">
            <i class="icon-time"></i> 
            <span class="title">Pengajuan Libur</span>
            </a>
        </li>
        {/if}
        {if $privileges->request=='TRUE'}
        <li class="has-sub {if $menu=='request'}active{/if}">
            <a href="javascript:;">
                <i class="icon-credit-card"></i> 
                <span class="title">Dana Pengeluaran</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li class="{if $submenu=='add'} active{/if}"><a href="{site_url("request/add")}">Permintaan Baru</a></li>
                <li class="{if $submenu=='view'} active{/if}"><a href="{site_url("request/index")}">Lihat History</a></li>
                <li class="{if $submenu=='approve'} active{/if}"><a href="{site_url("request/approval")}">Setuju / Tolak</a></li>
            </ul>
        </li>
        {/if}
        {if $privileges->income=='TRUE'}
        <li class="has-sub {if $menu=='income'}active{/if}">
            <a href="javascript:;">
                <i class="icon-briefcase"></i> 
                <span class="title">Dana Pemasukan</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li class="{if $submenu=='addincome'} active{/if}"><a href="{site_url("income/add")}">Pemasukan Baru</a></li>
                <li class="{if $submenu=='viewincome'} active{/if}"><a href="{site_url("income/index")}">Lihat History</a></li>
            </ul>
        </li>
        {/if}
    </ul>
    <!-- END SIDEBAR MENU -->
</div>