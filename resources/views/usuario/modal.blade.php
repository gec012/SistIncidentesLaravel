
    <div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$usuario->id}}">
  
        {!! Form::open(array('action'=>array('UsuariosController@destroy',$usuario->id),'method'=>'DELETE')) !!}
           <div class="modal-dialog " >
      
              <div class="modal-content"  >
                  <div class="modal-header" style="background-color:#37474f;">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true" class="text-light"> X </span>
                      </button>
                      
                  </div>
                  <div class="modal-body text-light" style="background-color:grey; ">
                   @if($usuario->estado)
                     <p>Confirme si desea desabilitar usuario : <strong>{{$usuario->name}}</strong></p>
                    @else
                    <p>Confirme si desea habilitar usuario : <strong>{{$usuario->name}}</strong></p>

                    @endif 
                  </div>
                  <div class="modal-footer" style="background-color:#37474f;">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                     <button type="submit" class="btn btn-primary">Confirmar</button>
                  </div>
              </div>
           </div>
        
        {!! Form::close() !!}
        
      </div>