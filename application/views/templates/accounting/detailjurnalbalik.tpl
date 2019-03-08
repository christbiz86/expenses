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
    {foreach $list as $data}
    {$bank_id = $data->bank_id}
    {$jurnal_no = $data->jurnal_no}
    {$status_bbk = $data->status_bbk}
    {$tgl_bbk = $data->postdate}
    {$jumlah = getTotalPd($data->request_id)}
    {/foreach}
    <tr>
        <td>{showDate($tgl_bbk)}</td>
        {if $status_bbk == 'Decline'}
            <td>-</td>
            <td>
                YMHD
            </td>
        {else}
            <td>{if $bank_id == 0} - {else}
                {getField('item_kode',$bank_id,'bank_id','bank')}
                {/if}
            </td>
            <td>
                {if $bank_id == 0} YMHD {else}
                {getBankData($bank_id)}
                {/if}
            </td>
        {/if}
        <td>{$jumlah}</td>
        <td> - </td>
    </tr>
    {foreach $list as $row}
    {if $row@first}
    <tr>
        <td>{showDate($row->postdate)}</td>
        <td>{getMultiItem($row->request_id,'item_kode','jurnal')}</td>
        <td>{getMultiItem($row->request_id,'item_desc','jurnal')}</td>
        <td>&nbsp;</td>
        <td>{getMultiItem($row->request_id,'jumlah','jurnal')}</td>
    </tr>
    {/if}
    {/foreach}
    <tr>
        <td colspan="3" style="font-weight: bold;">Total</td>
        <td>{getTotalPd($row->request_id)}</td>
        <td>{getTotalPd($row->request_id)}</td>
    </tr>
</table>
</center>    