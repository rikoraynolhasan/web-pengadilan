<div class="table-responsive">
    <table class="table" id="anggotas-table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No Hp</th>
                <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($anggotas as $anggota)
            <tr>
                <td>{{ $anggota->nama_anggota }}</td>
                <td>{{ $anggota->tempat_lahir }}</td>
                <td>{{ $anggota->tanggal_lahir }}</td>
                <td>{{ $anggota->alamat }}</td>
                <td>{{ $anggota->no_hp }}</td>
                <td>
                    <img width="50px" height="70px"src="{{ asset('images/anggota/'.$anggota->foto) }}"/>
                    <!-- {{ $anggota->foto }}  -->  
                </td>

                <td>
                    {!! Form::open(['route' => ['anggotas.destroy', $anggota->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('anggotas.show', [$anggota->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('anggotas.edit', [$anggota->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{{action('AnggotaController@pdf', $anggota->id)}}" target="_blank" class='btn btn-default btn-xs'> <i class="fa fa-print"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <br>
    <h4 align="center">{{ $anggotas->links() }}</h4>
</div>
