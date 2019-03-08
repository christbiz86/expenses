<table class="table table-striped table-bordered table-hover" id="sample_1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th class="hidden-480">Dokumen</th>
        </tr>
    </thead>
    <tbody>
        {$no = 1}
        {foreach $list as $row}
        <tr class="odd gradeX">
            <td>{$no}</td>
            <td>{$row->scan_nama}</td>
            <td>{getScan($row->scan_dokumen)}</td>
        </tr>
        {$no = $no + 1}
        {/foreach}
    </tbody>
</table>