<?php /* Smarty version Smarty-3.1.13, created on 2013-12-03 11:29:28
         compiled from "application/views/templates/income/excel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1905403719529bf1cf3e6172-26310640%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7be90cc25728b39b430f94fb601bbdd4811b6d7d' => 
    array (
      0 => 'application/views/templates/income/excel.tpl',
      1 => 1385956771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1905403719529bf1cf3e6172-26310640',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_529bf1cf4d09c8_91025310',
  'variables' => 
  array (
    'list' => 0,
    'row' => 0,
    'cekbaru' => 0,
    'cekold' => 0,
    'cabang' => 0,
    'no' => 0,
    'jumlah' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529bf1cf4d09c8_91025310')) {function content_529bf1cf4d09c8_91025310($_smarty_tpl) {?><table class="table table-striped table-bordered table-hover" id="sample_1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th class="hidden-480">Cabang</th>
            <th class="hidden-480">Jumlah</th>
            <th>Uraian</th>
            <th>Tgl Pemasukan</th>
            <th>Dokumen</th>
        </tr>
    </thead>
    <tbody>
        <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['cekold'] = new Smarty_variable('', null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <?php $_smarty_tpl->tpl_vars['cekbaru'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value->income_id, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['cekbaru']->value!=$_smarty_tpl->tpl_vars['cekold']->value&&strstr($_smarty_tpl->tpl_vars['cabang']->value,$_smarty_tpl->tpl_vars['row']->value->cabang_id)){?>
        <tr class="odd gradeX">
            <td><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->full_name;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->item_desc;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->cabang_nama;?>
</td>
            <td style="text-align: right">
                <?php $_smarty_tpl->tpl_vars['jumlah'] = new Smarty_variable(dec($_smarty_tpl->tpl_vars['row']->value->jumlah), null, 0);?>
                Rp. <?php echo number_format($_smarty_tpl->tpl_vars['jumlah']->value,0,",",".");?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->uraian;?>
</td>
            <td><?php echo showDate($_smarty_tpl->tpl_vars['row']->value->postdate);?>
</td>
            <td>
                <a target="_blank" href="<?php echo site_url("resources/dokumen");?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value->dokumen;?>
">Klik disini</a>
            </td>
        </tr>
        <?php $_smarty_tpl->tpl_vars['cekold'] = new Smarty_variable($_smarty_tpl->tpl_vars['cekbaru']->value, null, 0);?>
        <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
        <?php }?>
        <?php } ?>
    </tbody>
</table><?php }} ?>