<?php /* Smarty version Smarty-3.1.13, created on 2014-02-05 10:57:08
         compiled from "application/views/templates/menu-left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1665993945248dfeb695be1-94402666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7d4809a6aed1c5262c6ecfff5287a76b01821c0' => 
    array (
      0 => 'application/views/templates/menu-left.tpl',
      1 => 1391572553,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1665993945248dfeb695be1-94402666',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5248dfeb69cf36_46366794',
  'variables' => 
  array (
    'privileges' => 0,
    'menu' => 0,
    'submenu' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5248dfeb69cf36_46366794')) {function content_5248dfeb69cf36_46366794($_smarty_tpl) {?><div class="page-sidebar nav-collapse collapse">
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
                
            </form>
            <!-- END RESPONSIVE QUICK SEARCH FORM -->
        </li>
        
        <?php if ($_smarty_tpl->tpl_vars['privileges']->value->supplier=='TRUE'){?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='supplier'){?>active<?php }?>">
            <a href="<?php echo site_url("supplier/index");?>
">
            <i class="icon-group"></i> 
            <span class="title">Supplier</span>
            </a>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['privileges']->value->struktur=='TRUE'){?>
        <li class="has-sub<?php if ($_smarty_tpl->tpl_vars['menu']->value=='struktur'){?> active<?php }?>">
            <a href="javascript:;">
            <i class="icon-user-md"></i> 
            <span class="title">Struktur User</span>
            <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='cabang'){?> active<?php }?>"><a href="<?php echo site_url("struktur/cabang");?>
">Divisi & Level</a></li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='user'){?> active<?php }?>"><a href="<?php echo site_url("user/index");?>
">User</a></li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='bank'){?> active<?php }?>"><a href="<?php echo site_url("bank/index");?>
">Bank</a></li>
            </ul>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['privileges']->value->scan=='TRUE'){?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='scan'){?> active<?php }?>">
            <a href="<?php echo site_url("scan/index");?>
">
            <i class="icon-upload"></i> 
            <span class="title">Scan Dokumen</span>
            </a>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['privileges']->value->budget=='TRUE'){?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='budget'){?> active<?php }?>">
            <a href="<?php echo site_url("budget/index");?>
">
            <i class="icon-book"></i> 
            <span class="title">Budgeting</span>
            </a>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['privileges']->value->list_coa=='TRUE'){?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='listing'){?> active<?php }?>">
            <a href="<?php echo site_url("listing/index");?>
">
            <i class="icon-th-list"></i> 
            <span class="title">Jenis Transaksi</span>
            </a>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['privileges']->value->accounting=='TRUE'){?>
        <li class="has-sub<?php if ($_smarty_tpl->tpl_vars['menu']->value=='accounting'){?> active<?php }?>">
            <a href="javascript:;">
                <i class="icon-hdd"></i> 
                <span class="title">Akunting</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='viewjurnal'){?> active<?php }?>"><a href="<?php echo site_url("accounting/index");?>
">Buat BBK</a></li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='bbk'){?> active<?php }?>"><a href="<?php echo site_url("accounting/bbk");?>
">Lihat BBK</a></li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='matriks'){?> active<?php }?>"><a href="<?php echo site_url("accounting/matriks");?>
">Matriks Wewenang</a></li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='listjurnal'){?> active<?php }?>"><a href="<?php echo site_url("accounting/listjurnal");?>
">Lihat Jurnal</a></li>
            </ul>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['privileges']->value->reporting=='TRUE'){?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='report'){?>active<?php }?>">
            <a href="<?php echo site_url("report/index");?>
">
            <i class="icon-bar-chart"></i> 
            <span class="title">Reporting</span>
            </a>
        </li>
        <?php }?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='harga'){?>active<?php }?>">
            <a href="<?php echo site_url("harga/index");?>
">
            <i class="icon-money"></i> 
            <span class="title">Harga</span>
            </a>
        </li>
        <?php if ($_smarty_tpl->tpl_vars['privileges']->value->stock=='TRUE'){?>
        <li class="has-sub <?php if ($_smarty_tpl->tpl_vars['menu']->value=='stock'){?>active<?php }?>">
            <a href="javascript:;">
                <i class="icon-qrcode"></i> 
                <span class="title">Data Stock</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='addstock'){?> active<?php }?>"><a href="<?php echo site_url("stock/add");?>
">Tambah Stock</a></li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='viewstock'){?> active<?php }?>"><a href="<?php echo site_url("stock/index");?>
">Lihat Stock</a></li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='spek'){?> active<?php }?>"><a href="<?php echo site_url("stock/spek");?>
">Spesifikasi</a></li>
            </ul>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['privileges']->value->libur=='TRUE'){?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['menu']->value=='libur'){?>active<?php }?>">
            <a href="<?php echo site_url("libur/index");?>
">
            <i class="icon-time"></i> 
            <span class="title">Pengajuan Libur</span>
            </a>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['privileges']->value->request=='TRUE'){?>
        <li class="has-sub <?php if ($_smarty_tpl->tpl_vars['menu']->value=='request'){?>active<?php }?>">
            <a href="javascript:;">
                <i class="icon-credit-card"></i> 
                <span class="title">Dana Pengeluaran</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='add'){?> active<?php }?>"><a href="<?php echo site_url("request/add");?>
">Permintaan Baru</a></li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='view'){?> active<?php }?>"><a href="<?php echo site_url("request/index");?>
">Lihat History</a></li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='approve'){?> active<?php }?>"><a href="<?php echo site_url("request/approval");?>
">Setuju / Tolak</a></li>
            </ul>
        </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['privileges']->value->income=='TRUE'){?>
        <li class="has-sub <?php if ($_smarty_tpl->tpl_vars['menu']->value=='income'){?>active<?php }?>">
            <a href="javascript:;">
                <i class="icon-briefcase"></i> 
                <span class="title">Dana Pemasukan</span>
                <span class="arrow "></span>
            </a>
            <ul class="sub">
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='addincome'){?> active<?php }?>"><a href="<?php echo site_url("income/add");?>
">Pemasukan Baru</a></li>
                <li class="<?php if ($_smarty_tpl->tpl_vars['submenu']->value=='viewincome'){?> active<?php }?>"><a href="<?php echo site_url("income/index");?>
">Lihat History</a></li>
            </ul>
        </li>
        <?php }?>
    </ul>
    <!-- END SIDEBAR MENU -->
</div><?php }} ?>