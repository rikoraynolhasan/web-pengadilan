<div class="table-responsive">
    <table class="table" id="bukus-table">
        <thead>
            <tr>
                <th>Kode Buku</th>
                <th>Judul Buku</th>
                <th>Pegarang</th>
                <th>Kota Terbit</th>
                <th>Tahun Terbit</th>
                <th>Cet Edisi Jilid</th>
                <th>No Klas</th>
                <th>Sumber Pengadaan</th>
                <th>Eks</th>
                <th>Rak</th>
                <th>Katalog Buku</th>
                <th>Tanggal Diterima</th>
                <th>Foto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bukus as $buku)
            <tr>
                <td>{{ $buku->kode_buku }}</td>
                <td>{{ $buku->judul_buku }}</td>
                <td>{{ $buku->pegarang }}</td>
                <td>{{ $buku->kota_terbit }}</td>
                <td>{{ $buku->tahun_terbit }}</td>
                <td>{{ $buku->cet_edisi_jilid }}</td>
                <td>{{ $buku->no_klas }}</td>
                <td>{{ $buku->sumber_pengadaan }}</td>
                <td>{{ $buku->eks }}</td>
                <td>{{ $buku->rak }}</td>
                <td>
                    <a href="{{ asset('images/pdf/'.$buku->sipnosis) }}">{{ $buku->sipnosis }}</a>
                <!-- <embed src="{{ asset('images/pdf/'.$buku->sipnosis) }}" width="50px" height="70px" /> -->
                <!-- <iframe src="{{ asset('images/pdf/'.$buku->sipnosis) }}" style="width: 100%;height: 100%;border: none;"></iframe> -->
                </td>
                <td>{{ $buku->tanggal_diterima }}</td>
                <td>
                <img width="50px" height="70px"src="{{ asset('images/buku/'.$buku->foto) }}"/>
                </td>
                
                <td>
                    {!! Form::open(['route' => ['bukus.destroy', $buku->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bukus.show', [$buku->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('bukus.edit', [$buku->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
