<?php /* Smarty version Smarty-3.1.13, created on 2013-11-26 11:55:59
         compiled from "application/views/templates/budget/excel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:499195612529429dfdbfb23-86041496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5aa9f381b73efa3ff081aa82e61068cc613a9f1d' => 
    array (
      0 => 'application/views/templates/budget/excel.tpl',
      1 => 1384164001,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '499195612529429dfdbfb23-86041496',
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
  'unifunc' => 'content_529429dfe62bf9_25462487',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529429dfe62bf9_25462487')) {function content_529429dfe62bf9_25462487($_smarty_tpl) {?><table class="table table-striped table-bordered table-hover" id="sample_1">
    <thead>
        <tr>
            <th>No</th>
            <th>Cabang</th>
            <th>Periode</th>
            <th>Pengeluaran</th>
            <th class="hidden-480">Jumlah</th>
            <th class="hidden-480">Sisa Budget</th>
            <th class="hidden-480">Postdate</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
            <td><?php echo getCabang($_smarty_tpl->tpl_vars['row']->value->cabang_id);?>
</td>
            <td><?php echo ucfirst($_smarty_tpl->tpl_vars['row']->value->budget_period);?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->item_desc;?>
</td>
            <td style="text-align: right">Rp. <?php echo number_format($_smarty_tpl->tpl_vars['row']->value->jumlah,0,",",".");?>
</td>
            <td style="text-align: right"><?php echo hitungSisaBudget($_smarty_tpl->tpl_vars['row']->value->jumlah,$_smarty_tpl->tpl_vars['row']->value->item_id,$_smarty_tpl->tpl_vars['row']->value->budget_period,$_smarty_tpl->tpl_vars['row']->value->cabang_id);?>
</td>
            <td><?php echo showDate($_smarty_tpl->tpl_vars['row']->value->postdate);?>
</td>
        </tr>
        <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
        <?php } ?>
    </tbody>
</table><?php }} ?>