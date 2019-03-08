<table class="table table-striped table-bordered table-hover" id="sample_1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th class="hidden-480">Company</th>
            <th class="hidden-480">Kota</th>
            <th class="hidden-480">Telp</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        {$no = 1}
        {foreach $list as $row}
        <tr class="odd gradeX">
            <td>{$no}</td>
            <td>{$row->supplier_name}</td>
            <td class="hidden-480">{$row->supplier_company}</td>
            <td class="center hidden-480">{$row->supplier_city}</td>
            <td>{$row->supplier_telp}</td>
            <td class="hidden-480"><a href="mailto:{$row->supplier_email}">{$row->supplier_email}</a></td>
        </tr>
        {$no = $no + 1}
        {/foreach}
    </tbody>
</table>