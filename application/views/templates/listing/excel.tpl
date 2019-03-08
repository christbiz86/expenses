<table class="table table-striped table-bordered table-hover" id="sample_1">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode Transaksi</th>
            <th>Status</th>
            <th>Group</th>
            <th>Tipe</th>
        </tr>
    </thead>
    <tbody>
        {$no = 1}
        {foreach $list as $row}
        <tr class="odd gradeX">
            <td>{$no}</td>
            <td>{$row->item_desc}</td>
            <td>{$row->item_kode}</td>
            <td>{$row->item_status}</td>
            <td>{$row->group_desc}</td>
            <td>{$row->item_tipe}</td>
        </tr>
        {$no = $no + 1}
        {/foreach}
    </tbody>
</table>