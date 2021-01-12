@extends('home')
  @section('content')

  
             <h1>Editar Usuarios</h1>
             <div class="pull-right  row">
                      <a class="btn btn-dark   float-right" href="{{ route('usuario.index') }}">Volver</a>
                  </div>
                    <div class="card-body mt-4" style="background-color:#bdbdbd ;">
                       <form action="{{ route('usuario.update',$usuario->id)}}" method="POST">
                          @csrf
                          @method('PUT')
                        <div class="form-group">
                               <label for="name">Nombre</label>
                               <input type="text" name="name" required class="form-control" value="{{$usuario->name}}">
                           </div>
                           <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" required class="form-control" value="{{$usuario->email}}">
                            </div>
                            <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password"  class="form-control">
                                </div>
                            <div class="form-group">
                                        <label for="rol">Rol</label>
                                        <select name="rol" id="" class="form-control">
                                            @foreach ($roles as $key => $value)
                                                @if ($usuario->hasRole($value))                    
                                                    <option value="{{ $value}}" selected>{{ $value}}</option>
                                                @else 
                                                    <option value="{{$value}}">{{$value}}</option> 
                                                @endif
                                            @endforeach
                                        </select>
                                    </div> 
                                

                                    <table class="table table-striped table-bordered table-condensed table-hover">
                                        <thead  style="background-color:#37474f;">
                                                <th>Sectores</th>
                                                <th>Habilitar o Deshabilitar</th>
                                            
                                        </thead>

                                        <tbody>
                                                @foreach ($sectores as $sector )
                                                    <tr style="background-color: rgba(245, 245, 245, 0.4); ">   
                                                        <td  style="border-color:grey;">{{ $sector->nombre }}</td>
                                                        @php
                                                         $band=false
                                                        @endphp                                                                 
                                                        @foreach ($selectborrar as $sb)
                                                            @if($sector->id == $sb->id)
                                                                 
                                                                @php
                                                                $band= true
                                                                @endphp
                                                            @endif
                                                        @endforeach                                    
                                                        @if($band)
                                                            
                                                            <td  style="border-color:grey;">{!! Form::checkbox( $sector->id, 'value', true)!!} </td>
                                                        @else
                                                        
                                                        <td  style="border-color:grey;"> {!! Form::checkbox( $sector->id, 'value', false)!!}</td>
                                                        @endif
                                                                                                 
                                                    </tr>
                                                @endforeach
                                        </tbody>
                                    </table>

                                    
                                           
                                    <div class="row justify-content-end mt-4">
                                        <input type="submit" value="Guardar" class="btn btn-success">
                                    </div>
                       </form>
                    </div>

                    
      
@endsection