@extends('layouts.app')


@section('content')

<div class="container">
	<div style="text-align: center; color: #fff">
	<h2>Programacion de Hornos</h2>	
	</div>
</div>
	<div class="col-md-12" style="color: #fff" >
				<div class="row">
								<div class="col-md-5 ">
									<div class=" form-group row">
													<label style="font-size: 20px" class="col-md-4">Fecha de Inicio</label>
													<div class="col-md-8">
														<input style="font-size: 20px" class="form-control col-md-8" name="date-inicio" id="date-inicio" type="date">
													</div>
											
									</div>
									
								</div>
								<div class="col-md-5" >
										<div class=" form-group row">
											<label  style="font-size: 20px" class="col-md-4">Fecha de Final</label>
											<div class="col-md-8">
												<input  style="font-size: 20px; " class="form-control col-md-8" name="date-final" id="date-final" type="date">
											</div>
										</div>
							
											
								</div>
								<div class="col-md-2">
									<button class="btn btn-primary" >Consultar</button>
								</div>
			</div>
</div>
<div class="col-md-12" id="scroll_inferior"  style="height: 20px; overflow-x: scroll">
    <div id="div_scroll" style="width: 5000px"><h1>..</h1></div>
</div>
<div class="col-md-12" style=" margin-right: 80px;   overflow-y: scroll; overflow-x: hidden; ">
     <div  id="hornos_scroll" class="col-md-1" style="padding-right: 0" >
						<table class="table table-bordered ">
		
								<thead>
									<tr style="height: 50px">
										<th style="text-align: center; font-size: 20px; color: #fff">Horno</th>
									</tr>
								</thead>
                                                </table>
     </div>
    
    <div id="movimiento_hornos" class="col-md-11" style="overflow-x: scroll; padding-left: 0"  >
	<table  class="table table-bordered col-md-11 " style=" table-layout: fixed; ">
		
		<thead>
			<tr style="height: 50px; max-height: 50px">
                            @for ($i = 0; $i < $dias; $i++)
				<th style="width: 100px; overflow: hidden; text-align: center; font-size: 14px; color: #fff; background: #157ab5">{{date('Y-m-d',(strtotime($fecha_inicio)+86400*$i))}}</th>
				@endfor

			</tr>
		</thead>
        </table>
    </div>
</div>
    
