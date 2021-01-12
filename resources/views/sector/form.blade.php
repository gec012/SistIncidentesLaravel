
  <center>
      <div class="center-block">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="form-group ">
                <strong>Nombre:</strong>
                {!! Form::text('nombre', null, array('placeholder' => 'Nombre','class' => 'form-control')) !!}
                </div>
        
                <div class="form-group ">
                    <strong>Descripcion:</strong>
                    {!! Form::textarea('descripcion', null, array('placeholder' => 'Descripcion','class'=> 'form-control')) !!}
                </div>
        
                    <button type="submit"  class="btn btn-success float-center">Guardar</button>
            </div>
    </div>
    </center>
