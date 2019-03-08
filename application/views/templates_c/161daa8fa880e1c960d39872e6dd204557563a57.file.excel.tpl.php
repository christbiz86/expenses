<?php /* Smarty version Smarty-3.1.13, created on 2013-11-26 16:09:18
         compiled from "application/views/templates/request/excel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1321165477529428d4d736f4-81252392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '161daa8fa880e1c960d39872e6dd204557563a57' => 
    array (
      0 => 'application/views/templates/request/excel.tpl',
      1 => 1385456929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1321165477529428d4d736f4-81252392',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_529428d4e99c02_04709196',
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
<?php if ($_valid && !is_callable('content_529428d4e99c02_04709196')) {function content_529428d4e99c02_04709196($_smarty_tpl) {?><table class="table table-striped table-bordered table-hover" id="sample_1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th class="hidden-480">Cabang</th>
            <th class="hidden-480">Pengeluaran</th>
            <th class="hidden-480">Jumlah</th>
            <th class="hidden-480">Tipe</th>
            <th>Uraian</th>
            <th>Tgl Request</th>
            <th>Status</th>
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
        <?php $_smarty_tpl->tpl_vars['cekbaru'] = new Smarty_variable($_smarty_tpl->tpl_vars['row']->value->request_id, null, 0);?>
        <?php if ($_smarty_tpl->tpl_vars['cekbaru']->value!=$_smarty_tpl->tpl_vars['cekold']->value&&strstr($_smarty_tpl->tpl_vars['cabang']->value,$_smarty_tpl->tpl_vars['row']->value->cabang_id)){?>
        <tr class="odd gradeX">
            <td><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->full_name;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->cabang_nama;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->item_desc;?>
</td>
            <td style="text-align: right">
                <?php $_smarty_tpl->tpl_vars['jumlah'] = new Smarty_variable(dec($_smarty_tpl->tpl_vars['row']->value->jumlah), null, 0);?>
                Rp. <?php echo number_format($_smarty_tpl->tpl_vars['jumlah']->value,0,",",".");?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->tipe;?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['row']->value->uraian;?>
</td>
            <td><?php echo showDate($_smarty_tpl->tpl_vars['row']->value->postdate);?>
</td>
            <td <?php if ($_smarty_tpl->tpl_vars['row']->value->status=='Canceled'){?>style="color: red"<?php }?>>
                <?php echo $_smarty_tpl->tpl_vars['row']->value->status;?>

                <?php if ($_smarty_tpl->tpl_vars['row']->value->status!='New'){?>
                    by <?php echo getField('full_name',$_smarty_tpl->tpl_vars['row']->value->approved_by,'gogo_login.login_id','login');?>
 - <?php echo showDate($_smarty_tpl->tpl_vars['row']->value->date_approve);?>

                <?php }?>
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