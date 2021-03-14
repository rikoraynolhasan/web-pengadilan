@extends('layouts.app')

@section('content')
<form action="{{ route('anggotas.update', $data->id) }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('put') }}
    <section class="content-header">
        <h1>
            Anggota
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($anggota, ['route' => ['anggotas.update', $anggota->id], 'method' => 'patch']) !!}

                        @include('anggotas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection