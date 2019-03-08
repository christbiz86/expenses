<?php /* Smarty version Smarty-3.1.13, created on 2013-10-31 07:26:04
         compiled from "application/views/templates/supplier/excel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7947548515271d28cde0e78-83322765%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '358b108de6949ff0d2293b71148e30cef372e824' => 
    array (
      0 => 'application/views/templates/supplier/excel.tpl',
      1 => 1383191214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7947548515271d28cde0e78-83322765',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5271d28ce35ce5_68161427',
  'variables' => 
  array (
    'list' => 0,
    'no' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5271d28ce35ce5_68161427')) {function content_5271d28ce35ce5_68161427($_smarty_tpl) {?><table class="table table-striped table-bordered table-hover" id="sample_1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th class="hidden-480">Company</th>
            <th class="hidden-480">Kota</th>
            <th class="hidden-480">Telp</th>
            <th>Email</th>
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
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->supplier_name;?>
</td>
            <td class="hidden-480"><?php echo $_smarty_tpl->tpl_vars['row']->value->supplier_company;?>
</td>
            <td class="center hidden-480"><?php echo $_smarty_tpl->tpl_vars['row']->value->supplier_city;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->supplier_telp;?>
</td>
            <td class="hidden-480"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['row']->value->supplier_email;?>
"><?php echo $_smarty_tpl->tpl_vars['row']->value->supplier_email;?>
</a></td>
        </tr>
        <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
        <?php } ?>
    </tbody>
</table><?php }} ?>