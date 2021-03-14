<style>
    table, td, th {
        padding: 5px;
    }

    table {
        border-spacing: 15px; 
    }
</style>

<!-- Kode Peminjaman Field -->
<table style="width: 50%;">
<div class="col-sm-6">

    <tr>
        <th>{!! Form::label('kode_peminjaman', 'Kode Peminjaman') !!}</th>
        <th>{!! Form::text('kode_peminjaman', null, ['class' => 'form-control']) !!}</th>
    </tr>
</div>

<!-- Tanggal Peminjaman Field -->
<div class="col-sm-6">
    <tr> 
        <th>{!! Form::label('tanggal_peminjaman', 'Tanggal Peminjaman') !!}</th>
        <th>{!! Form::date('tanggal_peminjaman', \Carbon\Carbon::now(), ['class' => 'form-control','id'=>'tanggal']) !!}</th>
    </tr>
</div>

<!-- Tanggal Pengembalian Field -->
<div class="col-sm-6">
    <tr>
        <th>{!! Form::label('tanggal_pengembalian', 'Tanggal Pengembalian') !!}</th>
        <th>{!! Form::date('tanggal_pengembalian', \Carbon\Carbon::now(), ['class' => 'form-control','id'=>'tanggal']) !!}</th>
    </tr>
</div>

<!-- Status Field -->
<div class="col-sm-6">
    <tr>
        <th>{!! Form::label('status', 'Status') !!} </th>
        <th>{!! Form::text('status', null, ['class' => 'form-control']) !!}</th>
    </tr>
</div>

<!-- Denda Field -->
<div class="col-sm-6">
    <tr>
        <th>{!! Form::label('denda', 'Denda') !!}</th>
        <th>{!! Form::text('denda', null, ['class' => 'form-control']) !!} </th>
    </tr>
</div>

<!-- Anggotass Id Field -->
<div class="col-sm-6">
    <tr>
        <th>{!! Form::label('anggotass_id', 'Anggota') !!}</th>
        <th>{!! Form::select('anggotass_id', $pekk, null, ['class' => 'form-control']) !!}</th>
    </tr>
</div>

<!-- Bukus Id Field -->
<div class="col-sm-6">
    <tr>
        <th>{!! Form::label('bukus_id', 'Buku') !!}</th>
        <th>{!! Form::select('bukus_id', $pnpp, null, ['class' => 'form-control']) !!}</th>
    </tr>
</div>

<!-- Users Id Field -->
<div class="col-sm-6">
    <tr>
        <th>{!! Form::label('users_id', 'User') !!}</th>
        <th>{!! Form::number('users_id', null, ['class' => 'form-control']) !!}</th>
    </tr>
</div>

</table>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Simpan', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('transaksis.index') }}" class="btn btn-default">Kembali</a>
</div>


