<form id="formEditHKI" method="POST" action="{{ route('portofolio.hki.update_ajax', ['id' => $hki->id_hki]) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="modal-header bg-primary text-white">
        <h5 class="modal-title">Edit HKI</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        @if ($role === 'ADM')
            <div class="mb-3">
                <label for="nidn" class="form-label">NIDN</label>
                <input type="text" class="form-control" id="nidn" name="nidn"
                    value="{{ optional($hki->dosen->profile)->nidn }}" required>
                <div class="invalid-feedback" id="error_nidn"></div>
            </div>
        @endif

        <div class="mb-3">
            <label for="judul" class="form-label">Judul HKI</label>
            <input type="text" class="form-control" id="judul" name="judul"
                value="{{ $hki->judul }}" required>
            <div class="invalid-feedback" id="error_judul"></div>
        </div>

        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="number" class="form-control" id="tahun" name="tahun"
                value="{{ $hki->tahun }}" required>
            <div class="invalid-feedback" id="error_tahun"></div>
        </div>

        <div class="mb-3">
            <label for="skema" class="form-label">Skema HKI</label>
            <input type="text" class="form-control" id="skema" name="skema"
                value="{{ $hki->skema }}" required>
            <div class="invalid-feedback" id="error_skema"></div>
        </div>

        <div class="mb-3">
            <label for="nomor" class="form-label">Nomor HKI</label>
            <input type="text" class="form-control" id="nomor" name="nomor"
                value="{{ $hki->nomor }}" required>
            <div class="invalid-feedback" id="error_nomor"></div>
        </div>

        <div class="mb-3">
            <label for="melibatkan_mahasiswa_s2" class="form-label">Melibatkan Mahasiswa S2</label>
            <select class="form-control" id="melibatkan_mahasiswa_s2" name="melibatkan_mahasiswa_s2" required>
                <option value="1" {{ $hki->melibatkan_mahasiswa_s2 == 1 ? 'selected' : '' }}>Ya</option>
                <option value="0" {{ $hki->melibatkan_mahasiswa_s2 == 0 ? 'selected' : '' }}>Tidak</option>
            </select>
            <div class="invalid-feedback" id="error_melibatkan_mahasiswa_s2"></div>
        </div>

        <div class="mb-3">
            <label for="bukti" class="form-label">Bukti (PDF, JPG, PNG)</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <label for="bukti" class="btn btn-info mb-0">Choose File</label>
                </div>
                <input type="file" class="form-control d-none" id="bukti" name="bukti"
                    accept=".pdf,.jpg,.jpeg,.png"
                    onchange="document.getElementById('bukti_text').value = this.files[0]?.name || '{{ $hki->bukti ? $hki->bukti : 'No file chosen' }}'">
                <input type="text" class="form-control" id="bukti_text"
                    value="{{ $hki->bukti ? $hki->bukti : 'No file chosen' }}" readonly>
                <div id="error_bukti" class="invalid-feedback"></div>
            </div>
            @if($hki->bukti)
                <small class="text-muted">File saat ini: <a href="{{ url('storage/portofolio/hki/' . $hki->bukti) }}" target="_blank">{{ $hki->bukti }}</a></small>
            @endif
        </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-times me-1"></i> Batal</button>
        <button type="submit" class="btn btn-primary"><i class="fas fa-save me-1"></i> Simpan</button>
    </div>
</form>
