<table class="table table-striped table-bordered table-hover" id="sample_1">
    <thead>
        <tr>
            <th class="hidden-480">No</th>
            <th>Nama Bank</th>
            <th>No Rekening</th>
            <th class="hidden-480">Kode Transaksi</th>
        </tr>
    </thead>
    <tbody>
        {$no = 1}
        {foreach $list as $row}
        <tr class="odd gradeX">
            <td class="hidden-480">{$no}</td>
            <td>{$row->bank_nama}</td>
            <td>{$row->bank_norek}</td>
            <td class="hidden-480">{$row->item_kode}</td>
        </tr>
        {$no = $no + 1}
        {/foreach}
    </tbody>
</table>