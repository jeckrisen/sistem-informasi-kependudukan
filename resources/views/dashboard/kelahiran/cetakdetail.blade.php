<div class="row">
    <div class="col-md-12">
        <div class="row">
            <img src="assets/img/logo.jpg" alt="" style="position: absolute; width: 65px; height: auto;">
            <div class="col-md-12">
                <h3 style="padding: 0; margin: 0; text-align: center;">PEMERINTAH KABUPATEN ALOR<br> KECAMATAN TELUK MUTIARA<br> PEMERINTAH DESA WELAI TIMUR</h3>
                <h4 style="padding: 0; margin: 0; text-align: center;">Jalan Eltari Nomor 02 Teluk Mutiara</h4>
                <div style="margin-top: 9px;"></div>
                <div style="border-bottom: 1px solid black; margin-bottom: 3px;"></div>
                <div style="border-bottom: 1px solid black;"></div>
            </div>

        <table style="font-size: 16px; padding-top: 20px;">
            <tr style="font-weight: bold;">
                <td>Nomor</td>
                <td>&nbsp;&nbsp;:</td>
                <td>{{ $det_lahir[0]->id_kelahiran }}</td>
            </tr>
            <tr>
                <td>Pemerintahan Kab/Kota</td>
                <td>&nbsp;&nbsp;:</td>
                <td>Kalabahi</td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>&nbsp;&nbsp;:</td>
                <td>Teluk Mutiara</td>
            </tr>
            <tr>
                <td>Desa/Kelurahan</td>
                <td>&nbsp;&nbsp;:</td>
                <td>Welai Timur</td>
            </tr>
        </table>
        
        <h4 style="text-align: center; padding-top: 10px; font-weight: none;">UNTUK YANG BERSANGKUTAN<br><div style="font-weight: bold;">SURAT KETERANGAN KELAHIRAN</div></h4>
        <div style="text-align: center; margin-top: 6px;">No. Akta : {{ $det_lahir[0]->no_akte }}</div>

        <h4 style="font-weight: bold;">Yang bertanda tangan dibawah ini menerangkan bahwa :</h4>
        <table style="padding: 0; margin-left: 12px;">
            <tr>
                <td>Hari</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td>{{ $det_lahir[0]->hari_lahir }}</td>
            </tr>
            <tr>
                <td>Tempat & Tanggal Lahir</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td>{{ $det_lahir[0]->TTL }}</td>
            </tr>
        </table>
        <h4 style="font-weight: bold;">Telah lahir seorang bayi :</h4>
        <table style="padding: 0; margin-left: 12px;">
            <tr>
                <td>Nama</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td>{{ $det_lahir[0]->nama }}</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: </td>
                <td>{{ $det_lahir[0]->jender }}</td>
            </tr>
            <tr>
                <td>Berat Badan</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td>{{ $det_lahir[0]->berat }}</td>
            </tr>
        </table>
        <h4 style="font-weight: bold;">Dari orang tua :</h4>
        <table style="padding: 0; margin-left: 12px;">
            <tr>
                <td>Nama Ayah</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td>{{ $det_lahir[0]->nama_ayah }}</td>
            </tr>
            <tr>
                <td>Nama Ibu</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td>{{ $det_lahir[0]->nama_ibu }}</td>
            </tr>
            <tr>
                <td>Lingkungan</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</td>
                <td>{{ $det_lahir[0]->lingkungan }}</td>
            </tr>
        </table>
        <h4>Surat keterangan ini dibuat atas dasar yang sebenarnya.</h4>

        @php
            $tanggal = gmdate("d-m-Y",time());
        @endphp
        
        <div class="col-md-12" style="margin-left: 75%; font-size: 16px; padding-top: 30px">
            <div>Kalabahi, {{ $tanggal }}</div>
            <div style="padding-left: 30px">Kepala Desa</div><br><br><br>
            <div>Johanis Dolu, S.Psi.</div>
        </div>
    </div>
</div>