</div>
	<div class="col-md-12" style=" margin-right: 80px;  height: 850px; overflow-y: scroll; overflow-x: hidden; margin-top: -40px ">
            <div  id="hornos_scroll" class="col-md-1" style="padding-right: 0" >
                <table id="tabla_hornos" class="table table-bordered ">
		<!--
								<thead>
									<tr style="height: 50px">
										<th style="text-align: center; font-size: 20px; color: #fff">Horno</th>
									</tr>
								</thead>-->
								<tbody>
                                                                    @foreach ($hornos as $horno)
                                                                        <tr style="height: 25px; background: #fff">
                                                                            <td ></td>
                                                                        </tr>
									<tr style="height: 101.7px">
                                                                            <td style="text-align: center; font-size: 25px; color: #fff; font-weight: bolder; background: #157ab5">{{$horno->horno}}</td>
									</tr>
                                                                        
									@endforeach		

								</tbody>
						</table>
		</div>
            <div id="movimiento_hornos2" class="col-md-11" style="overflow-x: scroll; padding-left: 0"  >
                
                <table id="tabla_mov_hornos" class="table table-bordered col-md-11 " style=" table-layout: fixed; ">
		<!--
		<thead>
			<tr style="height: 50px; max-height: 50px">
                            @for ($i = 0; $i < $dias; $i++)
				<th style="width: 100px; overflow: hidden; text-align: center; font-size: 14px; color: #fff; background: #157ab5">{{date('Y-m-d',(strtotime($fecha_inicio)+86400*$i))}}</th>
				@endfor

			</tr>
		</thead>-->
		<tbody>

                                                    @foreach ($hornos as $horno)
                                                         <tr style="height: 25px; background: #fff">
                                                                @for ($i = 0; $i < $dias; $i++)
                                                                <td style="width: 100px" ></td>
                                                             @endfor
                                                           
                                                               
                                                               </tr>
                                                            <tr id="fila_horno" style="height: 80px; max-height: 80px;  box-sizing: border-box; background: #2d2d2d">
							 @for ($i = 0; $i < $dias; $i++)
                                                          <?php $estilo = ""; ?>
                                                         @if(in_array(date('Y-m-d',(strtotime($fecha_inicio)+86400*$i)),$array_festivos))                                                         
                                                         <?php $estilo = "background: #EC814F"; ?>
                                                         @endif
                                                              <td  style=" width: 100px;height: 100px; max-height: 80px; padding: 0; margin: 0; box-sizing: border-box;  <?php echo $estilo; ?>">
                                                                  <div id="varias_operaciones">
                                                                  @foreach ($horno->mov_hornos as $mov_horno)
                                                                 
                                                                 <!--{{ date('Y-m-d',(strtotime($fecha_inicio)+86400*$i))}}-->
                                                                 
                                                                 @if($mov_horno->fecha_inicio  <= date('Y-m-d',(strtotime($fecha_inicio)+86400*$i)) && $mov_horno->fecha_fin  >= date('Y-m-d',(strtotime($fecha_inicio)+86400*$i)) )
                                                                    <div class="ocupado" style="width: 100%; height: 100%; z-index: 2; display: inline-block">
                                                                         <div class="dropdown">
                                                                            <div class=" dropdown-toggle" type="button" id="dropdownMenu1" 
                                                                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                 style="background: #fff; ">
                                                                                <img   
                                                                                   style="float: right; margin-top: 5px; margin-right: 5px;  padding: 5px;"
                                                                                   width="30%" height="30%">

                                                                            </div>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                                              <li><a href="{{url("Simulador/inicio/home_admin", [date('Y-m-d',(strtotime($fecha_inicio)+86400*$i) ),$horno->id ])}}">Cargue</a></li>
                                                                              <li><a data-horno="{{$horno->id}}" data-fecha="{{date('Y-m-d',(strtotime($fecha_inicio)+86400*$i) )}}" id="agregar_mov" href="#">Movimiento</a></li>

                                                                            </ul>
                                                                          </div>
                                                                        <?php $contador =$contador+1; ?>
                                                                             <img style="margin-top: -20px; " src="img/{{$mov_horno->tipo_mov_horno->nombre_movimiento}}.png" width="100%" height="80px">
                                                                    </div>
                                                                    
                                                                    
                                                                      
                                                                    @else
          
                                                                    @endif
                                                                 @endforeach
                                                            
                                                                 @if($contador ==0 )
                                                                 
                                                                
                                                                 
                                                                 
                                                                 <div class="ocupado" style="width: 100%; height: 100%;">
                                                                         <div class="dropdown">
                                                                            <div class=" dropdown-toggle" type="button" id="dropdownMenu1" 
                                                                                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"
                                                                                 style="background: #fff; ">
                                                                             <img   
                                                                                   style="float: right; margin-top: 5px; margin-right: 5px;  padding: 5px;"
                                                                                   width="30%" height="30%">

                                                                            </div>
                                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                                              <li><a href="{{url("Simulador/inicio/home_admin", [date('Y-m-d',(strtotime($fecha_inicio)+86400*$i) ),$horno->id ])}}">Cargue</a></li>
                                                                              <li><a data-horno="{{$horno->id}}" data-fecha="{{date('Y-m-d',(strtotime($fecha_inicio)+86400*$i) )}}" id="agregar_mov" href="#">Movimiento</a></li>
                                                                              
                                                                            </ul>
                                                                          </div>
                                                                    </div>
                                                                 @endif
                                                                 <?php $contador =0; ?>
                                                                 
                                                                 </div>
                                                                 </td>
                                                                                                                                  
 
                                                            
                                                        @endfor
                                                              
                                                            
                                                                
							    </tr>
                                                            
									@endforeach		
			
			
			</tbody>
	</table>
</div>
	
	</div>

	
</div>

<div class="col-md-12" id="scroll_inferior"  style="height: 20px; overflow-x: scroll">
    <div id="div_scroll" style="width: 5000px"><h1>..</h1></div>
