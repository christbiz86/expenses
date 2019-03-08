<?php /* Smarty version Smarty-3.1.13, created on 2013-11-26 14:46:50
         compiled from "application/views/templates/scan/excel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:555788610529451ea6f3f78-75005809%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51b6bbb3834c71cc01d4cf57f7eae4164e52a70a' => 
    array (
      0 => 'application/views/templates/scan/excel.tpl',
      1 => 1384163998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '555788610529451ea6f3f78-75005809',
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
  'unifunc' => 'content_529451ea75f030_54354967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_529451ea75f030_54354967')) {function content_529451ea75f030_54354967($_smarty_tpl) {?><table class="table table-striped table-bordered table-hover" id="sample_1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th class="hidden-480">Dokumen</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->scan_nama;?>
</td>
            <td><?php echo getScan($_smarty_tpl->tpl_vars['row']->value->scan_dokumen);?>
</td>
        </tr>
        <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
        <?php } ?>
    </tbody>
</table><?php }} ?>