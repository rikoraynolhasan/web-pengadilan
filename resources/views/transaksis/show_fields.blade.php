<!-- Kode Peminjaman Field -->
<div class="form-group">
    {!! Form::label('kode_peminjaman', 'Kode Peminjaman:') !!}
    <p>{{ $transaksi->kode_peminjaman }}</p>
</div>

<!-- Tanggal Peminjaman Field -->
<div class="form-group">
    {!! Form::label('tanggal_peminjaman', 'Tanggal Peminjaman:') !!}
    <p>{{ $transaksi->tanggal_peminjaman }}</p>
</div>

<!-- Tanggal Pengembalian Field -->
<div class="form-group">
    {!! Form::label('tanggal_pengembalian', 'Tanggal Pengembalian:') !!}
    <p>{{ $transaksi->tanggal_pengembalian }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $transaksi->status }}</p>
</div>

<!-- Denda Field -->
<div class="form-group">
    {!! Form::label('denda', 'Denda:') !!}
    <p>{{ $transaksi->denda }}</p>
</div>

<!-- Anggotass Id Field -->
<div class="form-group">
    {!! Form::label('anggotass_id', 'Anggotass Id:') !!}
    <p>{{ $transaksi->anggotass_id }}</p>
</div>

<!-- Bukus Id Field -->
<div class="form-group">
    {!! Form::label('bukus_id', 'Bukus Id:') !!}
    <p>{{ $transaksi->bukus_id }}</p>
</div>

<!-- Users Id Field -->
<div class="form-group">
    {!! Form::label('users_id', 'Users Id:') !!}
    <p>{{ $transaksi->users_id }}</p>
</div>

