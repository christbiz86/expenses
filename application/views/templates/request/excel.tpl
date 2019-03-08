<table class="table table-striped table-bordered table-hover" id="sample_1">
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
        {$no = 1}
        {$cekold = ''}
        {foreach $list as $row}
        {$cekbaru = $row->request_id}
        {if $cekbaru != $cekold && $cabang|strstr:$row->cabang_id}
        <tr class="odd gradeX">
            <td>{$no}</td>
            <td>{$row->full_name}</td>
            <td>{$row->cabang_nama}</td>
            <td>{$row->item_desc}</td>
            <td style="text-align: right">
                {$jumlah = $row->jumlah|dec}
                Rp. {$jumlah|number_format:0:",":"."}</td>
            <td>{$row->tipe}</td>
            <td>{$row->uraian}</td>
            <td>{showDate($row->postdate)}</td>
            <td {if $row->status=='Canceled'}style="color: red"{/if}>
                {$row->status}
                {if $row->status!='New'}
                    by {getField('full_name',$row->approved_by,'gogo_login.login_id','login')} - {showDate($row->date_approve)}
                {/if}
            </td>
            <td>
                <a target="_blank" href="{site_url("resources/dokumen")}/{$row->dokumen}">Klik disini</a>
            </td>
        </tr>
        {$cekold = $cekbaru}
        {$no = $no+1}
        {/if}
        {/foreach}
    </tbody>
</table>