</div>



 <div class="modal fade " id="movimientoModal">
        <div class="modal-dialog " role="document">
            <div class="modal-content bg-success ">
                <div class="modal-header bg-success" style="padding-bottom: 0; padding-top: 10px">
                    <h4 class="modal-title" style="text-align: center; font-size: 24px"><strong>
                            Información
                        </strong></h4>
                </div>
                <div class="modal-body  bg-success" style="padding-top: 0; padding-bottom: 0">
                       <form>
                        <div class="form-group col-md-6">
                          <label for="horno">Horno</label>
                          <input type="text" class="form-control" id="horno" disabled value="" >
                        
                        </div>

                          <div class="form-group col-md-6" style="text-align: center;">
                          <label for="tipo_movimiento">Tipo Movimiento</label>
                          <select class="form-control col-md-6" id="tipo_movimiento">
                            <option value="4">Mantenimiento</option>
                            <option value="6">Vacio</option>
                          </select>
                          
                        </div>

                        <div class="form-group col-md-6">
                          <label for="fecha_inicio_mov">Email address</label>
                          <input type="date" disabled class="form-control" id="fecha_inicio_mov" >
                        
                        </div>
                        <div class="form-group col-md-6">
                          <label for="fecha_fin_mov">Password</label>
                          <input type="date" class="form-control" id="fecha_fin_mov" >
                        </div>
                        <<textarea rows="6" id="descripcion" class="col-md-12 form-control" name="descripcion">
                          
                        </textarea>

                      
                      </form>
                </div>
                <div class="modal-footer bg-success" style="padding-top: 0">
        <button type="button" id="guardar_mov" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>

            </div>
        </div>
    </div>


@endsection

@section('script')

<script type="text/javascript">


$(document).ready(function() {
    var hijos = $("#varias_operaciones").children("div#ocupado")
   var filas_tabla =$("#tabla_mov_hornos tbody tr").length;
   for(var x =0; x<= filas_tabla; x =x+1){
      var fila_mov =$("#tabla_mov_hornos tbody tr:nth-child("+x+") td").outerHeight();
      $("#tabla_mov_hornos tbody tr:nth-child("+x+") td").outerHeight(fila_mov);
   $("#tabla_hornos tbody tr:nth-child("+x+") ").outerHeight(fila_mov);
   }
    var ancho_mov_hornos =$('#movimiento_hornos table').width()+ $('#hornos_scroll').width()+150;
  

       //$("div.ocupado").height( $("#fila_horno").height())
    $("#div_scroll").width(ancho_mov_hornos);


document.getElementById("scroll_inferior").setAttribute("onscroll"," $('#movimiento_hornos').scrollLeft($('#scroll_inferior').scrollLeft()); $('#movimiento_hornos2').scrollLeft($('#scroll_inferior').scrollLeft())");
    

  
   
    $("a#agregar_mov").on("click", function(){
      $("#movimientoModal").modal();
      $("#horno").val($(this).attr('data-horno'))
      $("#fecha_inicio_mov").val($(this).attr('data-fecha'))
    });


    $("#guardar_mov").on("click", function(){
        if($( "#fecha_fin_mov" ).val()===""){
            alert("Seleccione una Fecha Final");
           $( "#fecha_fin_mov" ).val("");
           return;
        }


         var fecha2 =  moment($( "#fecha_inicio_mov" ).val());
         var fecha1 =  moment($( "#fecha_fin_mov" ).val());

       var diferencia =fecha2.diff(fecha1, 'days');
       if(diferencia > 0){
           alert("Seleccione una Fecha Posterior o igual a la fecha de Inicio");
           $( "#fecha_fin_mov" ).val("");
           return;
       }
        var fecha_inicia =$( "#fecha_inicio_mov" ).val();
        var fecha_finaliza = $( "#fecha_fin_mov").val();
        var horno =  $( "#horno").val();    
        var descripcion_d = $("#descripcion").val(); 
            var tipo_movimiento = $( "#tipo_movimiento option:selected").val();


  $.ajax({
                                    type:"Post",
                                    dataType:"json",
                                    data:{fecha_ini: fecha_inicia,fecha_fin: fecha_finaliza, horno_se:horno,
                                        tipo_mov:tipo_movimiento,descripcion:descripcion_d},
                                        url:"{{url('Simulador/Registrar_movimiento')}}",
                                    //url:"ar",
                                    success: function(resp){
                                   
                                  setInterval("location.reload(true);",800);
                                                                       
                                      
                                                   
                                        
                                    }
             
    
                                });
                        

    })


      });
    </script>
    @endsection