@extends('home')
@section('content')

    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
            <div class="pull-left">
                <h1 align="center"> Sectores  </h1>
            </div>

            <hr>
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="float-right mb-2">
                <a class="btn btn-lg btn-dark " data-toggle="tooltip" title="Agregar Sector"style="background-color:#388e3c ;" href ="{{ route('sector.create') }}"> Agregar sector <i class="fas fa-plus-circle"></i> </a>
            </div>
          
        </div> 
    </div>    
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
            <div class="table-responsive">
                <table id="myTable"   class="table  table-bordered table-striped table-hover table-condesed">
                        <tr  style="background-color:#37474f;">
                            <th >Nombre</th>
                            <th > Descripcion</th>
                            <th >Estado</th>
                            <th  width="280px">Acciones</th>
                        </tr>
                        @foreach ($sectores as $sector)
                            <tr style="background-color: rgba(245, 245, 245, 0.4); ">
                                <td style="border-color:grey;">{{ $sector->nombre}}</td>
                                        
                                <td style="border-color:grey;">{{ $sector->descripcion}}</td>
                                @if  ($sector->estado == true)          
                                    <td style="border-color:grey; background-color:#388e3c;">Activo</td>
                                    <td  style="border-color:grey;">
                                    <a class="btn btn-dark btn-dm" data-toggle="tooltip" style="background-color:#9e9d24;" href="{{ route('sector.edit',$sector->id) }}" title="Editar"><i class="fas fa-edit"></i></a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['sector.destroy',$sector->id],'style'=>'display:inline']) !!}
                                    {{ Form::button('<i class="fa fa-thumbs-down"></i>', ['class' => 'btn btn-dark btn-dm','data-toggle'=>"tooltip",'style'=>'background-color:#d32f2f;','title'=>'Desabilitar' ,'type' => 'submit']) }}
                                    {!! Form::close() !!}

                                </td>
                                @else 
                                <td style="border-color:grey; background-color:#c62828;">Inactivo</td>
                                <td  style="border-color:grey;">
                                    <a class="btn btn-dark btn-dm" data-toggle="tooltip" style="background-color:#9e9d24;" href="{{ route('sector.edit',$sector->id) }}" title="Editar"><i class="fas fa-edit"></i></a>
                                    {!! Form::open(['method' => 'DELETE','route' => ['sector.destroy',$sector->id],'style'=>'display:inline']) !!}
                                    
                                    {{ Form::button('<i class="fa fa-thumbs-up"></i>', ['class' => 'btn btn-dark btn-dm','data-toggle'=>"tooltip",'style'=>'background-color:#388e3c;','title'=>'Habilitar' ,'type' => 'submit']) }}

                                    {!! Form::close() !!}

                                </td>
                                @endif        
                               
                            </tr>
                        @endforeach
                </table>
            </div>
        </div>
    </div> 
    {{$sectores->render()}}

    <script type="text/javascript">
        function actualizar(){location.reload(true);}
      //Función para actualizar cada 40 segundos(40000 milisegundos)
        setInterval("actualizar()",60000);
      </script>
@endsection

  