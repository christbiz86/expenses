<table class="table table-striped table-bordered table-hover" id="sample_1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Divisi</th>
            <th class="hidden-480">Email</th>
            <th class="hidden-480">Cabang</th>
            <th class="hidden-480">Level</th>
            <th class="hidden-480">Status</th>
        </tr>
    </thead>
    <tbody>
        {$no = 1}
        {foreach $list as $row}
        <tr class="odd gradeX">
            <td>{$no}</td>
            <td>{$row->full_name}</td>
            <td>{$row->divisi}</td>
            <td class="hidden-480">{$row->email}</td>
            <td class="center hidden-480">{getCabang($row->cabang_id)}</td>
            <td class="hidden-480">{$row->level_desc} - {$row->level_position}</td>
            <td class="hidden-480">{$row->status}</td>
        </tr>
        {$no = $no + 1}
        {/foreach}
    </tbody>
</table>