<center>
<table style="margin: 0 auto;text-align: center;font-size: 20px;font-weight: bold">
    <tr>
        <td>Bukti Bank Keluar - {$no_jurnal}</td>
    </tr>
    <tr>
        <td>PT. {getField('company_name',$company,'company_id','company')}</td>
    </tr>
</table>

<table style="margin: 0 45px;width: 800px;text-align: center" border="1">
    {foreach $list as $row}
    {if $row@first}
    <tr>
        <td>Tanggal : </td>
        <td colspan=6>{showDate($row->jurnal_createddate)}</td>
        <td bgcolor=lightsteelblue><b>Dibuat</b></td>
    </tr>
    <tr>
        <td><strong>Total</strong></td>
        <td colspan=6>{$jumlah = getTotalJurnal($row->jurnal_no)}
            Rp. {$jumlah|number_format:0:",":"."}</td>
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
        <td rowspan=2 colspan="2">{getBankData($row->bank_id)}</td>
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
    {foreach $list as $data}
    <tr>
        <td>{$data->request_id}</td>
        <td>{$data->uraian}</td>
        <td>{$data->payment}</td>
        <td colspan="2">Rp. {$data->jumlah|dec|number_format:0:",":"."}</td>
        <td>{$data->bank|dec}</td>
        <td>{$data->no_rek|dec}</td>
        <td>{$data->penerima|dec}</td>
    </tr>
    {/foreach}
    <tr>
        <td colspan=2><strong>TOTAL</strong></td>
        <td colspan=6>{$jumlah = getTotalJurnal($row->jurnal_no)}
            Rp. {$jumlah|number_format:0:",":"."}</td>
    </tr>
    {/if}
    {/foreach}
</table>
</center