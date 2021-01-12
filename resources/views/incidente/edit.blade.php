@extends('home')

@section('content')
<div class="container">
<div class="row">
<div class="col-lg-12 ">
<div class="pull-left">
<h2 align="center">Editar Incidente</h2>
</div>
@if ($error = Session::get('error'))
                <div class="alert alert-danger">
                    <p>{{ $error }}</p>
                </div>
            @endif

<a class="btn btn-dark mb-2  float-right" href="{{ route('incidente.index') }}">Volver</a>

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
<div class="card-body" style="background-color:#bdbdbd ;" >

{!! Form::model($incidente,[ 'method'=> 'PATCH', 'files' => true,'route'=>['incidente.update', $incidente->id]]) !!}
@include('incidente.formedit')
{!! Form::close() !!}
</div>
</div>
</div>
@endsection
