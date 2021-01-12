@extends('home')
@section('content')
<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">

                  <div class="pull-left">
                  <h3 class="">Nuevo Usuario</h3>
                  @if ($message = Session::get('success'))
                  <div class="alert alert-danger">
                      <p>{{ $message }}</p>
                  </div>
              @endif
                  </div>
                  <div class=" row">
                        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12">
                      <a class="btn btn-dark   float-right" href="{{ route('usuario.index') }}">Volver</a>
                        </div>
                  </div>

                <div class="card-body mt-4"     style="background-color:#bdbdbd ;">
                   <form action="{{url('usuario')}}" method="POST">
                      @csrf
                    <div class="form-group">
                           <label for="name">Nombre</label>
                           <input type="text" name="name" required class="form-control">
                       </div>
                       <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" placeholder="correo" required class="form-control">
                        </div>
                        <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password"  placeholder="contraseña" required class="form-control">
                            </div>
                        <div class="form-group">
                                    <label for="rol">Rol</label>
                                    <select name="rol" id="" class="form-control">
                                        @foreach ($roles as $key => $value)
                                         <option value="{{$value}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>   
                         <div class="form-group">
                          <label for="sector">Sector</label>
                          <select name="sector" id="sector" class="form-control">
                              @foreach ($sectores as $sector )
                              <option value="{{ $sector->id }}">{{ $sector->nombre }}</option>
                                  
                              @endforeach
                          
                         </select>    
                         </div>       
                                <div class="row justify-content-end">
                                    <input type="submit" value="Crear" class="btn btn-success">
                                </div>
                   </form>
                </div>

</div>       
               
@endsection