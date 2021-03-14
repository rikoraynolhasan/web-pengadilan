<div class="table-responsive">
    <table class="table" id="transaksis-table">
        <thead>
            <tr>
                <th>Kode Peminjaman</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status</th>
                <th>Denda</th>
                <th>Anggota</th>
                <th>Buku</th>
        <!-- <th>Users</th> -->
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transaksis as $transaksi)
            <tr>
                <td>{{ $transaksi->kode_peminjaman }}</td>
                <td>{{ $transaksi->tanggal_peminjaman }}</td>
                <td>{{ $transaksi->tanggal_pengembalian }}</td>
                <td>{{ $transaksi->status }}</td>
                <td>{{ $transaksi->denda }}</td>
                <td>{{ $transaksi->anggotass_id->nama_anggota }}</td>
                <td>{{ $transaksi->bukus_id }}</td>
            <!-- <td>{{ $transaksi->users_id }}</td> -->
                <td>
                    {!! Form::open(['route' => ['transaksis.destroy', $transaksi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transaksis.show', [$transaksi->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('transaksis.edit', [$transaksi->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
