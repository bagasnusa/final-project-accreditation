<form id="formDeleteSertifikasi" method="POST" action="{{ route('portofolio.sertifikasi.delete_ajax', ['id' => $sertifikasi->id_sertifikasi]) }}">
    @csrf
    @method('DELETE')
    <div class="modal-header bg-danger text-white">
        <h5 class="modal-title">Konfirmasi Hapus Sertifikasi</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <p>Apakah Anda yakin ingin menghapus sertifikasi dengan nama <strong>{{ $sertifikasi->nama_sertifikasi }}</strong> dan nomor <strong>{{ $sertifikasi->nomor_sertifikat }}</strong>?</p>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="fas fa-times me-1"></i> Batal
        </button>
        <button type="submit" class="btn btn-danger">
            <i class="fas fa-trash me-1"></i> Hapus
        </button>
    </div>
</form>
