<?php /* Smarty version Smarty-3.1.13, created on 2014-01-22 16:25:56
         compiled from "application/views/templates/bank/excel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:42749809852df8ea4295375-23040607%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c53232892007a90c7dc25e59794b76ba05b1ee00' => 
    array (
      0 => 'application/views/templates/bank/excel.tpl',
      1 => 1390359055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42749809852df8ea4295375-23040607',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'no' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52df8ea4302d90_40666291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df8ea4302d90_40666291')) {function content_52df8ea4302d90_40666291($_smarty_tpl) {?><table class="table table-striped table-bordered table-hover" id="sample_1">
    <thead>
        <tr>
            <th class="hidden-480">No</th>
            <th>Nama Bank</th>
            <th>No Rekening</th>
            <th class="hidden-480">Kode Transaksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
        <tr class="odd gradeX">
            <td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->bank_nama;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->bank_norek;?>
</td>
            <td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['row']->value->item_kode;?>
</td>
        </tr>
        <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
        <?php } ?>
    </tbody>
</table><?php }} ?>