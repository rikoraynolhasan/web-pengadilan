<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{{ $anggota->nama_anggota }}</p>
</div>

<!-- Tempat Lahir Field -->
<div class="form-group">
    {!! Form::label('tempat_lahir', 'Tempat Lahir:') !!}
    <p>{{ $anggota->tempat_lahir }}</p>
</div>

<!-- Tanggal Lahir Field -->
<div class="form-group">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir:') !!}
    <p>{{ $anggota->tanggal_lahir }}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $anggota->alamat }}</p>
</div>

<!-- No Hp Field -->
<div class="form-group">
    {!! Form::label('no_hp', 'No Hp:') !!}
    <p>{{ $anggota->no_hp }}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p>{{ $anggota->foto }}</p>
    <img width="150px" height="200px" @if($data->foto) src="{{ asset('images/anggota/'.$data->foto) }}" @endif />
</div>



