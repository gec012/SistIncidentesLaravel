@extends('home')

@section('content')
<div class="container">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2 align="center">Editar Tipo</h2>
</div>

<a class="btn btn-dark bm-2  float-right" href="{{ route('tipo.index') }}">Volver</a>

</div>
</div>

@if (count($errors) > 0)
<div class="alert alert-danger">
<strong>Whoops!</strong> There were some problems with your
input.
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif
<div class="card">
<div class="card-body"  style="background-color:#bdbdbd ;">
{!! Form::model($tipo,[ 'method'=> 'PATCH','route'=>['tipo.update', $tipo->id]]) !!}

@include('tipo.form')
{!! Form::close() !!}
</div>
</div>
</div>
@endsection
