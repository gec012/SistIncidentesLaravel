
    <div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-show">
  
       <div class="modal-dialog modal-lg" >

        <div class="modal-content"  >
            <div class="modal-header" style="background-color:#37474f;">
                <h3 class="text-white">Detalles:</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-light"> X </span>
                </button>
                
            </div>
            <div class="modal-body text-light" style="background-color:grey; ">
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
  
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="table-responsive">
                                <table   class="table  table-bordered table-striped table-hover  table-condesed">
                                        <tr  class="text-white" style="background-color:#37474f ;">
                                            <th >Enviado por </th>
                                            <th >Recibido por</th>
                                            <th >Hora de recibido</th>
                                            <th >Sector al que se envio</th>
                                            <th >Tareas Realizadas</th>

                                            <th >Estado </th>
                                            <th>Recibir</th>
                                        
                                           
                                        </tr>
                                        @foreach ($detallesInci as $di)

                                            <tr  style="background-color: rgba(245, 245, 245, 0.4); " >
                                               @foreach($users as $user)
                                                @if($di->send_id == $user->id )
                                                    <td style="border-color:grey;">{{ $user->name}}</td>
                                                @endif
                                               @endforeach
                                                @if($di->recived_id <> null)
                                                    @foreach($users as $user)
                                                        @if($di->recived_id == $user->id   )
                                                            <td style="border-color:grey;">{{ $user->name}}</td>
                                                             @endif
                                                    @endforeach
                                                @else
                                                    <td style="border-color:grey;">Sin recepcion</td>
                                                @endif
                                                
                                                @if($di->hora_de_recibido <> null)
                                                <td style="border-color:grey;">{{ $di->hora_de_recibido}}</td>
                                               @else
                                               <td style="border-color:grey;"></td>
                                               @endif
                                               @if($di->sector_id <> null)
                                                    @foreach($sectores as $sec)
                                                        @if($di->sector_id == $sec->id   )
                                                            <td style="border-color:grey;">{{ $sec->nombre}}</td>
                                                        
                                                        @endif
                                                    @endforeach
                                                @else
                                                    <td style="border-color:grey;"></td>
                                                @endif

                                               <td style="border-color:grey;">{{ $di->observaciones}}</td>
                                               <td style="border-color:grey;">{{ $di->estado}}</td>
                                               @if($di->estado == 'Pendiente' or $di->estado == 'Enviado')
                                               <td style="border-color:grey;">
                                                 {!! Form::open(['method' => 'PATCH','route' => ['incidente.update',$incidente->id],'style'=>'display:inline']) !!}
                                    
                                                 {{ Form::button('Recibir', ['class' => 'btn btn-dark btn-dm','name'=>'check','value'=>'1','style'=>'background-color:#388e3c;','title'=>'Habilitar' ,'type' => 'submit']) }}

                                                 {!! Form::close() !!}
                                               </td>
                                               @else 
                                                    <td style="border-color:grey;"></td>
                                               @endif
                                                       
                                             
                                        @endforeach
                                </table>
                            </div>
                        </div>
                    </div> 
                
                    </div>
                </div>
               


            </div>
            <div class="modal-footer" style="background-color:#37474f;">
               <button type="button" class="btn btn-dark" data-dismiss="modal">Cerrar</button>
             
            </div>
        </div>
     </div>
  
 
  
</div>