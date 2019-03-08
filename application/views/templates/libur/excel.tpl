<table class="table table-striped table-bordered table-hover" id="sample_1">
    <thead>
        <tr>
            <th>No</th>
            <th>Periode</th>
            <th>Keterangan Cuti</th>
            <th class="hidden-480">Pengganti</th>
            <th class="hidden-480">Status</th>
            <th class="hidden-480">Tgl. Buat</th>
        </tr>
    </thead>
    <tbody>
        {$no = 1}
        {foreach $list as $row}
        <tr>
            <td>{$no}</td>
            <td>{showDate($row->libur_start)} - {showDate($row->libur_end)}</td>
            <td>{$row->uraian}</td>
            <td>{$row->full_name}</td>
            <td>
                {if $row->user_ganti != $id}
                    {$row->status}
                    {if $row->status != 'New'}
                        - {showDate($row->approved_date)}
                    {else}
                        &nbsp;&nbsp;&nbsp;<a href="{site_url("libur/cancel")}/{$row->libur_id}" onclick="return confirm('Anda yakin mau cancel Permintaan Cuti ini?');">
                            <span style="cursor: pointer" class="label label-warning">Cancel</span>
                        </a>
                    {/if}
                {else}
                    {if $row->status == 'New'}
                    &nbsp;&nbsp;&nbsp;<a href="{site_url("libur/accept")}/{$row->libur_id}" onclick="return confirm('Anda yakin mau approve Permintaan Cuti ini?');">
                        <span style="cursor: pointer" class="label label-success">Approve</span>
                    </a>
                    {else}
                    Approved - {showDate($row->approved_date)}
                    {/if}
                {/if}
            </td>
            <td>{showDate($row->postdate)}</td>
        </tr>
        {$no = $no + 1}
        {/foreach}
    </tbody>
</table>