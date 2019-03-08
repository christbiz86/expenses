<?php /* Smarty version Smarty-3.1.13, created on 2014-02-05 11:11:25
         compiled from "application/views/templates/accounting/detailjurnalbalik.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139148500052e0ea41c6b2d7-75950304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6865c2f8fd75bcb05d484cd2e3920faacaac3035' => 
    array (
      0 => 'application/views/templates/accounting/detailjurnalbalik.tpl',
      1 => 1391573484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139148500052e0ea41c6b2d7-75950304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52e0ea41d4b9d7_30862677',
  'variables' => 
  array (
    'no_jurnal' => 0,
    'company' => 0,
    'list' => 0,
    'data' => 0,
    'tgl_bbk' => 0,
    'status_bbk' => 0,
    'bank_id' => 0,
    'jumlah' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52e0ea41d4b9d7_30862677')) {function content_52e0ea41d4b9d7_30862677($_smarty_tpl) {?><center>
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
    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
    <?php $_smarty_tpl->tpl_vars['bank_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value->bank_id, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['jurnal_no'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value->jurnal_no, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['status_bbk'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value->status_bbk, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['tgl_bbk'] = new Smarty_variable($_smarty_tpl->tpl_vars['data']->value->postdate, null, 0);?>
    <?php $_smarty_tpl->tpl_vars['jumlah'] = new Smarty_variable(getTotalPd($_smarty_tpl->tpl_vars['data']->value->request_id), null, 0);?>
    <?php } ?>
    <tr>
        <td><?php echo showDate($_smarty_tpl->tpl_vars['tgl_bbk']->value);?>
</td>
        <?php if ($_smarty_tpl->tpl_vars['status_bbk']->value=='Decline'){?>
            <td>-</td>
            <td>
                YMHD
            </td>
        <?php }else{ ?>
            <td><?php if ($_smarty_tpl->tpl_vars['bank_id']->value==0){?> - <?php }else{ ?>
                <?php echo getField('item_kode',$_smarty_tpl->tpl_vars['bank_id']->value,'bank_id','bank');?>

                <?php }?>
            </td>
            <td>
                <?php if ($_smarty_tpl->tpl_vars['bank_id']->value==0){?> YMHD <?php }else{ ?>
                <?php echo getBankData($_smarty_tpl->tpl_vars['bank_id']->value);?>

                <?php }?>
            </td>
        <?php }?>
        <td><?php echo $_smarty_tpl->tpl_vars['jumlah']->value;?>
</td>
        <td> - </td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['row']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
 $_smarty_tpl->tpl_vars['row']->index++;
 $_smarty_tpl->tpl_vars['row']->first = $_smarty_tpl->tpl_vars['row']->index === 0;
?>
    <?php if ($_smarty_tpl->tpl_vars['row']->first){?>
    <tr>
        <td><?php echo showDate($_smarty_tpl->tpl_vars['row']->value->postdate);?>
</td>
        <td><?php echo getMultiItem($_smarty_tpl->tpl_vars['row']->value->request_id,'item_kode','jurnal');?>
</td>
        <td><?php echo getMultiItem($_smarty_tpl->tpl_vars['row']->value->request_id,'item_desc','jurnal');?>
</td>
        <td>&nbsp;</td>
        <td><?php echo getMultiItem($_smarty_tpl->tpl_vars['row']->value->request_id,'jumlah','jurnal');?>
</td>
    </tr>
    <?php }?>
    <?php } ?>
    <tr>
        <td colspan="3" style="font-weight: bold;">Total</td>
        <td><?php echo getTotalPd($_smarty_tpl->tpl_vars['row']->value->request_id);?>
</td>
        <td><?php echo getTotalPd($_smarty_tpl->tpl_vars['row']->value->request_id);?>
</td>
    </tr>
</table>
</center>    <?php }} ?>