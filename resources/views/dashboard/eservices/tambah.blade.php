@can('super_admin')
{{-- input data area --}}
<div class="col-lg-6">
    <h1>Input Data</h1>
    <form action="/dashboard/eservices" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Date -->
        <div class="input-group date" id="datepicker">
            <input type="text" class="form-control" name="tanggal" placeholder="Tanggal">
            <span class="input-group-append">
                <span class="input-group-text bg-white d-block">
                    <i class="fa fa-calendar"></i>
                </span>
            </span>
            @error('tanggal')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <!-- Nama Kegiatan -->
        <div class="input-group mb-3 mt-3">
            <input type="text" class="form-control" name="nama_kegiatan" placeholder="Nama Kegiatan" aria-label="Nama Kegiatan" width="50%">
        </div>
        <!-- Jumlah Peserta -->
        <div class="input-group mb-3 mt-3">
            <input type="text" name="jml_peserta" class="form-control" placeholder="Jumlah Peserta" aria-label="Jumlah Peserta" width="50%">
        </div>
        <!-- Jadwal Kegiatan -->
        <label for="formFile" class="form-label">Jadwal Kegiatan</label>
        <div class="input-group mb-3">
            <input type="file" name="jadwal" class="form-control" accept=".pdf">
            <label class="input-group-text"><i class="fa-solid fa-upload"></i></label>
        </div>
        <!-- Upload Data Peserta -->
        <label for="formFile" class="form-label">Upload Data Peserta</label>
        <div class="input-group mb-3">
            <input type="file" name="data_peserta" class="form-control" accept=".pdf">
            <label class="input-group-text"><i class="fa-solid fa-upload"></i></label>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
{{-- end --}}
@endcan
