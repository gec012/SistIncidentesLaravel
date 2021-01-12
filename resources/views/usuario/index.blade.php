
@extends('home')
@section('content')
    <div class="row ">
      <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
     <div class="justify-content-center">
                 <h1 align="center">    Usuarios  </h1>
             </div>
            <div   class="float-right">
      <a href="{{route('usuario.create')}}" class="btn btn-lg btn-dark mt-4 " style="background-color:#388e3c ;"> Nuevo Usuario <i class="fas fa-plus-circle"></i></a>
      </div>
      </div>
</div>

@if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
 @endif
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="table-responsive">
      <table class="table table-striped table-bordered table-condensed table-hover  ">
        <thead style="background-color:#37474f;">
          
            <th>Nombre</th>
            <th>Email</th>
            <th>Estado</th>
            <th>Rol</th>
            <th>Acciones</th>
        
          
        </thead> 
        <tbody>
            @foreach ($users as $usuario)
            <tr style="background-color: rgba(245, 245, 245, 0.4); ">
                <td style="border-color:grey;">{{$usuario->name}}</td>
                <td style="border-color:grey;">{{$usuario->email}}</td>
                @if($usuario->estado)
                    <td style="border-color:grey;background-color:#388e3c;">Activo</td>
                @else
                   <td style="border-color:grey; background-color:#c62828;">Inactivo</td>
                @endif    
                <td style="border-color:grey;">{{$usuario->roles->implode('name',',')}}</td>

                <td style="border-color:grey;">
                   
                    <a class="btn  btn-dark btn-dm" style="background-color:#9e9d24;" href="{{route('usuario.edit',$usuario->id)}}" title="Editar"><i class="fas fa-edit"></i></a>

                    @if($usuario->estado)
                    <a href="" data-target="#modal-delete-{{$usuario->id}}" data-toggle="modal"><button class="btn btn-dark btn-dm" style=" background-color:#d32f2f;" title="Desabilitar" ><i class="fas fa-thumbs-down"></i></button></a>

                    

                    @else
                    <a href="" data-target="#modal-delete-{{$usuario->id}}" data-toggle="modal"><button class="btn  btn-dark btn-dm" style=" background-color:#388e3c;" title="Habilitar" ><i class="fas fa-thumbs-up"></i></button></a>

                    @endif
                    @include('usuario.modal')


                </td>
            </tr>
                
          

            @endforeach
            <script type="text/javascript">
              function actualizar(){location.reload(true);}
            //Función para actualizar cada 40 segundos(40000 milisegundos)
              setInterval("actualizar()",60000);
            </script>
            @endsection            
          