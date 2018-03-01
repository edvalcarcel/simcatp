@extends('layouts.app')


@section('content')
<div >
    <div class="row" style="background: #D4D5D6">
        <div class="col-md-12" style="background: #2d2d2d">
            <div class="panel panel-default" style="padding-top: 0; padding-bottom: 0" >
                    <div class="panel-heading" style="color:#fff; text-align: center; background: #2d2d2d; padding-top: 0;  padding-bottom: 0; margin-bottom: 0">
                        <div style="display: inline-block; padding-bottom: 5px">
                            
                      
                        <h1 style="margin-top: 0; display: inline-block; margin-bottom: 0"><strong>  Cargue de Hornos     </strong></h1>
                        
                        
                                <h1 style="margin-top: 0; margin-left: 30px; display: inline-block; margin-bottom: 0">
                                    <select disabled id="horno_select" style="background: #2d2d2d">
                                        <option value="1">H1</option>
                                        <option value="2">H2</option>
                                        <option value="3">H3</option>
                                        <option value="4">H4</option>
                                        <option value="5">H5</option>
                                        <option value="6">H6</option>
                                        <option value="7">H7</option>
                                        <option value="8">H8</option>
                                        <option value="9">H9</option>
                                        <option value="10">H10</option>
                                        <option value="11">H11</option>
                                        <option value="12">H12</option>
                                        <option value="13">H13</option>
                                        <option value="14">H14</option>
                                        <option value="15">H15</option>
                                        
                                        
                                        </select>
                                    
                                    <input type="hidden" name="tipo_mov" value="1" id="tipo_mov">
                                    </h1>
                        
                        <h1 style="margin-top: 0; margin-left: 30px; display: inline-block; margin-bottom: 0">
                            <strong>del</strong>
                            <strong id="fecha_horno">    {{$fecha_cargue}}     </strong></h1>
                                    <h1 style="margin-top: 0; margin-left: 30px; display: inline-block; margin-bottom: 0">
                                        <strong>  <button  id="btn_registrar" style="font-size: 24px; font-weight: bolder" class="btn btn-success">Registrar</button>   
                                           </h1>
                          <h1 style="margin-top: 0; margin-left: 30px; display: inline-block; margin-bottom: 0">
                                        <strong>
                                            <a style="color:#fff" href="{{url("Admin")}}"><button  id="btn_registrar" style="font-size: 24px; font-weight: bolder" class="btn btn-primary">
                                                Volver a Calendario</button>  </a> 
                                           </h1>
                         
                     </div>
                        </div>

  			</div>
  			 <div id="estructura"  class="hide" style=" padding-left: 10%; padding-right: 15%" >
  			 	<div id="circulo" style="display: inline-block; border:5px solid #ffffff; padding-left: 38px;padding-right: 38px;  border-radius:50%;box-sizing: border-box; padding-bottom: 0">


            <div id="puerta" style=" width: 18%; height: 80px; margin-left: 42%; margin-right: 42%">
                          <h1 style="text-align: center;color: #000; font-weight: bolder;"></h1>
                        </div>
          			 		<div id="lado-1" style="background: #656260; border:5px solid #ffffff; height: 275px; width: 275px; margin-left: auto; margin-right: auto;box-sizing: border-box;">
                                                    <a id="lado1" class="lado_horno" style=" text-decoration:none; " href="{{url("Simulador/L1/home/6/fecha/".$fecha_cargue."")}}">
          			 				<h1 style="text-align: center; font-weight: bolder; font-size:32px; color: #fff">Lado 1</h1>
                                                              
          			 			</a>
          			 		</div>
    					<div style=" margin-top:4px; margin-left: auto; margin-right: auto; text-align: center; height: 280px">
                					<div id="lado-4" style="background: #656260; display: inline-block; border:5px solid #ffffff; height: 275px; width: 275px; box-sizing: border-box; margin: 0; padding: 0">
                						<a id="lado4" class="lado_horno" style=" text-decoration:none; " href="{{url("Simulador/L4/home/6/fecha/".$fecha_cargue."")}}">
                  			 				<h1 style="text-align: center; font-weight: bolder; font-size:32px; color: #fff">Lado 4</h1>
                  			 			</a>
                					</div>
                			 		<div id="centro" style="background: #303030; display: inline-block; border:5px solid #ffffff;height: 275px; width: 275px; box-sizing: border-box;  margin: 0; padding: 0">
                			 			<a id="lado_centro" class="lado_horno" style=" text-decoration:none; " href="{{url("Simulador/Cr/home/10/fecha/".$fecha_cargue."")}}">
                			 				<h1 style="text-align: center; font-weight: bolder; font-size:32px; color: #fff">Centro</h1>
                			 			</a>
                			 		</div>
                			 		<div id="lado-2" style="background: #656260; display: inline-block; border:5px solid #ffffff;height: 275px; width: 275px;box-sizing: border-box;  margin: 0; padding: 0">
                			 			<a id="lado2" class="lado_horno" style=" text-decoration:none; " href="{{url("Simulador/L2/home/6/fecha/".$fecha_cargue."")}}">
                			 				<h1 style="text-align: center; font-weight: bolder; font-size:32px; color: #fff">Lado 2</h1>
                			 			</a>
                			 		</div>	
    					</div>
            					<div id="lado-3" style="margin-top: 4px; background: #656260; border:5px solid #ffffff; height: 275px; width: 275px; margin-left: auto; margin-right: auto; text-align: center;">
            						<a id="lado3"  class="lado_horno" style=" text-decoration:none; " href="{{url("Simulador/L3/home/6/fecha/".$fecha_cargue."")}}">
              			 				<h1 style="text-align: center; font-weight: bolder; font-size:32px; color: #fff">Lado 3</h1>
              			 			</a>
              			 		</div>

              			 		<div id="puerta" style="background: #656260; border:5px solid #ffffff; width: 17%; height: 80px; margin-left: 42%; margin-right: 42%">
              			 			<h1 style="text-align: center;color: #000; font-weight: bolder;">Entrada</h1>
              			 		</div>
  			 	</div>
                             <div style="width:40%; height: 900px; display: inline-block; padding-left: 15px;">
                                 <table class="table  table-bordered" style="width:90%; color:#000">
                                     <thead style="background: #2ab27b; font-weight: bolder; font-size: 18px;  text-align: center;">
                                         <td>#</td>
                                         <td>Producto</td>
                                         <td>Cantidad</td>
                                         <td>Peso</td>
                                 </thead>
                                 <tbody id="body_total" style="background: #3097D1; text-align: center; font-weight: bolder;font-size: 18px">
                                     
                                 </tbody>
                                     
                                 </table>
                                 
                                 
                                   <table class="table  table-bordered" style="width:90%; color:#fff">
                                     <thead style="background: #000; font-weight: bolder; font-size: 18px; text-align: center;">
                                         
                                         <td>Lado</td>
                                         <td>Producto</td>
                                         <td>Cantidad</td>
                                         <td>Peso</td>
                                 </thead>
                                 <tbody id="body_total_lado" style="background: #3097D1; text-align: center; font-weight: bolder;font-size: 22px; color: #000">
                                     
                                 </tbody>
                                     
                                 </table>
                             </div>
			

					    </div>
            


         
                        
                 
                       
          
        </div  >
        
        <div class="col-md-12" style="background: #2d2d2d">
                             <div class="col-md-12 hide">
                                 <div class="col-md-3">
                                     <h2>Asignar Operaciones Posteriores</h2>
                                 </div>
                                 <div class="col-md-3">
                                     <h2 id="asignaroperaciones" class="btn btn-primary">Asignar Operaciones Posteriores</h2>
                                    
                                 </div>
                                 <
                                  
                             </div>
                             
                             
                             
                             
                             
                                                      <div class="row" style="margin-top: 15px">
                                                            <div class="col-md-1">
                                                                <label style="font-size: 28px; color:#fff" class="col-md-4">Quema</label>
                                                            </div>
								<div class="col-md-4 ">
									<div class=" form-group row">
													<label style="font-size: 28px; text-align: right; color:#fff" class="col-md-5">Fecha de Inicio</label>
													<div class="col-md-7">
                                                                                                            <input  style="font-size: 28px; height:42px" class="form-control col-md-8" type="text" id="datepicker_inicio_quema">
													</div>
											
									</div>
									
								</div>
								<div class="col-md-4" >
										<div class=" form-group row">
											<label  style="font-size: 28px; text-align: right; color:#fff" class="col-md-5">Fecha de Final</label>
											<div class="col-md-7">
												      <input style="font-size: 28px; height:42px" class="form-control col-md-8" type="text" id="datepicker_fin_quema">
											</div>
										</div>
							
											
								</div>
                                                            <div class="col-md-3">
                                                                <label  id="agregar_tipo_mov1" data-id_mov="" data-indicador="1" data-tipo_mov="5" style="font-size: 28px; color:#fff; padding: 0" class="btn btn-success col-md-5">Guardar</label>
                                                                
                                                                 <label id="eliminar_tipo_mov1" data-id_mov="" data-tipo_mov="5" style="font-size: 28px; color:#fff; margin-left: 15px; padding: 0" class="btn btn-danger col-md-5">Eliminar</label>
                                                                
                                                            </div>
							
                                                        </div>
                    
                    
                    
                    
                                                          <div class="row" style="margin-top: 15px">
                                                            <div class="col-md-1">
                                                                <label style="font-size: 28px; color:#fff" class="col-md-4">Enfriamiento</label>
                                                            </div>
								<div class="col-md-4 ">
									<div class=" form-group row">
													<label style="font-size: 28px; text-align: right; color:#fff" class="col-md-5">Fecha de Inicio</label>
													<div class="col-md-7">
                                                                                                            <input  style="font-size: 28px; height:42px" class="form-control col-md-8" type="text" id="datepicker_inicio_enfria">
													</div>
											
									</div>
									
								</div>
								<div class="col-md-4" >
										<div class=" form-group row">
											<label  style="font-size: 28px; text-align: right; color:#fff" class="col-md-5">Fecha de Final</label>
											<div class="col-md-7">
												      <input style="font-size: 28px; height:42px" class="form-control col-md-8" type="text" id="datepicker_fin_enfria">
											</div>
										</div>
							
											
								</div>
                                                            <div class="col-md-3">
                                                                <label id="agregar_tipo_mov2" data-id_mov="" data-indicador="2" data-tipo_mov="3"  style="font-size: 28px; color:#fff; padding: 0" class="btn btn-success col-md-5">Guardar</label>
                                                                
                                                                 <label id="eliminar_tipo_mov2" data-id_mov="" data-tipo_mov="3"  style="font-size: 28px; color:#fff; margin-left: 15px; padding: 0" class="btn btn-danger col-md-5">Eliminar</label>
                                                                
                                                            </div>
							
                                                        </div>
                    
                    
                    
                    
                    
                    
                    
                    
                                                        <div class="row" style="margin-top: 15px">
                                                            <div class="col-md-1">
                                                                <label style="font-size: 28px; color:#fff" class="col-md-4">Descargue</label>
                                                            </div>
								<div class="col-md-4 ">
									<div class=" form-group row">
													<label style="font-size: 28px; text-align: right; color:#fff" class="col-md-5">Fecha de Inicio</label>
													<div class="col-md-7">
                                                                                                            <input  style="font-size: 28px; height:42px" class="form-control col-md-8" type="text" id="datepicker_inicio_descarg">
													</div>
											
									</div>
									
								</div>
								<div class="col-md-4" >
										<div class=" form-group row">
											<label  style="font-size: 28px; text-align: right; color:#fff" class="col-md-5">Fecha de Final</label>
											<div class="col-md-7">
												      <input style="font-size: 28px; height:42px" class="form-control col-md-8" type="text" id="datepicker_fin_descarg">
											</div>
										</div>
							
											
								</div>
                                                            <div class="col-md-3">
                                                                <label id="agregar_tipo_mov3" data-id_mov="" data-indicador="3" data-tipo_mov="2" style="font-size: 28px; color:#fff; padding: 0" class="btn btn-success col-md-5">Guardar</label>
                                                                
                                                                 <label id="eliminar_tipo_mov3" data-id_mov="" data-tipo_mov="2" style="font-size: 28px; color:#fff; margin-left: 15px; padding: 0" class="btn btn-danger col-md-5">Eliminar</label>
                                                                
                                                            </div>
							
                                                        </div>
                            

                         </div>
    </div>
    <style>
     div.ui-datepicker {
    font-size: 150%;
}
</style>


  @endsection
  @section('script')

