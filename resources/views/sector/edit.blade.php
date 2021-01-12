@extends('home')

@section('content')
<div class="container">
<div class="row">
<div class="col-lg-12 margin-tb">
<div class="pull-left">
<h2 align="center">Editar sector</h2>
</div>

<a class="btn btn-dark mb-2 float-right" href="{{ route('sector.index') }}">Volver</a>

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
<div class="card-body" style="background-color:#bdbdbd ;">
{!! Form::model($sector,[ 'method'=> 'PATCH','route'=>['sector.update', $sector->id]]) !!}

@include('sector.form')
{!! Form::close() !!}
</div>
</div>
</div>
@endsection
