@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('anggotas.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
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
                    {!! Form::open(['route' => 'anggotas.store']) !!}

                        @include('anggotas.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
