@extends('dashboard.templates.main')

@section('container')
    <div class="row pb-4">
        <div class="col-lg-6 mb-4">
            <form action="/dashboard/pendatang" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header bg-primary">
                        <h6 class="text-white"><i class="fas fa-plus-circle"></i> Tambah Data Penduduk Pendatang</h6>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nik" class="form-label text-danger">NIK</label>
                            <input type="text" class="form-control  @error('nik') is-invalid @enderror" name="nik" id="nik" value="{{ old('nik') }}" placeholder="Cukup isikan NIK penduduk saja" required>
                            @error('nik')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="tgl_datang" class="form-label text-danger">Tanggal Datang</label>
                            <input type="date" class="form-control @error('tgl_datang') is-invalid @enderror" name="tgl_datang" id="tgl_datang" value="{{ old('tgl_datang') }}" required>
                            @error('tgl_datang')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat_asal" class="form-label text-danger">Alamat Asal</label>
                            <textarea type="text" class="form-control @error('alamat_asal') is-invalid @enderror" name="alamat_asal" id="alamat_asal" value="{{ old('alamat_asal') }}" required></textarea>
                            @error('alamat_asal')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alamat_tujuan" class="form-label text-danger">Alamat Tujuan</label>
                            <textarea type="text" class="form-control @error('alamat_tujuan') is-invalid @enderror" name="alamat_tujuan" id="alamat_tujuan" value="{{ old('alamat_tujuan') }}" required></textarea>
                            @error('alamat_tujuan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="alasan_datang" class="form-label text-danger">Alasan Datang</label>
                            <textarea type="text" class="form-control @error('alasan_datang') is-invalid @enderror" name="alasan_datang" id="alasan_datang" value="{{ old('alasan_datang') }}" required></textarea>
                            @error('alasan_datang')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        </div>
                        <input name="tgl_pendataan" type="hidden" value="{{ $tgl_pendataan }}" class="input" size="20" maxlength="20">
                        <input name="tahun_pendataan" type="hidden" value="{{ $tahun_pendataan }}" class="input" size="10" maxlength="10">
                    </div>
                    <div class="card-footer">
                        <div class="mb-3">
                            <button type="submit" class="btn btn-sm btn-primary float-end rounded-pill"><i class="fas fa-plus"></i> Tambah Data</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
