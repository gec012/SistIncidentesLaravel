@extends('home')
@section('content')

        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h1 align="center" class="mt-4">Incidente</h1>
                </div>
                <div class="pull-right">
                    <a class="btn  btn-dark " href="{{ route('incidente.index') }}"> Volver </a>
                </div>
            </div>
        </div>


        <div class=" col-xs-12 col-sm-12 col-md-12">
                <div class="card-body mt-4" style="background-color:#bdbdbd ;">
         
        
                
                    <div class="form-group">
                        <strong>Creado:</strong>
                            {{ \Carbon\Carbon::parse($incidente->created_at)->format('d/m/Y H:m:s')}}
                    </div>
                
                
            
            
                @if($incidente->created_at <> $incidente->updated_at)
                    
                        <div class="form-group">
                            <strong>Modificado:</strong>
                                {{ \Carbon\Carbon::parse($incidente->updated_at)->format('d/m/Y H:m:s')}}
                        </div>
                    
                @endif
                
                        <div class="form-group">
                            <strong>Nombre:</strong>
                        {{ $incidente->nombre}}
                    </div>
                
              
                        <div class="form-group">
                        <strong>Caracter:</strong>
                        {{ $incidente->caracter}}
                    </div>
              
                
                        <div class="form-group">
                        <strong>Estado:</strong>
                        {{ $incidente->estado}}
                    </div>
                
                
                        <div class="form-group">
                        <strong>Tipo de Incidente:</strong>
                        {{ $tipos->nombre}}
                    </div>
              
               
                        <div class="form-group">
                        <strong>Generado por:</strong>
                        {{ $reporter->name}}
                    </div>
                
                @if($resolver <> null)
                

                    
                            <div class="form-group">
                            <strong>Resuleto por:</strong>
                            {{ $resolver->name}}
                        </div>
                  

                    
                            <div class="form-group">
                            <strong>Fecha de Resolucion :</strong>
                            {{ \Carbon\Carbon::parse($incidente->finalizado)->format('d/m/Y H:m:s')}} 
                          
                          </div>
                    
                @endif
               
                        <div class="form-group">
                        <strong>Descripcion:</strong>
                        {{ $incidente->detalle}}
                        </div>
                
                
               
                
                @if($incidente->imagen <> null)
               
                        <div class="form-group">
                                <strong>Imagen :</strong>
                            <a href="../{{$incidente->imagen}}"  target="_blank">
                            <img src="../{{$incidente->imagen}}"  height="100px" width="100px"  >
                        </a>
                        
                        </div>
                @endif
              
               
               
                <a href="" data-target="#modal-show" data-toggle="modal"><button class="btn  btn-dark btn-lg" style=" background-color:#388e3c;" title="mostrar" >Detalles</button></a>

                @include('incidente.modal')
           </div>
           </div>
        

@endsection 