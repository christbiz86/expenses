<table class="table table-striped table-bordered table-hover" id="sample_2">
    <thead>
        <tr>
            <th style="width:8px;">No</th>
            <th>Deskripsi</th>
            <th class="hidden-480">Level</th>
        </tr>
    </thead>
    <tbody>
        {$no = 1}
        {foreach $list as $row}
        <tr class="odd gradeX">
            <td>{$no}</td>
            <td>{$row->level_desc}</td>
            <td class="hidden-480">{$row->level_position}</td>
        </tr>
        {$no = $no + 1}
        {/foreach}
    </tbody>
</table>