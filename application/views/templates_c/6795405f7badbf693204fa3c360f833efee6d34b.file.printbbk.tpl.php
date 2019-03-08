<?php /* Smarty version Smarty-3.1.13, created on 2014-01-23 16:23:50
         compiled from "application/views/templates/accounting/printbbk.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198366348152df3bfaded520-88697855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6795405f7badbf693204fa3c360f833efee6d34b' => 
    array (
      0 => 'application/views/templates/accounting/printbbk.tpl',
      1 => 1390376951,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198366348152df3bfaded520-88697855',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52df3bfae3d4c5_40025333',
  'variables' => 
  array (
    'no_jurnal' => 0,
    'company' => 0,
    'list' => 0,
    'row' => 0,
    'jumlah' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52df3bfae3d4c5_40025333')) {function content_52df3bfae3d4c5_40025333($_smarty_tpl) {?><center>
<table style="margin: 0 auto;text-align: center;font-size: 20px;font-weight: bold">
    <tr>
        <td>Bukti Bank Keluar - <?php echo $_smarty_tpl->tpl_vars['no_jurnal']->value;?>
</td>
    </tr>
    <tr>
        <td>PT. <?php echo getField('company_name',$_smarty_tpl->tpl_vars['company']->value,'company_id','company');?>
</td>
    </tr>
</table>

<table style="margin: 0 45px;width: 800px;text-align: center" border="1">
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
        <td>Tanggal : </td>
        <td colspan=6><?php echo showDate($_smarty_tpl->tpl_vars['row']->value->jurnal_createddate);?>
</td>
        <td bgcolor=lightsteelblue><b>Dibuat</b></td>
    </tr>
    <tr>
        <td><strong>Total</strong></td>
        <td colspan=6><?php $_smarty_tpl->tpl_vars['jumlah'] = new Smarty_variable(getTotalJurnal($_smarty_tpl->tpl_vars['row']->value->jurnal_no), null, 0);?>
            Rp. <?php echo number_format($_smarty_tpl->tpl_vars['jumlah']->value,0,",",".");?>
</td>
        <td></td>
<!--        <td rowspan=2>Dibuat</td>
        <td rowspan=2>Diperiksa</td>-->
    </tr>
    <tr bgcolor=lightsteelblue>
        <td><strong>Cara Bayar</strong></td>
        <td colspan=2><strong>Jumlah</strong></td>
        <td colspan="2"><strong>Bank</strong></td>
        <td><strong>No Cheque</strong></td>
        <td><strong>Jatuh Tempo</strong></td>
        <td><strong>Diperiksa</strong></td>
    </tr>
    <tr>
        <td>Transfer</td>
        <td colspan=2></td>
        <td rowspan=2 colspan="2"><?php echo getBankData($_smarty_tpl->tpl_vars['row']->value->bank_id);?>
</td>
        <td rowspan=2></td>
        <td rowspan=2></td>
        <td rowspan="2">-</td>
    </tr>
    <tr>
        <td rowspan="4">Tunai</td>
        <td colspan=2 rowspan="4"></td>
    </tr>
    <tr>
        <td bgcolor=lightsteelblue><strong>Maker</strong></td>
        <td bgcolor=lightsteelblue><strong>Checker</strong></td>
        <td bgcolor=lightsteelblue><strong>Releaser</strong></td>
        <td bgcolor=lightsteelblue colspan="2"><strong>Disetujui</strong></td>
    </tr>
    <tr></tr>
    <tr>
        <td></td>
        <td>-</td>
        <td>-</td>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td colspan=5 bgcolor=lightsteelblue></td>
        <td colspan=3 align=center bgcolor=lightsteelblue><strong>Rekening Penerima</strong></td>
    </tr>
    <tr bgcolor=gainsboro>
        <td>No. Request</td>
        <td>Keterangan</td>
        <td>TU/TR</td>
        <td colspan="2">Jumlah</td>
        <td>Bank</td>
        <td>No Rek</td>
        <td>Nama Penerima</td>
    </tr>
    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value){
$_smarty_tpl->tpl_vars['data']->_loop = true;
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value->request_id;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value->uraian;?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['data']->value->payment;?>
</td>
        <td colspan="2">Rp. <?php echo number_format(dec($_smarty_tpl->tpl_vars['data']->value->jumlah),0,",",".");?>
</td>
        <td><?php echo dec($_smarty_tpl->tpl_vars['data']->value->bank);?>
</td>
        <td><?php echo dec($_smarty_tpl->tpl_vars['data']->value->no_rek);?>
</td>
        <td><?php echo dec($_smarty_tpl->tpl_vars['data']->value->penerima);?>
</td>
    </tr>
    <?php } ?>
    <tr>
        <td colspan=2><strong>TOTAL</strong></td>
        <td colspan=6><?php $_smarty_tpl->tpl_vars['jumlah'] = new Smarty_variable(getTotalJurnal($_smarty_tpl->tpl_vars['row']->value->jurnal_no), null, 0);?>
            Rp. <?php echo number_format($_smarty_tpl->tpl_vars['jumlah']->value,0,",",".");?>
</td>
    </tr>
    <?php }?>
    <?php } ?>
</table>
</center<?php }} ?>