<div class="modal-header bg-primary text-white">
    <h5 class="modal-title">Import Data Penelitian</h5>
    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
</div>
<form id="form-import-penelitian" action="{{ route('portofolio.penelitian.import_ajax') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    <div class="modal-body">
        <div class="alert alert-info">
            <i class="fas fa-info-circle"></i> Pastikan file Excel mengikuti format template. Perhatikan bahwa kolom
            kolom <b>Peran</b> harus mengikuti pilihan berikut:
            <div class="mt-2">
                <strong>Peran:</strong>
                <ul class="mb-1">
                    <li>Ketua</li>
                    <li>Anggota</li>
                </ul>
            </div>
            Dan kolom <b>Melibatkan Mahasiswa S2</b> hanya boleh diisi dengan 'Ya' atau 'Tidak'.
        </div>

        <div class="mb-3">
            <label class="form-label">Download Template</label>
            <div>
                <a href="{{ asset('template/template_p_penelitian.xlsx') }}" class="btn btn-success btn-sm" download>
                    <i class="fas fa-file-excel me-1"></i> Download Template
                </a>
            </div>
            <small class="text-muted">Format: .xlsx (Excel)</small>
        </div>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label for="file_p_penelitian" class="btn btn-info">Choose File</label>
            </div>
            <input type="file" class="form-control d-none" id="file_p_penelitian" name="file_p_penelitian" required
                accept=".xlsx,.xls"
                onchange="document.getElementById('file_p_penelitian_text').value = this.files[0]?.name || 'No file chosen'">
            <input type="text" class="form-control" id="file_p_penelitian_text" placeholder="No file chosen"
                readonly>
            <div id="error-file_p_penelitian" class="invalid-feedback"></div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
            <i class="fas fa-times me-1"></i> Batal
        </button>
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-upload me-1"></i> Upload
        </button>
    </div>
</form>
