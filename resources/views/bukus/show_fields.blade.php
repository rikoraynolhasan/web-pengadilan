<!-- Kode Buku Field -->
<div class="form-group">
    {!! Form::label('kode_buku', 'Kode Buku:') !!}
    <p>{{ $buku->kode_buku }}</p>
</div>

<!-- Judul Buku Field -->
<div class="form-group">
    {!! Form::label('judul_buku', 'Judul Buku:') !!}
    <p>{{ $buku->judul_buku }}</p>
</div>

<!-- Pegarang Field -->
<div class="form-group">
    {!! Form::label('pegarang', 'Pegarang:') !!}
    <p>{{ $buku->pegarang }}</p>
</div>

<!-- Kota Terbit Field -->
<div class="form-group">
    {!! Form::label('kota_terbit', 'Kota Terbit:') !!}
    <p>{{ $buku->kota_terbit }}</p>
</div>

<!-- Tahun Terbit Field -->
<div class="form-group">
    {!! Form::label('tahun_terbit', 'Tahun Terbit:') !!}
    <p>{{ $buku->tahun_terbit }}</p>
</div>

<!-- Cet Edisi Jilid Field -->
<div class="form-group">
    {!! Form::label('cet_edisi_jilid', 'Cet Edisi Jilid:') !!}
    <p>{{ $buku->cet_edisi_jilid }}</p>
</div>

<!-- No Klas Field -->
<div class="form-group">
    {!! Form::label('no_klas', 'No Klas:') !!}
    <p>{{ $buku->no_klas }}</p>
</div>

<!-- Sumber Pengadaan Field -->
<div class="form-group">
    {!! Form::label('sumber_pengadaan', 'Sumber Pengadaan:') !!}
    <p>{{ $buku->sumber_pengadaan }}</p>
</div>

<!-- Eks Field -->
<div class="form-group">
    {!! Form::label('eks', 'Eks:') !!}
    <p>{{ $buku->eks }}</p>
</div>

<!-- Rak Field -->
<div class="form-group">
    {!! Form::label('rak', 'Rak:') !!}
    <p>{{ $buku->rak }}</p>
</div>

<!-- Sipnosis Field -->
<div class="form-group">
    {!! Form::label('sipnosis', 'Sipnosis:') !!}
    <p>{{ $buku->sipnosis }}</p>
</div>

<div class="form-group">
    {!! Form::label('tanggal_diterima', 'Tanggal Diterima:') !!}
    <p>{{ $buku->tanggal_diterima }}</p>
</div>

<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p>{{ $buku->foto }}</p>
    <img width="150px" height="200px" @if($data->foto) src="{{ assets('images/buku/'.$data->foto) }}" @endif />
</div>

