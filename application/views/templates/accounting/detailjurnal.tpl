<center>
<table style="margin: 0 auto;text-align: center;font-size: 20px;font-weight: bold">
    <tr>
        <td>Jurnal Voucher - {$no_jurnal}</td>
    </tr>
    <tr>
        <td>PT. {getField('company_name',$company,'company_id','company')}</td>
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
    {foreach $list as $row}
    <tr>
        <td>{showDate($row->postdate)}</td>
        <td>{getMultiItem($row->request_id,'item_kode','jurnal')}</td>
        <td>{getMultiItem($row->request_id,'item_desc','jurnal')}</td>
        <td>{getMultiItem($row->request_id,'jumlah','jurnal')}</td>
        <td>&nbsp;</td>
    </tr>
    {$bank_id = $row->bank_id}
    {/foreach}
    <tr>
        <td> - </td>
        <td>{if $bank_id == 0} - {else}
            {getField('item_kode',$bank_id,'bank_id','bank')}
            {/if}
        </td>
        <td>
            {if $bank_id == 0} YMHD {else}
            {getBankData($bank_id)}
            {/if}
        </td>
        <td>&nbsp;</td>
        <td>{$jumlah = getTotalPd($row->request_id)}
            {$jumlah}</td>
    </tr>
    <tr>
        <td colspan="3" style="font-weight: bold;">Total</td>
        <td>{$jumlah}</td>
        <td>{$jumlah}</td>
{*        <td>Rp. {$jumlah|number_format:0:",":"."}</td>*}
    </tr>
</table>
</center>    