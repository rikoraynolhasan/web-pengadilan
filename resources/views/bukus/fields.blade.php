<style>
    table, th, td{
        padding: 5px;
    }

    table{
        border-spacing: 15px;
    }
</style>

<!-- Kode Buku Field -->
    <div class="form-group col-sm-10">
    <table width="50%;">
        <tr>
            <th>{!! Form::label('kode_buku', 'Kode Buku:') !!}</th>
            <th>{!! Form::text('kode_buku', null, ['class' => 'form-control']) !!}</th>
        </tr>
        
        <tr>
            <th>{!! Form::label('judul_buku', 'Judul Buku:') !!}</th>
            <th>{!! Form::text('judul_buku', null, ['class' => 'form-control']) !!}</th>
        </tr>

        <tr>
            <th>{!! Form::label('pegarang', 'Pegarang:') !!}</th>
            <th>{!! Form::text('pegarang', null, ['class' => 'form-control']) !!}</th>
        </tr>
    
        <tr>
            <th>{!! Form::label('kota_terbit', 'Kota Terbit:') !!}</th>
            <th>{!! Form::text('kota_terbit', null, ['class' => 'form-control']) !!}</th>
        </tr>
    
        <tr>
            <th>{!! Form::label('tahun_terbit', 'Tahun Terbit:') !!}</th>
            <th>{!! Form::text('tahun_terbit', null, ['class' => 'form-control']) !!}</th>
        </tr>
   
        <tr>
            <th>{!! Form::label('cet_edisi_jilid', 'Cet Edisi Jilid:') !!}</th>
            <th>{!! Form::text('cet_edisi_jilid', null, ['class' => 'form-control']) !!}</th>
        </tr>
  
        <tr>
            <th>{!! Form::label('no_klas', 'No Klas:') !!}</th>
            <th>{!! Form::text('no_klas', null, ['class' => 'form-control']) !!}</th>
        </tr>
    
        <tr>
            <th>{!! Form::label('sumber_pengadaan', 'Sumber Pengadaan:') !!}</th>
            <th>{!! Form::text('sumber_pengadaan', null, ['class' => 'form-control']) !!}</th>
        </tr>
  
        <tr>
            <th>{!! Form::label('eks', 'Eks:') !!}</th>
            <th>{!! Form::text('eks', null, ['class' => 'form-control']) !!}</th>
        </tr>
    
        <tr>
            <th>{!! Form::label('rak', 'Rak:') !!}</th>
            <th>{!! Form::text('rak', null, ['class' => 'form-control']) !!}</th>
        </tr>
    
        <tr>
            <th><label class="control-label">File/Buku :</label></th>
            <th><input type="file" class="uploads form-control" name="sinopsis"></th>
        </tr>

        <tr>
            <th>{!! Form::label('tanggal_diterima', 'Tanggal Diterima:') !!}</th>
            <th>{!! Form::text('tanggal_diterima', null, ['class' => 'form-control']) !!}</th>
        </tr>

        <tr>
            <th><label class="control-label">File/Foto :</label></th>
            <th><input type="file" class="uploads form-control" name="foto"></th>
        </tr>
    </table>
    </div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bukus.index') }}" class="btn btn-default">Cancel</a>
</div>
