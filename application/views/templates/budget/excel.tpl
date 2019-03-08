<table class="table table-striped table-bordered table-hover" id="sample_1">
    <thead>
        <tr>
            <th>No</th>
            <th>Cabang</th>
            <th>Periode</th>
            <th>Pengeluaran</th>
            <th class="hidden-480">Jumlah</th>
            <th class="hidden-480">Sisa Budget</th>
            <th class="hidden-480">Postdate</th>
        </tr>
    </thead>
    <tbody>
        {$no = 1}
        {foreach $list as $row}
        <tr class="odd gradeX">
            <td>{$no}</td>
            <td>{getCabang($row->cabang_id)}</td>
            <td>{$row->budget_period|ucfirst}</td>
            <td>{$row->item_desc}</td>
            <td style="text-align: right">Rp. {$row->jumlah|number_format:0:",":"."}</td>
            <td style="text-align: right">{hitungSisaBudget($row->jumlah, $row->item_id, $row->budget_period, $row->cabang_id)}</td>
            <td>{showDate($row->postdate)}</td>
        </tr>
        {$no = $no + 1}
        {/foreach}
    </tbody>
</table>