
  <center>
      <div class="center-block">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="form-group ">
                <strong>Nombre:</strong>
                {!! Form::text('nombre', null, array('placeholder' => 'Nombre','class' => 'form-control','required' => 'required')) !!}
                </div>
               
                <div class="form-group ">
                <label +>
                    <strong>Caracter:</strong>
                </label>
                <select id="caracter" name='caracter' class="form-control" style="text-align:rigth; " required  >
                        <option   value="Urgente">Urgente </option>
                        <option   value="Sin apuro" selected>Sin apuro </option>
                        <option   value="Requisito(Deseo)">Requisito(Deseo)</option>           
                    
                </select>
              
                </div>
                
                <div class="form-group ">
            <label >
            <strong>Tipo</strong>  </label>
            <div >
            
                <select id="tipo" name='tipo' class="form-control" style="text-align:rigth; "  >
                        <option selected="true" disabled="disabled">Seleccione un tipo de incidente</option>
                    @foreach($tipos as $tipo)
                        <option   value="{{$tipo->id}}">{{$tipo->nombre}} </option>
                    @endforeach
                </select>
            </div>
            </div>

            <div class="form-group ">
            <label >
            <strong>Sector al que se envia</strong>  </label>
            <div>
            
                <select id="sector" name='sector' class="form-control" style="text-align:rigth; "  >
                        <option selected="true" disabled="disabled">Seleccione un tipo de incidente</option>
                    @foreach($sectores as $sector)
                        <option   value="{{$sector->id}}">{{$sector->nombre}} </option>
                    @endforeach
                </select>
            </div>
            </div>

            
            <div class="form-group ">
                    <strong>Descripcion:</strong>
                    {!! Form::textarea('detalle', null, array('placeholder' => 'Descripcion del incidente','class'=> 'form-control','required' => 'required')) !!}
                </div>

           
            <form method="POST"  accept-charset="UTF-8" enctype="multipart/form-data">
            
                 <input type="hidden" name="_token" value="{{ csrf_token() }}">
            

            <div class="form-group">
             
                    <div class="custom-file">
                            <input type="file"  name="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                            <label class="custom-file-label" for="inputGroupFile01">Seleccione una imagen</label>
                          </div>
               
              
            </div>
          </form>


        
             
        
                    <button type="submit"  class="btn btn-success float-center">Guardar</button>
            </div>


    </div>
    </center>

