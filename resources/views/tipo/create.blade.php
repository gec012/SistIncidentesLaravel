@extends('home')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 align="center">Nuevo Tipo</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-dark float-right" href="{{ route('tipo.index') }}">Volver</a>
        </div>
    </div>
</div>
<br>
@if (count($errors) < 0)
    <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                @endforeach
            </ul>
    </div>
@endif
<div class="card">
<div class="card-body"  style="background-color:#bdbdbd ;">
{!! Form::open( ['method' => 'POST','route' => ['tipo.store']]) !!}

            @include('tipo.form')
           

{!! Form::close() !!}
</div>
</div>
@endsection