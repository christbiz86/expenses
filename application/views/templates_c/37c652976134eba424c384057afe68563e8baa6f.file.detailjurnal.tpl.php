<?php /* Smarty version Smarty-3.1.13, created on 2014-02-04 17:22:23
         compiled from "application/views/templates/accounting/detailjurnal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68211616352d650dba14857-77932138%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '37c652976134eba424c384057afe68563e8baa6f' => 
    array (
      0 => 'application/views/templates/accounting/detailjurnal.tpl',
      1 => 1391509342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68211616352d650dba14857-77932138',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52d650dbb94711_20290997',
  'variables' => 
  array (
    'no_jurnal' => 0,
    'company' => 0,
    'list' => 0,
    'row' => 0,
    'bank_id' => 0,
    'jumlah' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d650dbb94711_20290997')) {function content_52d650dbb94711_20290997($_smarty_tpl) {?><center>
<table style="margin: 0 auto;text-align: center;font-size: 20px;font-weight: bold">
    <tr>
        <td>Jurnal Voucher - <?php echo $_smarty_tpl->tpl_vars['no_jurnal']->value;?>
</td>
    </tr>
    <tr>
        <td>PT. <?php echo getField('company_name',$_smarty_tpl->tpl_vars['company']->value,'company_id','company');?>
</td>
    </tr>
</table>

<table style="margin: 0 45px;width: 600px">
    <tr>
        <td>No : </td>
        <td></td>
    </tr>
    <tr>
        <td>Tanggal : </td>
        <td></td>
    </tr>
    <tr>
        <td>Bank : </td>
        <td></td>
    </tr>
    <tr>
        <td>Keterangan : </td>
        <td></td>
    </tr>
</table>
<br><br>
<table style="margin: 0 45px;width: 800px;text-align: center" border="1">
    <tr>
        <td style="font-weight: bold;">Tanggal Transaksi</td>
        <td style="font-weight: bold;">Kode Transaksi</td>
        <td style="font-weight: bold;">Nama Transaksi</td>
        <td style="font-weight: bold;">Debit</td>
        <td style="font-weight: bold;">Kredit</td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
    <tr>
        <td><?php echo showDate($_smarty_tpl->tpl_vars['row']->value->postdate);?>
</td>
        <td><?php echo getMultiItem($_smarty_tpl->tpl_vars['row']->value->request_id,'item_kode','jurnal');?>
</td>
        <td><?php echo getMultiItem($_smarty_tpl->tpl_vars['row']->value->request_id,'item_desc','jurnal');?>
</td>
        <td><?php echo getMultiItem($_smarty_tpl->tpl_vars['row']->value->request_id,'jumlah','jurnal');?>
</td>
        <td>&nbsp;</td>
    </tr>
    <?php $_smarty_tpl->tpl_vars['bank_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value->bank_id, null, 0);?>
    <?php } ?>
    <tr>
        <td> - </td>
        <td><?php if ($_smarty_tpl->tpl_vars['bank_id']->value==0){?> - <?php }else{ ?>
            <?php echo getField('item_kode',$_smarty_tpl->tpl_vars['bank_id']->value,'bank_id','bank');?>

            <?php }?>
        </td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['bank_id']->value==0){?> YMHD <?php }else{ ?>
            <?php echo getBankData($_smarty_tpl->tpl_vars['bank_id']->value);?>

            <?php }?>
        </td>
        <td>&nbsp;</td>
        <td><?php $_smarty_tpl->tpl_vars['jumlah'] = new Smarty_variable(getTotalPd($_smarty_tpl->tpl_vars['row']->value->request_id), null, 0);?>
            <?php echo $_smarty_tpl->tpl_vars['jumlah']->value;?>
</td>
    </tr>
    <tr>
        <td colspan="3" style="font-weight: bold;">Total</td>
        <td><?php echo $_smarty_tpl->tpl_vars['jumlah']->value;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['jumlah']->value;?>
</td>

    </tr>
</table>
</center>    <?php }} ?>