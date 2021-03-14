<style>
</style>

<!-- Nama Field -->
<form method="POST" action="{{ route('anggotas.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
<div class="form-group col-sm-6">
    {!! Form::label('nama_anggota', 'Nama:') !!}
    {!! Form::text('nama_anggota', null, ['class' => 'form-control']) !!}
</div>

<!-- Tempat Lahir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tempat_lahir', 'Tempat Lahir:') !!}
    {!! Form::text('tempat_lahir', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Lahir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir:') !!}
    {!! Form::date('tanggal_lahir', \Carbon\Carbon::now(), ['class' => 'form-control','id'=>'tanggal_lahir']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- No Hp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_hp', 'No Hp:') !!}
    {!! Form::text('no_hp', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    <th><label class="control-label">File/Foto :</label></th>
    <th><input type="file" class="uploads form-control" name="foto"></th>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('anggotas.index') }}" class="btn btn-default">Cancel</a>
</div>
