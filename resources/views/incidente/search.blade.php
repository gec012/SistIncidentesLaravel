

{!! Form::open(array('url'=>'incidente','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
 <div class="form-group">
     <div class="input-group">
         <input id="searchText"type="text" name="searchText" class="form-control" placeholder="Busqueda por estado,usuario o caracter" value="{{$searchText}}">
         <span class="input-group-btn">
             <button type="submit" class="btn btn-dark" style="background-color:#455a64;"><i class="fas fa-search">  Buscar</i></button>
         </span>
     </div>
 </div>


<div>
 <hr>
 <h4>Filtros</h4>
            <div class="row" id="divcheck">
                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12">
                    <h5><strong>Estados:</strong></h5>
                     <div class="form-check form-check-inline" id="check1">
                         <strong>En Proceso</strong>
                            {!! Form::checkbox('EnProceso', 'value',false,array('id'=>'enproceso') )!!}
                    </div>
                    <div class="form-check form-check-inline" id="check2">
                        <strong>Pendiente</strong>
                            {!! Form::checkbox( 'Pendiente', 'value',false)!!}
                     </div>
                     <div class="form-check form-check-inline" id="check3">
                        <strong>Finalizado</strong>   
                        {!! Form::checkbox( 'Finalizado', 'value',false)!!}
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-2 col-xs-12">
                        <h5><strong>Caracter:</strong></h5>
                         <div class="form-check form-check-inline" id="check4">
                             <strong>Requisito</strong>
                                {!! Form::checkbox( 'Requisito(Deseo)', 'value', false)!!}
                        </div>
                        <div class="form-check form-check-inline" id="check5">
                            <strong>Sin apuro</strong>    
                            {!! Form::checkbox( 'Sinapuro', 'value', false)!!}
                         </div>
                         <div class="form-check form-check-inline" id="check6">
                               <strong>Urgente</strong> 
                               {!! Form::checkbox( 'Urgente', 'value', false)!!}
                        </div>
                    </div>
                  
                        </div>  
                       
            </div>
            <hr>
        </div>

        
    <script src="{{ asset('js/jquery.js') }}"></script>
 <script>

        $(document).ready(function(){
            $('#divcheck').click(function(){
                
                if(document.getElementsByName('EnProceso')[0].checked){                    
                    $('#check2').hide();
                    $('#check3').hide();
                   
                }else{
                    if(document.getElementsByName('Pendiente')[0].checked){
                        $('#check1').hide();
                        $('#check3').hide();
                        
                    }else{
                        if(document.getElementsByName('Finalizado')[0].checked){
                            $('#check1').hide();
                            $('#check2').hide();
                        }else{
                            $('#check1').show();
                            $('#check2').show();
                            $('#check3').show();
                        }
                        
                    }
                }

                if(document.getElementsByName('Requisito(Deseo)')[0].checked){                    
                    $('#check5').hide();
                    $('#check6').hide();
                   
                }else{
                    if(document.getElementsByName('Sinapuro')[0].checked){
                        $('#check4').hide();
                        $('#check6').hide();
                        
                    }else{
                        if(document.getElementsByName('Urgente')[0].checked){
                            $('#check4').hide();
                            $('#check5').hide();
                        }else{
                            $('#check4').show();
                            $('#check5').show();
                            $('#check6').show();
                        }
                        
                    }
                }      
            
            });
        });
   
       

 </script>
            
{!! Form::close() !!}