<script type="text/javascript">
    $("#estructura").hide();
	function actualizarTama() {
  
  $("body").css("zoom", window.innerWidth / 2500);
  
}

$(document).ready(function() {
    
    
    
  
                  $( "#datepicker_inicio_quema" ).datepicker({

                         dateFormat: 'yy-mm-dd',
                  });
                                    $( "#datepicker_fin_quema" ).datepicker({

                         dateFormat: 'yy-mm-dd',
                  });
                                                   $( "#datepicker_inicio_enfria" ).datepicker({

                         dateFormat: 'yy-mm-dd',
                  });
                                                   $( "#datepicker_fin_enfria" ).datepicker({

                         dateFormat: 'yy-mm-dd',
                  });
                                                   $( "#datepicker_inicio_descarg" ).datepicker({

                         dateFormat: 'yy-mm-dd',
                  });
                                                   $( "#datepicker_fin_descarg" ).datepicker({

                         dateFormat: 'yy-mm-dd',
                  });
                  
                
     $( "#datepicker_inicio_quema" ).on("change", function(){
         
         
         var fecha2 =  moment($( "#datepicker_inicio_quema" ).val());
         var fecha1 =  moment("{{$fecha_cargue}}");
       var diferencia =fecha2.diff(fecha1, 'days');
       if(diferencia < 0){
           alert("Seleccione una Fecha Posterior o igual al Cargue");
           $( "#datepicker_inicio_quema" ).val("");
           return;
       }
     });
         $( "#datepicker_inicio_enfria" ).on("change", function(){
             if($( "#datepicker_fin_quema" ).val()===""){
             alert("Ingrese la fecha final de Quema");
             $( "#datepicker_inicio_enfria" ).val("");
             return
         }
         var fecha2 =  moment($( "#datepicker_inicio_enfria" ).val());
         var fecha1 =  moment("{{$fecha_cargue}}");
       var diferencia =fecha2.diff(fecha1, 'days');
       if(diferencia < 0){
           alert("Seleccione una Fecha Posterior o igual al Cargue");
           $( "#datepicker_inicio_enfria" ).val("");
           return;
       }
       
       
        var fecha2 =  moment($( "#datepicker_inicio_enfria" ).val());
         var fecha1 =   moment($( "#datepicker_fin_quema" ).val());
       var diferencia =fecha2.diff(fecha1, 'days');
       if(diferencia < 0){
           alert("Seleccione una Fecha Posterior al final de la quema");
           $( "#datepicker_inicio_enfria" ).val("");
           return;
       }
       
       
       
       
       
     });
         $( "#datepicker_inicio_descarg" ).on("change", function(){
             
                          if($("#datepicker_fin_enfria" ).val()===""){
             alert("Ingrese la fecha final de Enfriamiento");
             $( "#datepicker_inicio_descarg" ).val("");
             return;
         }
         var fecha2 =  moment($( "#datepicker_inicio_descarg" ).val());
         var fecha1 =  moment("{{$fecha_cargue}}");
       var diferencia =fecha2.diff(fecha1, 'days');
       if(diferencia < 0){
           alert("Seleccione una Fecha Posterior o igual al Cargue");
           $( "#datepicker_inicio_descarg" ).val("");
           return;
       }
       
       
           var fecha2 =  moment($( "#datepicker_inicio_descarg" ).val());
         var fecha1 =  moment($("#datepicker_fin_enfria" ).val());
       var diferencia =fecha2.diff(fecha1, 'days');
       if(diferencia < 0){
           alert("Seleccione una Fecha Posterior al Final del Enfriamiento");
           $( "#datepicker_inicio_descarg" ).val("");
           return;
       }
       
       
       
       
     });
   
   
   
   
   
        $( "#datepicker_fin_quema" ).on("change", function(){
            if($( "#datepicker_inicio_quema" ).val()===""){
                $( "#datepicker_fin_quema" ).val("");
                alert("Seleccione Una fecha de inicio")
                return;
            }
         var fecha2 =  moment($( "#datepicker_inicio_quema" ).val());
         var fecha1 =   moment($( "#datepicker_fin_quema" ).val());
       var diferencia =fecha2.diff(fecha1, 'days');
       if(diferencia > 0){
            alert("Seleccione una Fecha Posterior o igual a la fecha de Inicio");
           $( "#datepicker_fin_quema" ).val("");
           return;
       }
     });
         $( "#datepicker_fin_enfria" ).on("change", function(){
            if($( "#datepicker_inicio_enfria" ).val()===""){
                $( "#datepicker_fin_enfria" ).val("");
                alert("Seleccione Una fecha de inicio")
                return;
            }
         var fecha2 =  moment($( "#datepicker_inicio_enfria" ).val());
            var fecha1 =  moment($( "#datepicker_fin_enfria" ).val());
       var diferencia =fecha2.diff(fecha1, 'days');
       if(diferencia > 0){
        alert("Seleccione una Fecha Posterior o igual a la fecha de Inicio");
           $( "#datepicker_fin_enfria" ).val("");
           return;
       }
     });
         $( "#datepicker_fin_descarg" ).on("change", function(){
            if($( "#datepicker_inicio_descarg" ).val()===""){
                $( "#datepicker_fin_descarg" ).val("");
                alert("Seleccione Una fecha de inicio")
                return;
            }
         var fecha2 =  moment($( "#datepicker_inicio_descarg" ).val());
         var fecha1 =  moment($( "#datepicker_fin_descarg" ).val());

       var diferencia =fecha2.diff(fecha1, 'days');
       if(diferencia > 0){
           alert("Seleccione una Fecha Posterior o igual a la fecha de Inicio");
           $( "#datepicker_fin_descarg" ).val("");
           return;
       }
     });
   
   
   
   
   
    
 var horno = $("#horno_select").val({{$horno}});
  $("#horno_select").change();
   var movimiento ="";
 cargar_datos()
 function cargar_datos(){
      var horno = $("#horno_select option:selected").val();
 var fecha =$("#fecha_horno").text();
var tipo_movimiento = $("#tipo_mov").val();
 var mes = fecha.trim().substring(5, 7);
 var descripcion_d = "Cargue del horno en fecha "+ fecha +" del horno "+ horno;
  $.ajax({
                                    type:"Post",
                                    dataType:"json",
                                    data:{fecha_ini: fecha,fecha_fin: fecha, horno_se:horno,
                                        tipo_mov:tipo_movimiento,descripcion:descripcion_d,opcion:"revisar"},
                                        url:"{{url("Simulador/Registrar_movimiento")}}",
                                   // url:"Simulador/Registrar",
                                    success: function(resp){
                                        //alert(resp["resp"]);
                                        console.log(resp);
                                       $("#estructura").removeClass("hide").show();
                                        //$("#estructura").removeClass("hide").show();
                                        if(resp["resp"]!=="Ninguno"){
                                            movimiento = resp["codigo"];
                                            var operations = resp["operations"];
                                            var x_operations = operations.length;
                                            var totales = resp["totales"];
                                            var x_totales =resp["totales"].length;
                                            var lados = resp["lados"];
                                            var x_lados =resp["lados"].length;
                                            
                                            for(var indice=0; indice< x_operations; indice = indice+1){
                                               var operation =operations[indice];
                                                if(operation["tipo_mov_horno_id"]===5){
                                          
                                                    $("#datepicker_inicio_quema").val(operation["fecha_inicio"]);
                                                    $("#datepicker_fin_quema").val(operation["fecha_fin"]);
                                                    $("#agregar_tipo_mov1").attr("data-id_mov",operation["id"]);
                                                    $("#eliminar_tipo_mov1").attr("data-id_mov",operation["id"])
                                                }
                                                
                                                 if(operation["tipo_mov_horno_id"]===3){
                                          
                                                    $("#datepicker_inicio_enfria").val(operation["fecha_inicio"]);
                                                    $("#datepicker_fin_enfria").val(operation["fecha_fin"]);
                                                    $("#agregar_tipo_mov2").attr("data-id_mov",operation["id"]);
                                                    $("#eliminar_tipo_mov2").attr("data-id_mov",operation["id"])
                                                }
                                                  if(operation["tipo_mov_horno_id"]===2){
                                          
                                                    $("#datepicker_inicio_descarg").val(operation["fecha_inicio"]);
                                                    $("#datepicker_fin_descarg").val(operation["fecha_fin"]);
                                                    $("#agregar_tipo_mov3").attr("data-id_mov",operation["id"]);
                                                    $("#eliminar_tipo_mov3").attr("data-id_mov",operation["id"])
                                                }
                                                
                                                
                                                
                                            }
                                            
                                            
                                            
                                            for(var indice=0; indice<x_totales; indice = indice+1){
                                                  var total =totales[indice];
                                                  var fila="<tr><td>"+(indice+1)+"</td><td>"+total["producto"]+"</td><td>"+ number_format_coma(total["cantidad_total"])+"</td><td>0</td></tr>"
                                                  $("#body_total").append(fila);
                                            }
                                            
                                            for(var indice=0; indice<x_lados; indice = indice+1){
                                                  var lado = lados[indice];
                                                 
                                                if(lado["lado"]==="L1"){
                                                  var fila="<tr style='background:#eab600'><td>Lado 1</td><td>"+lado["producto"]+"</td><td>"+ number_format_coma(lado["cantidad"])+"</td><td>0</td></tr>"
                                                  $("#body_total_lado").append(fila);
                                                  $("#lado-1").css("background","#eab600");
                                                }
                                             if(lado["lado"]==="L2"){
                                                  var fila="<tr style='background:#a11c15' ><td>Lado 2</td><td>"+lado["producto"]+"</td><td>"+ number_format_coma(lado["cantidad"])+"</td><td>0</td></tr>"
                                                  $("#body_total_lado").append(fila);
                                                  $("#lado-2").css("background","#a11c15");
                                                }
                                                if(lado["lado"]==="L3"){
                                                    var fila="<tr style='background:#C44D58'><td>Lado 3</td><td>"+lado["producto"]+"</td><td>"+ number_format_coma(lado["cantidad"])+"</td><td>0</td></tr>"
                                                  $("#body_total_lado").append(fila);
                                                   $("#lado-3").css("background","#C44D58");
                                                }
                                                 if(lado["lado"]==="L4"){
                                                     var fila="<tr  style='background:#ad7400'><td>Lado 4</td><td>"+lado["producto"]+"</td><td>"+ number_format_coma(lado["cantidad"])+"</td><td>0</td></tr>"
                                                  $("#body_total_lado").append(fila);
                                                   $("#lado-4").css("background","#ad7400");
                                                }
                                               if(lado["lado"]==="Cr"){
                                                   var fila="<tr style='background:#26247b; color:#fff'><td>Centro</td><td>"+lado["producto"]+"</td><td>"+ number_format_coma(lado["cantidad"])+"</td><td>0</td></tr>"
                                                  $("#body_total_lado").append(fila);
                                                  $("#centro").css("background","#26247b");
                                                }   
                                            }
                                            
                                            
                                            
                                            
                                        }
                            
                                    }
             
    
                                });

     
 }



$("#eliminar_tipo_mov1, #eliminar_tipo_mov2, #eliminar_tipo_mov3").on("click", function(e){
    
      if($(this).attr("data-id_mov") !== ""){
          var id_eli =$(this).attr("id");
    
                     var   id_movimiento = $(this).attr("data-id_mov");
                  
                          $.ajax({
                                    type:"Post",
                                    dataType:"json",
                                    data:{  id:id_movimiento
                                    },
                                        url:"{{url('Simulador/Delete_movimiento')}}",
                                    success: function(resp){
                                        
                                           if($("#"+id_eli).attr("data-tipo_mov")==="5"){
                                          
                                                    $("#datepicker_inicio_quema").val("");
                                                    $("#datepicker_fin_quema").val("");
                                                    $("#agregar_tipo_mov1").attr("data-id_mov","");
                                                    $("#eliminar_tipo_mov1").attr("data-id_mov","")
                                                }
                                                
                                                 if($("#"+id_eli).attr("data-tipo_mov")==="3"){
                                          
                                                    $("#datepicker_inicio_enfria").val("");
                                                    $("#datepicker_fin_enfria").val("");
                                                   $("#agregar_tipo_mov2").attr("data-id_mov","");
                                                    $("#eliminar_tipo_mov2").attr("data-id_mov","")
                                                }
                                                  if($("#"+id_eli).attr("data-tipo_mov")==="2"){
                                          
                                                    $("#datepicker_inicio_descarg").val("");
                                                    $("#datepicker_fin_descarg").val("");
                                                    $("#agregar_tipo_mov3").attr("data-id_mov","");
                                                    $("#eliminar_tipo_mov3").attr("data-id_mov","")
                                                }
                                   
                                   
                                    alert(resp["message"])
                             
                                    return;
                                       
                           
                                    }
             
    
                                });
                        
                        
                }
    
});





    
                    $("#agregar_tipo_mov1, #agregar_tipo_mov2, #agregar_tipo_mov3").on("click", function(e){
                        var id_agrega = $(this).attr("id")
                            if(movimiento==="" ){
        e.preventDefault();
        alert("Registre un Movimiento");
        return;
    }

   
 var horno = {{$horno}};
 var tipo_movimiento = $(this).attr("data-tipo_mov");
 var fecha_inicia="";var fecha_finaliza="";
 if( tipo_movimiento === "5"){
     if($("#datepicker_inicio_quema" )==="" || $( "#datepicker_fin_quema" ).val()===""){
         alert("Ingrese los valores de Fechas Necesaria");
         return;
     }
     
     fecha_inicia =$("#datepicker_inicio_quema" ).val();
   fecha_finaliza =$( "#datepicker_fin_quema" ).val(); 
 }else if(tipo_movimiento === "3"){
          if($("#datepicker_inicio_enfria" ).val()==="" || $( "#datepicker_fin_enfria" ).val()===""){
         alert("Ingrese los valores de Fechas Necesaria");
         return;
     }
     
 
 
      fecha_inicia =$("#datepicker_inicio_enfria" ).val();
  fecha_finaliza =$( "#datepicker_fin_enfria" ).val();  
 }else if(tipo_movimiento === "2"){
     
     
               if($("#datepicker_inicio_descarg" ).val()==="" || $( "#datepicker_fin_descarg" ).val()===""){
         alert("Ingrese los valores de Fechas Necesaria");
         return;
     }
           fecha_inicia =$("#datepicker_inicio_descarg" ).val();
  fecha_finaliza =$( "#datepicker_fin_descarg" ).val(); 
 }



 var descripcion_d = "Quema del horno"+horno+" desde el "+fecha_inicia +" hasta el  "+ fecha_finaliza;
 
                 if($(this).attr("data-id_mov") !== ""){
    
                     var   id_movimiento = $(this).attr("data-id_mov");
                  
                          $.ajax({
                                    type:"Post",
                                    dataType:"json",
                                    data:{fecha_ini: fecha_inicia,fecha_fin: fecha_finaliza, horno_se:horno,
                                        tipo_mov:tipo_movimiento,descripcion:descripcion_d, id_cargue:movimiento,
                                        id:id_movimiento
                                    },
                                        url:"{{url('Simulador/Update_movimiento')}}",
                                    success: function(resp){
                                   
                                   
                                    alert(resp["message"])
                             
                                    return;
                                       
                           
                                    }
             
    
                                });
                        
                        
                }
 
 
 else{
  $.ajax({
                                    type:"Post",
                                    dataType:"json",
                                    data:{fecha_ini: fecha_inicia,fecha_fin: fecha_finaliza, horno_se:horno,
                                        tipo_mov:tipo_movimiento,descripcion:descripcion_d, id_cargue:movimiento},
                                        url:"{{url('Simulador/Registrar_movimiento')}}",
                                    //url:"ar",
                                    success: function(resp){
                                   
                                    alert(resp["message"])
                                     
                                        $("#"+id_agrega).attr("data-id_mov",resp["codigo"]);
                                       var indicador= $("#"+id_agrega).attr("data-indicador");
                                         $("#eliminar_tipo_mov"+indicador).attr("data-id_mov",resp["codigo"])
                                                   
                                        
                                    }
             
    
                                });
 }
  
});
    









  // actualizaremos el zoom cuando la ventana cambie de tamaño
  $(window).on("resize", actualizarTama);
  
  // y al cargar la página
  actualizarTama();


  var altura_lado1=$("#lado-1").height;
  $("#lado-4").height(altura_lado1);
  $("#lado-2").height(altura_lado1);


$("#btn_registrar").on("click", function(e){
        
        if(movimiento!==""){
            alert("Movimiento Registrado Anteriormente")
            return;
        }
    
 var horno = $("#horno_select option:selected").val();
 var fecha =$("#fecha_horno").text();
var tipo_movimiento = $("#tipo_mov").val();
 var mes = fecha.trim().substring(5, 7);
 var descripcion_d = "Cargue del horno en fecha "+ fecha +" del horno "+ horno;
  $.ajax({
                                    type:"Post",
                                    dataType:"json",
                                    data:{fecha_ini: fecha,fecha_fin: fecha, horno_se:horno,
                                        tipo_mov:tipo_movimiento,descripcion:descripcion_d},
                                        url:"{{url("Simulador/Registrar_movimiento")}}",
                                   // url:"Simulador/Registrar",
                                    success: function(resp){
                                        alert(resp["message"]);
                                        movimiento = resp["codigo"];
                                    
                                        $("#estructura").removeClass("hide").show();
                           
                                    }
             
    
                                });

  
});


$("#lado1").on("click", function(e){
    if(movimiento==="" ){
        e.preventDefault();
        alert("Registre un Movimiento");
        return;
    }
   var horno = $("#horno_select option:selected").val();
  $(this).attr("href", $(this).attr("href") + "/horno/"+horno+"/mov/"+movimiento);
       
       
       

});
$("#lado2").on("click", function(e){
        if(movimiento==="" ){
            e.preventDefault();
        alert("Registre un Movimiento");
        return;
    }
   var horno = $("#horno_select option:selected").val();

  $(this).attr("href", $(this).attr("href") + "/horno/"+horno+"/mov/"+movimiento);
       

});
$("#lado3").on("click", function(e){
        if(movimiento==="" ){
            e.preventDefault();
        alert("Registre un Movimiento");
        return;
    }
   var horno = $("#horno_select option:selected").val();

  $(this).attr("href", $(this).attr("href") + "/horno/"+horno+"/mov/"+movimiento);
       

});
$("#lado4").on("click", function(e){
        if(movimiento==="" ){
            e.preventDefault();
        alert("Registre un Movimiento");
        return;
    }
   var horno = $("#horno_select option:selected").val();

  $(this).attr("href", $(this).attr("href") + "/horno/"+horno+"/mov/"+movimiento);
       

});
$("#lado_centro").on("click", function(e){
        if(movimiento === ""){
            e.preventDefault();
        alert("Registre un Movimiento");
        return;
    }
   var horno = $("#horno_select option:selected").val();

  $(this).attr("href", $(this).attr("href") + "/horno/"+horno+"/mov/"+movimiento);
       

});

});




function number_format_coma(amount, decimals) {

            amount += ''; // por si pasan un numero en vez de un string
            amount = parseFloat(amount.replace(/[^0-9\.]/g, '')); // elimino cualquier cosa que no sea numero o punto

            decimals = decimals || 0; // por si la variable no fue fue pasada

            // si no es un numero o es igual a cero retorno el mismo cero
            if (isNaN(amount) || amount === 0)
                return parseFloat(0).toFixed(decimals);

            // si es mayor o menor que cero retorno el valor formateado como numero
            amount = '' + amount.toFixed(decimals);

            var amount_parts = amount.split('.'),
                regexp = /(\d+)(\d{3})/;

            while (regexp.test(amount_parts[0]))
                amount_parts[0] = amount_parts[0].replace(regexp, '$1' + ',' + '$2');

            return amount_parts.join('.');
        }


</script>
  @endsection