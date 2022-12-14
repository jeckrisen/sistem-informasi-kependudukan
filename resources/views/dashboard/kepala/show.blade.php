@extends('dashboard.templates.main')

@section('container')
<div class="row mb-3 bg-white py-3">
    @if(session('success'))
        <div class="alert alert-success mt-3" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="col-lg-12 text-center">
        <a href="/kepala/print_pdf/{{ $data[0]->nomor_kk }}" title="Print Data Anggota Keluarga"><i class="fas fa-print"></i> Print PDF</a>
        <h3 class="mt-3">DATA ANGGOTA KELUARGA</h3>
        <h6>NOMOR: {{ $data[0]->nomor_kk }} </h6>
    </div>
    <div class="mt-2 border-top"></div>
    <div class="col-lg-4 mt-3" style="font-size: 14px">
        <table>
            <tr>
                <td>Nama Kepala Keluarga</td>
                <td>: &nbsp;&nbsp;</td>
                @if($data[0]->relasi == 'Suami')
                    <td>{{ $data[0]->nama_lengkap }}</td>
                @endif
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>{{ $data[0]->nama_lingkungan }}</td>
            </tr>
            <tr>
                <td>RT / RW</td>
                <td>:</td>
                <td>{{ $data[0]->kode_rt }} / {{ $data[0]->kode_rw }}</td>
            </tr>
            <tr>
                <td>Kode Pos</td>
                <td>:</td>
                <td>85817</td>
            </tr>
            <tr>
                <td>No Telpon</td>
                <td>:</td>
                <td>{{ $data[0]->no_telpon }}</td>
            </tr>
        </table>
    </div>
    <div class="col-lg-8 mt-3" style="font-size: 14px">
            <table>
                <tr>
                    <td>Desa Kelurahan</td>
                    <td>: &nbsp;&nbsp;</td>
                    <td>{{ $data[0]->nama_kelurahan }}</td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>:</td>
                    <td>{{ $data[0]->nama_kecamatan }}</td>
                </tr>
                <tr>
                    <td>Kabupaten</td>
                    <td>:</td>
                    <td>Alor</td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td>:</td>
                    <td>Nusa Tenggara Timur</td>
                </tr>
            </table>
    </div>

    <div class="col-lg-12 mt-3">
        <table class="table bg-white table-bordered" style="font-size: 14px">
            <thead class="text-white" style="background: #191c1f">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIK</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Relasi</th>
                    <th scope="col">Jender</th>
                    <th scope="col">Status Nikah</th>
                    <th scope="col">Agama</th>
                    <th scope="col">Pendidikan</th>
                    <th scope="col">Pekerjaan</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Keterangan</th>
                    @can('admin')
                    <th scope="col" class="text-center">Aksi</th>
                    @endcan
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>{{ $item->nama_lengkap }}</td>
                    <td>{{ $item->relasi }}</td>
                    <td>{{ $item->jender }}</td>
                    <td>{{ $item->status_nikah }}</td>
                    <td>{{ $item->agama }}</td>
                    <td>{{ $item->pendidikan }}</td>
                    <td>{{ $item->pekerjaan }}</td>
                    <td>{{ date("d F Y", strtotime($item->tanggal_lahir)) }}</td>
                    @if(!empty($item->id_kematian))
                        <td><p class="bg-danger text-white text-center">Meninggal</p></td>
                    @elseif(!empty($item->id_pindah))
                        <td><p class="bg-info text-white text-center">Pindah</p></td>
                    @else
                        <td class="text-center">-</td>
                    @endif

                    @can('admin')
                    <td class="text-center">
                        <a href="/dashboard/penduduk/{{ $item->nik }}/edit" class="badge bg-warning fs-6 mb-1"><i class="far fa-edit"></i></a>
                        <form action="/dashboard/penduduk/{{ $item->nik }}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="badge bg-danger fs-6 text-white border-0 delete hapus-confirm" onclick="return confirm('Anda akan menghapus {{ $item->nama_lengkap }}, yakin?')"><i class="fas fa-times-circle"></i></button>
                        </form>
                    </td>
                    @endcan
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>



@endsection