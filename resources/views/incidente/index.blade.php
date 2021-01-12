@extends('home')
@section('content')      


    
    <div class="row" >
        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
            <div class="pull-left">
                <h1 align="center">  Incidentes  </h1>
            </div>
   
            @if(Auth::user()->rol <> 3)
                @include('incidente.search')
            @endif
                          
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($tam <> 0)
            
                <div class="alert alert-info">
                    <strong>Se generaron {{ $tam }} nuevos incidentes</strong>
                </div>
                @endif
            <div class="ml-auto pb-2">
                    <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
                <a class="btn btn-lg  btn-dark " style="background-color:#388e3c ;" href ="{{ route('incidente.create') }}" data-toggle="tooltip" title="Registrar incidente"> Registrar Incidente <i class="fas fa-plus-circle"></i></a>
            </div>
            </div>
        </div> 
    </div>
    
       
    <div class="container">

            <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
                        <div class="table-responsive">
                            <table   class="table  table-bordered table-striped table-hover  table-condesed">
                                    <tr   style="background-color:#37474f ;">
                                        <th >Nombre</th>
                                        <th >Estado</th>
                                        <th >Caracter</th>
                                        <th >Creado</th>
                                        
                                        <th >Usuario </th>
                                        @if(Auth::user()->rol<>3) 
                                        <th>Sector del usuario</th>
                                        @endif
                                       
                                        <th  width="280px">Acciones</th>
                                      
                                    </tr>
                                    @foreach ($incidentes as $inci)
                                      
                                      
                                        <tr  style="background-color: rgba(245, 245, 245, 0.4); " >
                                            <td style="border-color:grey;">{{ $inci->nombre}}</td>
                                            @if  ($inci->estado == 'Finalizado')      
                                                <td style="border-color:grey; background-color:#388e3c;">{{ $inci->estado}}</td>
                                            
                                            @elseif($inci->estado == 'Pendiente')
                                                    <td style="border-color:grey; background-color:#c62828;">{{ $inci->estado}}</td>
                                                
                                                    @else <td style="border-color:grey; background-color:#c0ca33;">{{ $inci->estado}}</td>
                                             
                                             
                                            @endif
            
                                            <td style="border-color:grey;">{{ $inci->caracter}}</td>
                                            <td style="border-color:grey"> {{ \Carbon\Carbon::parse($inci->created_at)->format('d/m/Y H:m:s')}}</td>
                                            
                                            <td style="border-color:grey;">{{ $inci->usuario}}</td>
                                          @if(Auth::user()->rol<>3)  
                                           @foreach ($usuarios as $usuario )
                                               @if($inci->idusuario ==$usuario->id)  
                                             
                                            <td style="border-color:grey;">{{ $usuario->sectores->implode('nombre',",\n") }}</td>
                                                @endif
                                          @endforeach
                                          @endif
                                            <td  style="border-color:grey;">
                                                
                                                    <a class="btn btn-dark btn-dm" style="background-color:#3949ab;" href="{{ route('incidente.show',$inci->id) }}" data-toggle="tooltip" title="Ver"><i class="fas fa-eye"></i></a>
                                                    
                                                
                                            @if($inci->estado == 'En Proceso')
                                                @foreach($details as $det)
                                                    @if($det->incidente_id == $inci->id and $det->estado == 'Recibido')
                                                          
                                                            <a class="btn  btn-dark btn-dm" style="background-color:#9e9d24 ;" href="{{ route('incidente.edit',$inci->id) }}" data-toggle="tooltip" title="Editar"><i class="fas fa-edit"></i></a>
                                                       
                                                    @endif
                                                @endforeach 
                                            @endif
                                                
            
                                            
                                            
                                            </td>
                                        </tr>
                                       
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div> 
                
    </div>
    
  
   
@endsection

  