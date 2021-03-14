<style type="text/css">
   .body{
   }

   .satu {
   font-size: 10px;
   }

   .ari{
    font-size: 15px;
   }

   .tari p {
    font-size: 10px;
    margin-left: 55px;
   }
</style>

<body>
    <!-- <img src="/images/pn.png" class="img-fluit" width="60px" height="70px"> -->
    <h4 align="center">
        KARTU ANGGOTA 
        <br>PENGADILAN NEGERI PASARWAJO
    </h4>

    <table border="0"  align="center"  class="ari">
        <tr>
            <td rowspan="4" left="10">
                <img src="{{public_path('images/anggota/'.$anggota->foto)}}" class="img-fluit" width="80px" height="100px">
            </td>
            <td>Kode Anggota</td>
            <td>:</td>
            <td>KD00{{ $anggota->id }}</td>
        </tr>

        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $anggota->nama_anggota }}</td>
        </tr>

        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>{{ $anggota->tempat_lahir }}</td>
        </tr>

        <!-- <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $anggota->tanggal_lahir }}</td>
        </tr> -->

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $anggota->alamat }}</td>
        </tr>

        <!-- <tr>
            <td>No Hp</td>
            <td>:</td>
            <td>{{ $anggota->no_hp }}</td>
        </tr> -->

        <tr>
            <!--  <p class="satu" style="color:red;"> *) Jika Kartu ini hilang akan dikenakan denda sebesar Rp. 5000 untuk percetakan ulang kartu</p> -->
            <!-- <p class="satu" style="color:red;"> *) Kartu ini harap dibawa saat isi ulang saldo member</p> -->
        </tr>
    </table>

    <div class="tari">
        <br>
        <br>
        <p>1). Kartu ini adalah milik Perpustakaan Mitra Perpusnas
        <br>2). Kartu ini harus selalu dibawa saat berkunjung
        <br>3). Kartu ini tidak dapat dipinjamkan/dipindahtangankan
        <br>4). Jika hilang segeralah malapor dengan melampirkan surat keterangan hilang dari pihak berwenang
        <br>5). Bagi yang menemukan harap dikembalikan kepada 
                <br>Mitra PN Pasarwajo
    </div>
</body>

        