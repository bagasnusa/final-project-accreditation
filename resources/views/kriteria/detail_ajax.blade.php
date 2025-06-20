<div class="modal-header bg-info text-white">
    <h5 class="modal-title">Detail Kriteria</h5>
    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <table class="table table-bordered">
        <tbody>
            <tr>
                <th>No Kriteria</th>
                <td>{{ $kriteria->no_kriteria }}</td>
            </tr>
            <tr>
                <th>Judul Kriteria</th>
                <td>{{ $judul }}</td>
            </tr>
            <tr>
                <th>Nama User</th>
                <td>{{ count($user_list) ? implode(', ', $user_list) : '-' }}</td>   
            </tr>
            <tr>
                <th>Jumlah Dokumen Pendukung</th>
                <td>{{ $kriteria->jumlah_dokumen ?? 0 }}</td>
            </tr>
            <tr>
                <th>Dibuat Pada</th>
                <td>{{ $kriteria->created_at ? $kriteria->created_at->format('d M Y') : '-' }}</td>
            </tr>
            <tr>
                <th>Diubah Pada</th>
                <td>{{ $kriteria->updated_at ? $kriteria->updated_at->format('d M Y') : '-' }}</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times me-1"></i> Tutup</button>
</div>