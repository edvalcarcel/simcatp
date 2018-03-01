@extends('layouts.app')


@section('content')
<div id="contenido" >
    <div class="row" style="background: #D4D5D6">
        <div class="col-md-12" style="background: #2d2d2d">
            <div class="panel panel-default" style="padding-top: 0" >
                    <div class="panel-heading" style="color:#fff; text-align: center; background: #2d2d2d; padding-top: 0;">
                        <h1 style="margin-top: 0; display: inline-block"><strong id="name_seccion">  </strong></h1>
                        <h1 style="margin-top: 0; display: inline-block"><strong><a href="{{url("Simulador/inicio/home_admin/".$fecha."/".$horno."")}}">Volver Inicio </a>      </strong></h1>
                    </div>
                <input type="hidden" name="movimiento" value="{{$mov}}" id="movimiento">
                
                     <div class="panel-body" style="padding-top: 0; background: #2d2d2d">
                     <div class="row"  style="background: #D4D5D6; color: #000000">
                         <div style="padding-top: 0px; background: #18bc9c" class="col-md-12">
                             <div id="contenedor_opciones_busquedad" style="background: #18bc9c" class="col-md-4">
                                 <div  id="opciones_busquedad">
                                    <div class="col-md-12">

                                        
                    
                                          
                                        <busquedas> </busquedas>
                                        
                                        <template id="busqueda-template">
                                            <div style="font-size: 24px" v-for="busqueda in busquedas" class="col-md-6" >
                                                @{{ busqueda.text }} 
                                                
                                                <input style="transform: scale(2)" v-bind:value="busqueda.text" v-model="valor_radio"
                                                      v-on:click="mostrar(valor_radio, $event)"  type="radio" name="busqueda" >
                                             
                                            </div>
                                            
                                        </template>
                           
                                    </div>
                                    <input style="font-size: 24px" v-bind:class=" clase_text"  class="col-md-12 bg-success"
                                            id="producto_buscar" type="text" name="codigo_producto">
                                    <select style="font-size: 24px"   v-bind:class="clase_lista" style="width: 100%" id="productos" class="col-md-12" >
                                @foreach ($productos as $producto)
                                <option  data-cod="{{$producto->codigo}}" data-nombre="{{$producto->nombre}}" 
                                         data-altura="{{$producto->alto}}" value="{{$producto->codigo}}">{{$producto->nombre}}</option>
                               @endforeach

                                 </select>
                                </div>

                                 <div id="contenedor_asignar_hilos" class="col-md-12">
                                    
                                     <div class="col-md-12 form-group" style="margin-top: 15px; padding-bottom: 5px; font-size: 24px; margin-bottom: 0">
                                         <label class="col-md-5" style="font-size: 24px " for="numero_hilos">Hilos de Daga</label>
                                     <div class="col-md-3">
                                         <input class="form-control" id="numero_hilos" style="font-size: 24px; height: 46px" type="number" name="numero_hilos">
                                     </div>
                                         <div class="col-md-4">
                                         <button id="agregar_daga" class="btn  " style="font-size: 18px;  color: #000000; font-weight: bolder">Agregar Daga</button>
                                          <button id="eliminar_daga" class="btn " style="font-size: 18px; margin-top: 5px; color: #000000; font-weight: bolder">Eliminar Daga</button>
                                     </div>
                                       </div>
                                     
                                    
                                      
                                   
                                       
                                 </div>
                                 
                             </div>
                             <div id="contenedor_dagas_check" style="background: #18bc9c; border-left: 10px #FFF solid" class="col-md-4">
                                 <div class="col-md-12" style="padding: 0;margin: 0; font-size: 24px" >
                                     <div class="col-md-12" ><input type="checkbox" style="transform: scale(2)" id="check_todas_selec" name="todas_checks" value="1"/>  Seleccionar Todas    </div>
                                 </div>
                                 <div  id="check_dagas" style="padding-top: 0; font-size: 24px; font-weight: bolder">
                                     
                                    
                                      
                                    
                                 </div>
                        
                             </div>
                             <div class="col-md-2" style="background: #18bc9c; border-left: 10px #FFF solid;border-right: 10px #FFF solid; padding: 0" >
                                 <div id="hilos_bloque" style="font-size: 24px; font-weight: bolder">
                                     <div class="col-md-12"  style="padding: 0">
                                         <div class="col-md-5" style="padding-left: 4px; padding-top: 4px   ">Hilos De</div>
                                          <div class="col-md-7" style="padding: 4px; padding-left:0">
                                      <select style="font-size: 24px"   v-bind:class="clase_lista" style="width: 100%" id="producto_parrilla" class="col-md-12" >
                                @foreach ($productos as $producto)
                                <option  data-cod="{{$producto->codigo}}" data-nombre="{{$producto->nombre}}" 
                                         data-altura="{{$producto->alto}}" value="{{$producto->codigo}}">{{$producto->nombre}}</option>
                               @endforeach

                                 </select>
                                          </div>
                                          </div>
                                     <div class="col-md-6" ><input style="margin-left: 25%; transform: scale(2)" type="radio"   id="hilo_bloque" name="hilo_bloque" value="1"> 1</div>
                                     <div class="col-md-6" ><input style="margin-left: 25%; transform   : scale(2)" type="radio" id="hilo_bloque" name="hilo_bloque" value="2"> 2</div>
                                     <div class="col-md-6" ><input style="margin-left: 25%; transform: scale(2)" type="radio"   id="hilo_bloque" name="hilo_bloque" value="3"> 3</div>
                                     <div class="col-md-6" ><input style="margin-left: 25%; transform: scale(2)" type="radio"   id="hilo_bloque" name="hilo_bloque" value="4"> 4</div>
                                     <div class="col-md-6" ><input style="margin-left: 25%; transform: scale(2)" type="radio"   id="hilo_bloque" name="hilo_bloque" value="5"> 5</div>
                                     <div class="col-md-6" ><input style="margin-left: 25%; transform: scale(2)" type="radio"   id="hilo_bloque" name="hilo_bloque" value="6"> 6</div>
                                     <div class="col-md-6" ><input style="margin-left: 25%; transform: scale(2)" type="radio"   id="hilo_bloque" name="hilo_bloque" value="7"> 7</div>
                                     <div class="col-md-6" ><input style="margin-left: 25%; transform: scale(2)" type="radio"   id="hilo_bloque" name="hilo_bloque" value="8"> 8</div>
                                           

                                 </div>
                        
                             </div>
                             <div style="background:#18bc9c" id="contenedor_botones" class="col-md-2" >
                                 <button   style="font-size: 24px; background: #2d2d2d; color:#fff; border-color: #2d2d2d; margin-top: 10px"
                                          id="btn_llenar" class="col-md-12" type="">Llenar</button>
                                 <button style="font-size: 24px; background: #2d2d2d; color:#fff; border-color: #18bc9c; margin-top: 10px " class="col-md-12  hide" style="margin-top: 5px; font-weight: bolder; color: black" disabled id="cod_prod_seles"   ></button>
                                 <button style="font-size: 24px; background: #AF5128; color:#fff; border-color: #18bc9c; margin-top: 10px " class="col-md-12 " style="margin-top: 5px; font-weight: bolder; color: black" id="Registrar"   >Registrar</button>
                                     <button style="font-size: 24px; background: #AF5128; color:#fff; border-color: #18bc9c; margin-top: 10px " class="col-md-12 hide " style="margin-top: 5px; font-weight: bolder; color: black" id="graficar"   >Graficar</button>
                             </div>
                         </div>

                    </div>
                         <div id="contenedor_total"  style="background: #D9DADB; margin-top: 10px" >
                                  
                                <div   id="centro_horno" style="z-index: 2">
                                             
                                  
                                         <div style="width: 2000px"  id="contendor_dagas">
                                           
                                             </div>
                                    
                                           
                                         </div>
                                    
                                <div  id="resumen_hornos"  style="z-index: 1; background: #2d2d2d"  >
                                         <table id="tabla_resumen" class="table table-bordered">
                             <thead  >
                          
                                 <td class="col-md-6">Productos</td>
                                 <td class="col-md-3">Unidades</td>
                                 <td class="col-md-3">Kilos</td>
                            
                             </thead>
                             <tbody >


                             </tbody>
                         </table>


                         <table class="table table-bordered" style="font-size: 24px">
                                <thead>
                                    <tr>
                                    <td>Nombre</td>
                                    <td>Ver</td>
                                    <td>Imprimir</td>
                                    </tr>
                                </thead>
                                
                                
                                  <<tbody  id="dagas_resumidas">
                                     
                                  </tbody>                         
                          
                                                    
                                                           </table>
                        

                                 </div>
                            </div>


                    </div>
            </div>
        </div>
    </div>
</div>
<div>

    
    
</div>

    <style>
         div.ui-datepicker {
        font-size: 150%;
    }
    </style>






 <div class="modal fade " id="inforModal">
        <div class="modal-dialog " role="document">
            <div class="modal-content bg-success ">
                <div class="modal-header bg-success" style="padding-bottom: 0; padding-top: 10px">
                    <h4 class="modal-title" style="text-align: center; font-size: 24px"><strong>
                            Información
                        </strong></h4>
                </div>
                <div class="modal-body  bg-success" style="padding-top: 0; padding-bottom: 0">
                    <strong> <p id="infor_mostrar" class="bg-success" style=" font-weight:bolder;font-size: 24px; text-align: center;margin: 0; color: #000">
                            
                    </p></strong>
                    
                    <div class="col-md-6 col-md-offset-3" style="text-align: center" id="estado_operacion" >
                        <img id="logo_cargando" src=""/>
                    </div>
                </div>
                <div class="modal-footer bg-success" style="padding-top: 0">
        <button type="button" class="btn btn-secondary col-md-6 col-md-offset-3" style="background: #2d2d2d; color:#fff; font-size: 24px" data-dismiss="modal">Cerrar</button>
      </div>

            </div>
        </div>
    </div>
<div class="modal" id="modal_cargando">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
        <div class="modal-body" style="text-align: center; background: #2d2d2d; color:#fff">
        <img src="/SimCaTP/public/img/cargando.gif"/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary col-md-6 col-md-offset-3" style="background: #2d2d2d; color:#fff" data-dismiss="modal">Cargando</button>
      </div>
    </div>
  </div>
</div>


<div class="modal" id="modal_grafica">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
        <div class="modal-body" style="text-align: center; background: #2d2d2d; color:#fff">
      <div id="render" style="overflow:hidden"></div>  
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary col-md-6 col-md-offset-3" style="background: #2d2d2d; color:#fff" data-dismiss="modal">Cargando</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('script')

<script type="text/javascript">


    function actualizarTama() {
     /*     if((window.innerWidth / 3500)<0.340000){
           
           alert("lOS CONTROLES SE DESORDENARAN ESTABLESCA EL ZOOM ADECUADO")
    return;
  }*/
    $("body").css("zoom", window.innerWidth / 2500);

  
  
  

  
}

$(document).ready(function() {
    
    
    
    
    
 
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

  // actualizaremos el zoom cuando la ventana cambie de tamaño
  $(window).on("resize", actualizarTama);

  // y al cargar la página
  actualizarTama();
  
});











    
        var seccion = "{{$seccion}}";
        $("#name_seccion").text("Seccion "+ seccion +" -----")
       var operacion_click=""
       var    suma_hijos_total=0;
       var hijos_recorrridos_click =0;
           var ejecucion=0;
        $(document).on("ready", function (e) 
            {


                
                
                


                 
                Cargar_datos_bd()
                function Cargar_datos_bd(){
                       var movimiento = $("#movimiento").val();
                      $.ajax({
                                    type:"post",
                                    dataType:"json",  
                                    data:{seccion_se: seccion, id_mov:movimiento},

                                    url:"{{url('Simulador/obtener_items')}}",                           
                                   // url:"Simulador/cargar_productos",
                                   
                                    success: function(resp){
                                        //console.log(resp)
                                        ejecucion=1;
                                        var items = resp["items"]
                                        if(items.length ===0){
                                             cargar_iniciales()
                                            // alert();
                                            ejecucion=0;
                                            return;
                                        }else{
                                            
                                        
                                         $("#centro_horno div#contendor_dagas").empty();
                                         $("#check_dagas").empty();
                                        
                                        
                var daga ="";
                var check_daga=""
                 var dagas_centro = parseFloat(resp["daga_mayor"]);
       
               
                 for(var num_daga =1; num_daga<= (dagas_centro); num_daga = num_daga+1)
                 {
                               //alert(dagas_centro)
                        check_daga += "<div class='col-md-4'><input style='font-size: 150%' id='check_daga' data-daga='daga"+num_daga+"' type='checkbox' name='check_daga' value='daga"+num_daga+"' /> Daga "+num_daga+"  </div>"
                    
                   for(var num_hilo = 0; num_hilo <= parseFloat(resp["hilo_mayor"]-2); num_hilo = num_hilo+1)
                    {
                        if(num_hilo===0)
                        {
                            daga +="<div id ='daga"+num_daga+"' data-hilos='10' data-altura_asignada='0' class='daga'>";
                            daga +="<section style='height:30px;color:black; border:0; background:none; text-align:center;font-weight:bolder;font-size:16px' id ='nombre_daga'  data-daga='daga"+num_daga+"' class='hilo'>";
                            daga +="<div class='col-md-12' style='padding:0' >DAGA "+num_daga+"</div><div class='col-md-12'  style='padding:0; color:red; font-weight: bolder' id='altura_asignada_daga"+num_daga+"'>0.0 Mt</div></section>";
                            daga +="<div id ='hilo0'  data-altura='0'  data-daga='daga"+num_daga+"' class='hilo'></div>";
                             
                        }
                        else if(num_hilo===parseFloat(resp["hilo_mayor"]-2))
                        {

                            daga += "<div id ='hilo"+num_hilo+"'  data-daga='daga"+num_daga+"'  class='hilo'>";
                            daga +="<div id='producto' data-cantidad='80' data-nombre='' data-codigo='' data-altura='0' data-imagen=''><p>&nbsp;</p></div>";
                           daga += "<div id='spanes'><span id='eliminar' data-hilo='hilo"+num_hilo+"' data-daga='daga"+num_daga+"' class='glyphicon glyphicon-remove-circle ' aria-hidden='true'></span>";
                           daga += "<span id='agregar' data-hilo='hilo"+num_hilo+"' data-daga='daga"+num_daga+"' class='glyphicon glyphicon-plus' aria-hidden='true'></span></div>";
                              daga +=     "</div></div>";
                                  
                        }
                        else
                        {
                                        daga += "<div id ='hilo"+num_hilo+"'  data-daga='daga"+num_daga+"' data-cantidad='80'  class='hilo'>";
                                        daga+="<div id='producto' data-cantidad='80' data-nombre='' data-codigo='' data-altura='0' data-imagen=''><p>&nbsp;</p></div>"
                           daga += "<div id='spanes'><span id='eliminar'  data-hilo='hilo"+num_hilo+"' data-daga='daga"+num_daga+"' class='glyphicon glyphicon-remove-circle btn-lg' aria-hidden='true'></span>";
                           daga += "<span id='agregar'  data-hilo='hilo"+num_hilo+"' data-daga='daga"+num_daga+"' class='glyphicon glyphicon-plus' aria-hidden='true'></span></div>";
                               daga += "</div>";
                                
                        }

                        
                    }
                

                     $("#centro_horno div#contendor_dagas").append(daga);
                    
                     daga="";
                     $("#check_dagas").append(check_daga);
                     check_daga="";
                                   var altura=  $("#centro_horno div#contendor_dagas").height();
              
                $("div#medidor_altura").height(altura)
                }
                }
                
                                        
                                        
        
        
                                           
                                        
                                            for(var x=0; x<items.length; x=x+1){
                                                var datos = items[x]
                                                //console.log(parseFloat(datos["daga"]))
                                                if(x === (resp.length-1) ){
                                                    ejecucion =0;
                                                }
                                            $(" select#productos").val(datos["codigo"]);
                                            $(" select#productos").change();
                                           
                                             $("div#daga"+ parseFloat(datos["daga"])+" div.hilo:nth-child("+ parseFloat(datos["hilo"])+")").click();
                                             
                                            }
                                             for(var num_daga =1; num_daga <= parseFloat(resp["daga_mayor"]); num_daga = num_daga+1)
                                                {
                                                 //   alert(parseFloat(resp["daga_mayor"]))
                                                     $("div#daga"+ num_daga+" div.hilo > div[data-altura=0]").parent().remove();
                                                }
                                                calcular_cantidades()
                                                
                                                    var dagas_centro = $("#contendor_dagas > div.daga").length;
                                          var contador_alturas=0;
                                            var alturas_dagas_todas = [];
                                        for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {

                                            
                                              altura_dagas_dato=$("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight();

                                                    alturas_dagas_todas.push(altura_dagas_dato); 
                                            }

                                                 var daga_alta= Math.max.apply(null,alturas_dagas_todas);


                                              //      $("#contendor_dagas").height(daga_alta);
                                             

                                    var altura_contenedor = $("#contendor_dagas").outerHeight();
                                   
                                    var dagas_centro = $("#contendor_dagas > div.daga").length;
                                          var contador_alturas=0;
                                            var vacios = [];
                                    for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {
                                        
                                                var altura_actual_daga =($("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight());
                                                              

                                                  var altura_vacio= daga_alta - altura_actual_daga;
                                                  
                                                  $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight(altura_vacio);
                                                  $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").css("margin-top",altura_vacio);
                                                        $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").css("margin-top",-altura_vacio);

                                                  /* $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").animate({
                                                                                              height: altura_vacio
                                                                                               },
                                                                                               100, function() {
                                                                                                                            
                                                                                                });*/
                                                }
                                      
                                 
                       
                                    },
                                            error:function(){
                                                 cargar_iniciales()
                                           
                                            ejecucion=0;
                                            }
             
    
                                });
                }
                
                
                
             
                 var ultimo_hijo_recorrido=0;
                 var daga_a_recorrer=0;
                        $("#cerrar_info").on("click", function(e){
                            $("#inforModal").modal("hide");
                         });
                
                $.ajax({
                                    type:"Post",
                                    dataType:"json",       

                                    url:"{{url("Simulador/cargar_productos")}}",                           
                                   // url:"Simulador/cargar_productos",
                                    success: function(resp){
                                        var largo = resp.length;
                                    for(var x=0;x<largo; x=x+1)
                                        {
                                        item = resp[x];
                                        localStorage.setItem(item["nombre"], item["codigo"]);                                        
                                        }
 
                       
                                    }
             
    
                                });
                
                String.prototype.trim = function() { return this.replace(/^\s+|\s+$/g, ""); };
                
                 $( "input#producto_buscar" ).keyup(function(e){
                    var texto=$( "input#producto_buscar" ).val();
                    var source=[];  var item;
                    var texto_espacios = texto.trim();
                    
                         $.ajax({
                                    type:"Post",
                                    dataType:"json",
                                    data:{nombre_producto: texto_espacios},
                                    url:"{{url("Simulador/autocomplete")}}", 
                                    //url:"Simulador/autocomplete",
                                    success: function(resp){
                                        var largo = resp.length;
                                    for(var x=0;x<largo; x=x+1)
                                        {
                                        item = resp[x];
                                        source.push(item["nombre"]);
                                        }
                                      $( "#producto_buscar" ).autocomplete({
                                       source: source
                                     
                                        });
                       
                                    }
             
    
                                });
                        });
                 
        
        
        $( "input#producto_buscar" ).keyup(function(e){
                      if(e.which === 13) {
                    var codigo = localStorage.getItem($( "input#producto_buscar" ).val());
                    if(codigo===null){
                        $("p#infor_mostrar").empty();
                    $("p#infor_mostrar").text("El Producto Seleccionado no es Correcto");
                    $( "input#producto_buscar" ).val("");
                    $("button#cod_prod_seles").text(" ");
                    $("button#cod_prod_seles").css("background","none");
                    
                    $("#inforModal").modal();
                    return;
                    }
                    $("select#productos").val(codigo).change(); 
                    $("button#cod_prod_seles").text(codigo);
                      }
                      
                      
                      
                      
                      
                      var colores_cargados=[   "#A99D9D", "#E9AB00",
                                "#AD0000", "#EF5F69", "#0325A3",  "#B9A737",
                                "#5B6B00", "#FF00C9", "#FF5300", "#00AD75", "#570000", "#8500EB" ,
                                "#00A5CF", "#4FB7B1", "#67FF65", "#C1C999","#DF63DF","#F99100","#19731B"]
                      
                      
                      
                      
                      
                      
                      
                      
                      var productos_resumen =$("#tabla_resumen tbody tr").length;
                                            var resto  = productos_resumen % 2;
                                            var clase_color="uno"
                                            if(resto>1){
                                                clase_color="uno"
                                            } else{
                                                clase_color="dos";
                                            }
                                             var productos =$("#tabla_resumen tbody tr").length;
                                                       var color=1;
                                            var respuesta= verificar_en_tabla_resumen(producto_selec);
                                            var nuevo_producto =0;
                                            if(respuesta===0){
                                            
                                                color= 1;
                                         
                                                var verifica_color=0;
                                                if(productos>0){
                                                  
                                                            
                                                      color = -1;
                                                    do {
                                                        color = color+1;
                                                        verifica_color=0;

                                                   for(var x = 1; x<= productos; x = x+1)
                                                    {
                                                       color_hilo= $("#tabla_resumen tbody tr:nth-child("+x+") td:nth-child("+1+") div#color_identificador").attr("data-background");
                                                      // alert(" color actual tabla "+ color_hilo+ " nuevo color de lista  "+ colores_cargados[color])
                                                       if(colores_cargados[color] !== color_hilo )
                                                       {
                                                        verifica_color =verifica_color+ 1;
                                                    //    alert("cantidad de veces repetida con color " +color );
                                               

                                                       } 

                                                    }


                                                  //alert(" fin del do ahora verifica quedo en " + verifica_color +" y productos"+ productos)
                                                }
                                                    while (verifica_color !== productos)
                                                    }
                                                nuevo_producto=1;

                                            }

                                                var color_fondo="";
                                            for(var x = 1; x<= productos; x = x+1)
                                                    {

                                                      var codigo_prod =$("table#tabla_resumen tbody tr:nth-child("+x+") td div#porducto_cargado").attr("data-cod");

                                                       if(codigo_prod===producto_selec )
                                                       {
                                                        color_fondo=$("#tabla_resumen tbody tr:nth-child("+x+") td:nth-child("+1+") div#color_identificador").attr("data-background");
                                                        break;

                                                       }     
                                                    }


                                                 if(nuevo_producto===1){
                                                
                                            
                                             $("button#cod_prod_seles").css({
                                                "background" : colores_cargados[color]
                                                
                                                  });
                                                 }else{
                                               
                                                    $("button#cod_prod_seles").css({
                                                "background" : color_fondo
                                                
                                                  });
                                                 }

                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      
                     // alert(localStorage.getItem($( "input#producto_buscar" ).val()))

                   
           
                  });       
              
            
                var id_registro="";
carga_graficas()
function carga_graficas(){
    
     var movimiento = $("#movimiento").val();
                                       
                        
                                                     $.ajax({
                                    type:"Post",
                                    dataType:"json",
                                    data:{ movimiento_se:movimiento},
                                        url:"{{url("Simulador/Registrar")}}",
                                   // url:"Simulador/Registrar",
                                    success: function(resp){
                                        $("button#Registrar").text("Registrado");
                                       
                                        id_registro=resp["id"];
                                            
                                            
                                            
                                                      $.ajax({
                                    type:"Get",
                                    dataType:"json",
                                    url:"/SimCaTP/public/Graficas/"+id_registro+"/graficar/pagina",
                                    success: function(resp){
                                        $("#dagas_resumidas").empty();
                                       m = resp.length;
                                        //console.log(resp)
                                       for(var n =0; n<m; n= n+1){
                                        var item =resp[n];
                                       
                                      
                                        $("#dagas_resumidas").append('<tr><td style="color:#fff; font-weight:bolder">'+item["grupo"]+' Secccion '+item["seccion"]+'</td>'+
                                    '<td><a target="_blank" href="http://192.168.1.189:8080/grafica/?id_grafica='+item["grafica_id"]+'&id_daga='+item["cod_daga"]+'&seccion={{$seccion}}">Ver</a></td>'+
                                    '<td><a target="_blank" href="http://192.168.1.189:8080/grafica/?id_grafica='+item["grafica_id"]+'&id_daga='+item["cod_daga"]+'&seccion={{$seccion}}&imprimir=true">Imprimir</'+
                                    'a></td></tr>');
                                       
                                       }

                                       

                                  
                                    }
             
    
                                });
                           
                                    }
             
    
                                });
    
    
       

}




            $("button#Registrar").on("click",function(){
                     var movimiento = $("#movimiento").val();
                        
                        
                                                     $.ajax({
                                    type:"Post",
                                    dataType:"json",
                                    data:{ movimiento_se:movimiento},
                                        url:"{{url("Simulador/Registrar")}}",
                                   // url:"Simulador/Registrar",
                                    success: function(resp){
                                      //  $("button#Registrar").text("Registrado");
                                        //$("button#Registrar").attr("disabled", "true");
                                       // $("button#Registrar").css("background","#000000");
                                        id_registro=resp["id"];
                                   $("button#graficar").click();
                           
                                    }
             
    
                                });

            });







            var graficar=[];
            var dagas_grafica=[];
            $("button#graficar").on("click",function(){
                var llamado =0;
                var error_registro="";
            graficar=[];
            dagas_grafica=[];
            var my_id="";
            var cuenta=0;
                 var dagas_centro = $("#contendor_dagas > div.daga").length;
                 
                     var codigo_hilo="";
                        var productos =$("#tabla_resumen tbody tr").length;

                        var cantidad=0;
                        var suma_altura=0;
                        var aumento_altura=0;
                 
                   
                    $.ajax({
                                    type:"Post",
                                    dataType:"json",
                                    data:{id:id_registro,seccion_se:seccion},
                                     url:"{{url("Simulador/Graficar_delete")}}",
                                   // url:"Simulador/Graficar",
                                    success: function(resp){
                                        
                                       
                           
                                    },error(xhr,status,error){
                                         error_registro = "A ocurrido un error "+ error;
                                    }
                                });
             
    
                   
                   
                   
                   
                   
                   
                      setTimeout(function()
                         {
                   
                     for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                    {
                            var codigo_daga="daga-";

                        var hilos_de_cada_daga= $("div.daga:nth-child(" +num_daga+"").children('div.hilo').length+1;

                  
                           for(var num_hilo = 1; num_hilo <= hilos_de_cada_daga; num_hilo = num_hilo+1)
                            {
                                        if(num_hilo>2){
                                           codigo_hilo = $("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+") div#producto").attr("data-codigo");
                                           color_hilo =  $("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+")").css("background-color");

                                  var posicion_unida=num_daga+"-"+num_hilo;
                                  graficar.push({daga:num_daga,hilo:num_hilo, producto:codigo_hilo, posicion:posicion_unida, color:color_hilo});
                                  codigo_daga +="h"+num_hilo+"-"+codigo_hilo+"-"+seccion+"+";
                                 // alert("la daga "+ num_daga+" el hilo"+ num_hilo);
 
                                        }

                                  
                            }  
                              
                             
                                     $.ajax({
                                    type:"Post",
                                    dataType:"json",
                                    data:{graficar: graficar, id:id_registro,mes:"Septiembre",nombre:"Programa",descripcion:"DEscribeme", codigo_daga:codigo_daga, daga:num_daga,seccion_se:seccion,llamado_re:num_daga},
                                     url:"{{url("Simulador/Graficar")}}",
                                   // url:"Simulador/Graficar",
                                    success: function(resp){
                                        
                                       
                           
                                    },error(xhr,status,error){
                                         error_registro = "A ocurrido un error "+ error;
                                    }
             
    
                                });
                                     graficar=[];

                        
                    } }, 1500);
                    
                    if(error_registro !== ""){
                       alert( error_registro);
                       
                       $.ajax({
                                    type:"Delete",
                                    dataType:"json",
                                    data:{id:id_registro},
                                   
                                    url:"/SimCaTP/public/Graficas/"+id_registro,
                                    success: function(resp){
                                        
                                       alert("Vuelva a Registrar La Grafica");
                           
                                    },error(xhr,status,error){
                                         alert("Recargue la pagina e intente nuevamente");
                                    }
             
    
                                });
                       
                    }else{
                        $("p#infor_mostrar").empty();
                    $("p#infor_mostrar").text("Datos Cargandose Espere un momento");
                   $("img#logo_cargando").attr("src","img/cargando.gif")
                    $("#inforModal").modal();
                           
                         setTimeout(function()
                         {
                             
                             console.log(productos_lista);
                               $.ajax({
                                
                                    type:"Post",
                                    dataType:"json",
                                    data:{productos:productos_lista, cantidades:cantidades_lista,
                                    lado:seccion,id_grafica:id_registro},
                                    url:"{{url('Simulador/Registrar_totales')}}",
                                    success: function(resp){
                                      
                                          
                                         $.ajax({
                                
                                    type:"Get",
                                    dataType:"json",
                                    url:"/SimCaTP/public/Graficas/"+id_registro+"/graficar/pagina",
                                    success: function(resp){
                                       m = resp.length;
                                        $("#dagas_resumidas").empty();
                                       for(var n =0; n<m; n= n+1){
                                        var item =resp[n];
                                     
                                        $("#dagas_resumidas").append('<tr><td style="color:#fff; font-weight:bolder">'+item["grupo"]+' Secccion '+item["seccion"]+'</td>'+
                                    '<td><a target="_blank" href="http://192.168.1.189:8080/grafica/?id_grafica='+item["grafica_id"]+'&id_daga='+item["cod_daga"]+'&seccion={{$seccion}}">Ver</a></td>'+
                                    '<td><a target="_blank" href="http://192.168.1.189:8080/grafica/?id_grafica='+item["grafica_id"]+'&id_daga='+item["cod_daga"]+'&seccion={{$seccion}}&imprimir=true">Imprimir</'+
                                    'a></td></tr>');
                                       
                                       }

                                       

                                    $("#inforModal").modal("hide");
                                    }
             
    
                                });


                                   
                                    }
             
    
                                });

                             
                             
                             
                             
                             
                             
                             
                             
                             
                             
                             
                             
                             
                          
                         
                        }, 4000);
                   
                         







                    }
                    
                
            });

            $("input#codigo_producto").on("change", function(){
                  
                
              });
          

                function verificar_en_tabla_resumen(codigo){
                        var productos =$("#tabla_resumen tbody tr").length;
                        var respuesta=0;
                     for(var x = 1; x<= productos; x = x+1)
                    {
                       var codigo_producto =  $("table#tabla_resumen tbody tr:nth-child("+x+") td div#porducto_cargado").attr("data-cod");
                       if(codigo=== codigo_producto)
                       {
                        respuesta= respuesta+ 1;

                       }     
                    }
                    return respuesta;


                }
                var cantidades=[];
                @foreach ($cantidades as $cantidade)
               localStorage.setItem("{{$cantidade->codigo}}", "{{$cantidade->cantidad}}");
                        @endforeach

//alert( localStorage.getItem("Cr_D-6_H-9_B 5-30"))
                        
           var productos_lista=[];
           var cantidades_lista=[];
                function calcular_cantidades()
                {
                 productos_lista=[];
                cantidades_lista=[];
                     var dagas_centro = $("#contendor_dagas > div.daga").length;
                 
                     var codigo_hilo="";
                        var productos =$("#tabla_resumen tbody tr").length;

                        var cantidad=0;
                        var suma_altura=0;
                        var aumento_altura=0;

                      for(var x = 1; x<= productos; x = x+1)
                    {
                    var codigo_producto =  $("table#tabla_resumen tbody tr:nth-child("+x+") td div#porducto_cargado").attr("data-cod");
                   
                     for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                    {
           
                     //  var hilos_de_cada_daga= $("div#daga"+ num_daga).children('div.hilo').length+1;
                        var hilos_de_cada_daga= $("div.daga:nth-child(" +num_daga+"").children('div.hilo').length+1;
                      // alert(hilos_de_cada_daga)
                      var factor_altura =0;
                            var suma_altura_daga=0;
                           for(var num_hilo = 1; num_hilo <= hilos_de_cada_daga; num_hilo = num_hilo+1)
                            {
                                
                               var codigo_hilo_suma_cantidad="";
                              codigo_hilo = $("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+") div#producto").attr("data-codigo");
                              if(parseFloat($("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+") div#producto").attr("data-altura"))){
                                // console.log("antes "+ suma_altura_daga + "hello " +$("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+(hilos_de_cada_daga-num_hilo+3)+") div#producto").attr("data-codigo"));
                                    factor_altura =Math.round(parseFloat( suma_altura_daga)*100/5);
                                    if(factor_altura===0){
                                        factor_altura=1;
                                    }
                                   // console.log(factor_altura +" altura"+ suma_altura_daga*100)
                                 suma_altura_daga= suma_altura_daga+ parseFloat($("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+(hilos_de_cada_daga-num_hilo+3)+") div#producto").attr("data-altura"));
                                 suma_altura= suma_altura+parseFloat($("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+") div#producto").attr("data-altura"));

                                 // console.log("despues "+ suma_altura_daga+ " del prod "+$("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+(hilos_de_cada_daga-num_hilo+3)+") div#producto").attr("data-codigo"));
                                   var codigo_hilo_suma_cantidad =$("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+(hilos_de_cada_daga-num_hilo+3)+") div#producto").attr("data-codigo");

                              }else{
                                   aumento_altura=0;
                              }
                              
                             // alert($("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo"+num_hilo+" div#producto").attr("data-cantidad"));
                             if(codigo_producto ===  codigo_hilo_suma_cantidad /*codigo_hilo*/)
                             {
                                
                                codigo_cantidad = seccion+"-"+num_daga+"-"+ codigo_hilo_suma_cantidad+"-"+factor_altura;
                                var validacion =localStorage.getItem(codigo_cantidad)
                             if( validacion===""){
                                   alert(codigo_cantidad+" daga "+num_daga+" hilo "+num_hilo);
                                    $("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+(hilos_de_cada_daga-num_hilo+3)+")").css("background","#fff")
                             }
                               // console.log(codigo_cantidad+ " local "+localStorage.getItem(codigo_cantidad));

                               // cantidad= cantidad +parseFloat($("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+") div#producto").attr("data-cantidad"));
                               
                                cantidad= cantidad +parseFloat( localStorage.getItem(codigo_cantidad));
                       
                           
                             
                        

                             } 
                             
                               
                                
                              
                            }
                          suma_altura= suma_altura.toFixed(2);
                            $("div#daga"+ num_daga+" > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").text(suma_altura+" Mt");
                           suma_altura=0;                      
                
                           
                           
                                
                              
                           
                        
                    }
//                    alert(cantidad);
                        if(cantidad===0){

                            $("#tabla_resumen tbody tr:nth-child("+x+")").remove();

                        }else{
                         $("#tabla_resumen tbody tr:nth-child("+x+") td:nth-child("+2+")").text(cantidad);
                         console.log(cantidad) 
                            productos_lista.push(codigo_producto);
                             cantidades_lista.push(cantidad);
                           
                          cantidad=0;  

                        }


                    }
                    
                
                     if(operacion_click !== ""){
                         
                     
                    for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                    {
                        
                        var hilos_de_cada_daga= $("div#daga"+ num_daga).children('div.hilo').length+1+2;
                        for(var num_hilo = 1; num_hilo <= hilos_de_cada_daga; num_hilo = num_hilo+1)
                            {
                                var id =$("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+")").attr("id");
                             if( id !== undefined && id !== "hilo0" ){
                                 var nuevo_id = "hilo"+(num_hilo-2);
                                 var nueva_daga ="daga"+num_daga;
                                 $("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+")").attr("data-daga","daga"+num_daga)
                                 $("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+")").attr("id",nuevo_id)

                                 $("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+")  div#spanes span#agregar").attr("data-daga",nueva_daga );
                                 $("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+")  div#spanes span#agregar").attr("data-hilo",nuevo_id);

                                 $("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+")  div#spanes span#eliminar").attr("data-daga",nueva_daga );
                                 $("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+")  div#spanes span#eliminar").attr("data-hilo",nuevo_id);
                                 /*  $("div#"+ daga).children("div#"+id_hilo).after("<div id ='hilo"+hijo_nuevo+"' data-cantidad=''  data-daga='"+daga+"' class='hilo'>"+
                                        "<div id='producto' data-cantidad='80' data-altura='' data-imagen=''><p>&nbsp;</p></div>"+
                                            "<div id='spanes'><span id='eliminar' data-hilo='hilo"+hijo_nuevo+"' data-daga='"+daga+"' class='glyphicon glyphicon-remove-circle ' aria-hidden='true'></span>"+
                                            "<span id='agregar' data-hilo='hilo"+hijo_nuevo+"' data-daga='"+daga+"' class='glyphicon glyphicon-plus' aria-hidden='true'></span></div>"+
                                            "</div></div>");*/
                             }
                            }
                        
                    }
                    
                    operacion_click=""
                    
                }
                
                    
                }
       
       
       
       
       
       
       
       
       //////////////////////////////////////////////////////////////////////////
       /////////////////////////////////////////////////////////////////////////
       ///////////////////////////FIN CALCULAR CANTIDADES
       //////////////////////////////////////////////////////////////////////////
       /////////////////////////////////////////////////////////////////////////
       
       
       
       
       
        $("button#eliminar_daga").on("click", function(e)
                {
                    
                    var dagas= $("#check_dagas div input#check_daga").length;
                   var hijos_eliminar=0;
                    for(var x=1; x<=dagas; x=x+1)
                    {
                    if($("#check_dagas div:nth-child("+x+") input#check_daga").prop('checked')===true){
                        var daga_selec= $("#check_dagas div:nth-child("+x+") input#check_daga").attr("data-daga");
                          $("#contendor_dagas >div#"+daga_selec).remove();
                          hijos_eliminar= hijos_eliminar+1;
                        }
                    }
                    for(var m=1; m<=hijos_eliminar; m=m+1){
                         $("#check_dagas div:last-child").remove();
                    }
                   
                    
                     var dagas_centro = $("#contendor_dagas > div.daga").length;

                     for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                    {
                        $("div.daga:nth-child(" +num_daga+"").attr("id","daga"+num_daga);  
                       $("#contendor_dagas >div.daga:nth-child(" +num_daga+") section#nombre_daga div:nth-child(1)").text("DAGA"+num_daga );
                       $("#contendor_dagas >div.daga:nth-child(" +num_daga+") section#nombre_daga").attr("data-daga","daga"+num_daga );
                       $("#contendor_dagas >div.daga:nth-child(" +num_daga+") section#nombre_daga div:nth-child(2)").attr("id","altura_asignada_daga"+num_daga );
                         var hilos_de_cada_daga= $("div#daga"+ num_daga).children('div.hilo').length+1+2;
                        for(var num_hilo = 1; num_hilo <= hilos_de_cada_daga; num_hilo = num_hilo+1)
                            {
                                var id =$("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+")").attr("id");
                                if( id === "hilo0" ){
                                    $("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+")").attr("data-daga","daga"+num_daga)
                                }
                             if( id !== undefined && id !== "hilo0" ){
                                 var nuevo_id = "hilo"+(num_hilo-2);
                                 $("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+")").attr("data-daga","daga"+num_daga)
                                 $("#contendor_dagas >div.daga:nth-child(" +num_daga+") > div.hilo:nth-child("+num_hilo+")").attr("id",nuevo_id)
                             }
                            }
                        
                      
                    }
                 /*
                  $("#contendor_dagas >div.daga:nth-child(" +x+"").attr("id","daga"+x);
                           $("#contendor_dagas >div.daga:nth-child(" +x+" section#nombre_daga div:nth-child(0)").text("DAGA "+x);
                 */
                  
                  
                  
                  
                      
                 var dagas_centro = $("#contendor_dagas > div.daga").length;
                                          var contador_alturas=0;
                                            var alturas_dagas_todas = [];
                                        for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {

                                            
                                              altura_dagas_dato=$("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight();

                                                    alturas_dagas_todas.push(altura_dagas_dato); 
                                            }

                                                 var daga_alta= Math.max.apply(null,alturas_dagas_todas);


                                              //      $("#contendor_dagas").height(daga_alta);
                                             

                                    var altura_contenedor = $("#contendor_dagas").outerHeight();
                                   
                                    var dagas_centro = $("#contendor_dagas > div.daga").length;
                                          var contador_alturas=0;
                                            var vacios = [];
                                    for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {
                                        
                                                var altura_actual_daga =($("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight());
                                                              

                                                  var altura_vacio= daga_alta - altura_actual_daga;
                                                  
                                                  $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight(altura_vacio);
                                                  $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").css("margin-top",altura_vacio);
                                                        $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").css("margin-top",-altura_vacio);

                                                  /* $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").animate({
                                                                                              height: altura_vacio
                                                                                               },
                                                                                               100, function() {
                                                                                                                            
                                                                                                });*/
                                            
                                        }
                                        //esto iva dentro del parentesis de arribaFRE
                                        operacion_click="Eliminar"
                                         
                                            calcular_cantidades();
                  
                  
                  
                  
                  
                });
                $("button#agregar_daga").on("click", function(e)
                {
                        var daga ="";
                var check_daga=""
                 var dagas_centro = $("#contendor_dagas > div.daga").length;
               
                 for(var num_daga =(dagas_centro+1); num_daga<= (dagas_centro+1); num_daga = num_daga+1)
                 {
                        check_daga += "<div class='col-md-4'><input style='font-size: 150%' id='check_daga' data-daga='daga"+num_daga+"' type='checkbox' name='check_daga' value='daga"+num_daga+"' /> Daga "+num_daga+"  </div>"
                    
                   for(var num_hilo = 0; num_hilo <= 10; num_hilo = num_hilo+1)
                    {
                        if(num_hilo===0)
                        {
                            daga +="<div id ='daga"+num_daga+"' data-hilos='10' data-altura_asignada='0' class='daga'>";
                            daga +="<section style='height:30px;color:black; border:0; background:none; text-align:center;font-weight:bolder;font-size:16px' id ='nombre_daga'  data-daga='daga"+num_daga+"' class='hilo'>";
                            daga +="<div class='col-md-12' style='padding:0' >DAGA "+num_daga+"</div><div class='col-md-12'  style='padding:0; color:red; font-weight: bolder' id='altura_asignada_daga"+num_daga+"'>0.0 Mt</div></section>";
                            daga +="<div id ='hilo0'  data-altura='0'  data-daga='daga"+num_daga+"' class='hilo'></div>";
                             
                        }
                        else if(num_hilo===10)
                        {

                            daga += "<div id ='hilo"+num_hilo+"'  data-daga='daga"+num_daga+"'  class='hilo'>";
                            daga +="<div id='producto' data-cantidad='80' data-nombre='' data-codigo='' data-altura='0' data-imagen=''><p>&nbsp;</p></div>";
                           daga += "<div id='spanes'><span id='eliminar' data-hilo='hilo"+num_hilo+"' data-daga='daga"+num_daga+"' class='glyphicon glyphicon-remove-circle ' aria-hidden='true'></span>";
                           daga += "<span id='agregar' data-hilo='hilo"+num_hilo+"' data-daga='daga"+num_daga+"' class='glyphicon glyphicon-plus' aria-hidden='true'></span></div>";
                              daga +=     "</div></div>";
                                  
                        }
                        else
                        {
                                        daga += "<div id ='hilo"+num_hilo+"'  data-daga='daga"+num_daga+"' data-cantidad='80'  class='hilo'>";
                                        daga+="<div id='producto' data-cantidad='80' data-nombre='' data-codigo='' data-altura='0' data-imagen=''><p>&nbsp;</p></div>"
                           daga += "<div id='spanes'><span id='eliminar'  data-hilo='hilo"+num_hilo+"' data-daga='daga"+num_daga+"' class='glyphicon glyphicon-remove-circle btn-lg' aria-hidden='true'></span>";
                           daga += "<span id='agregar'  data-hilo='hilo"+num_hilo+"' data-daga='daga"+num_daga+"' class='glyphicon glyphicon-plus' aria-hidden='true'></span></div>";
                               daga += "</div>";
                                
                        }

                        
                    }
                

                     $("#centro_horno div#contendor_dagas").append(daga);
                    
                     daga="";
                     $("#check_dagas").append(check_daga);
                }
                
                
                 var dagas_centro = $("#contendor_dagas > div.daga").length;
                                          var contador_alturas=0;
                                            var alturas_dagas_todas = [];
                                        for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {

                                            
                                              altura_dagas_dato=$("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight();

                                                    alturas_dagas_todas.push(altura_dagas_dato); 
                                            }

                                                 var daga_alta= Math.max.apply(null,alturas_dagas_todas);


                                              //      $("#contendor_dagas").height(daga_alta);
                                             

                                    var altura_contenedor = $("#contendor_dagas").outerHeight();
                                   
                                    var dagas_centro = $("#contendor_dagas > div.daga").length;
                                          var contador_alturas=0;
                                            var vacios = [];
                                    for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {
                                        
                                                var altura_actual_daga =($("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight());
                                                              

                                                  var altura_vacio= daga_alta - altura_actual_daga;
                                                  
                                                  $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight(altura_vacio);
                                                  $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").css("margin-top",altura_vacio);
                                                        $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").css("margin-top",-altura_vacio);

                                                  /* $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").animate({
                                                                                              height: altura_vacio
                                                                                               },
                                                                                               100, function() {
                                                                                                                            
                                                                                                });*/
                                            
                                        }
                
                });
                
                
                
                /*aca cargamos las primeras 10 dagas*/
                function cargar_iniciales(){
                var daga ="";
                var check_daga=""
                 for(var num_daga = 1; num_daga<= {{$limite}}; num_daga = num_daga+1)
                 {
                        check_daga += "<div class='col-md-4'><input style='font-size: 150%' id='check_daga' data-daga='daga"+num_daga+"' type='checkbox' name='check_daga' value='daga"+num_daga+"' /> Daga "+num_daga+"  </div>"
                    
                   for(var num_hilo = 0; num_hilo <= 10; num_hilo = num_hilo+1)
                    {
                        if(num_hilo===0)
                        {
                            daga +="<div id ='daga"+num_daga+"' data-hilos='10' data-altura_asignada='0' class='daga'>";
                            daga +="<section style='height:30px;color:black; border:0; background:none; text-align:center;font-weight:bolder;font-size:16px' id ='nombre_daga'  data-daga='daga"+num_daga+"' class='hilo'>";
                            daga +="<div class='col-md-12' style='padding:0' >DAGA "+num_daga+"</div><div class='col-md-12'  style='padding:0; color:red; font-weight: bolder' id='altura_asignada_daga"+num_daga+"'>0.0 Mt</div></section>";
                            daga +="<div id ='hilo0'  data-altura='0'  data-daga='daga"+num_daga+"' class='hilo'></div>";
                             
                        }
                        else if(num_hilo===10)
                        {

                            daga += "<div id ='hilo"+num_hilo+"'  data-daga='daga"+num_daga+"'  class='hilo'>";
                            daga +="<div id='producto' data-cantidad='80' data-nombre='' data-codigo='' data-altura='0' data-imagen=''><p>&nbsp;</p></div>";
                           daga += "<div id='spanes'><span id='eliminar' data-hilo='hilo"+num_hilo+"' data-daga='daga"+num_daga+"' class='glyphicon glyphicon-remove-circle ' aria-hidden='true'></span>";
                           daga += "<span id='agregar' data-hilo='hilo"+num_hilo+"' data-daga='daga"+num_daga+"' class='glyphicon glyphicon-plus' aria-hidden='true'></span></div>";
                              daga +=     "</div></div>";
                                  
                        }
                        else
                        {
                                        daga += "<div id ='hilo"+num_hilo+"'  data-daga='daga"+num_daga+"' data-cantidad='80'  class='hilo'>";
                                        daga+="<div id='producto' data-cantidad='80' data-nombre='' data-codigo='' data-altura='0' data-imagen=''><p>&nbsp;</p></div>"
                           daga += "<div id='spanes'><span id='eliminar'  data-hilo='hilo"+num_hilo+"' data-daga='daga"+num_daga+"' class='glyphicon glyphicon-remove-circle btn-lg' aria-hidden='true'></span>";
                           daga += "<span id='agregar'  data-hilo='hilo"+num_hilo+"' data-daga='daga"+num_daga+"' class='glyphicon glyphicon-plus' aria-hidden='true'></span></div>";
                               daga += "</div>";
                                
                        }

                        
                    }
                

                     $("#centro_horno div#contendor_dagas").append(daga);
                    
                     daga="";
                }
                $("#check_dagas").append(check_daga);
              var altura=  $("#centro_horno div#contendor_dagas").height();
              
                $("div#medidor_altura").height(altura)
                }

                             
                 $("div#contendor_dagas ").on("click",".daga .hilo  span#agregar", function(e){
                  
                     //var hilo_cerrar= $(this).attr("data-hilo");
                            var daga= $(this).attr("data-daga");
                             var  hilos_de_cada_daga= $("div#"+daga).children('div.hilo').length;
                            //var hilos_contados = $("div#"+ daga).attr("data-hilos");
                            var hilos_contados = hilos_de_cada_daga;
                    
                             var altura_daga = $("div#"+ daga).outerHeight() - $("div#"+ daga+"> div#hilo0").outerHeight();
                           // var altura_hilo_cerrar = $("div#"+daga+" div#"+hilo_cerrar+"").outerHeight();
                            //var hijos =  parseFloat(hilos_contados)+1;
                        var  hilos_de_cada_daga= $("div#"+daga).children('div.hilo').length;
                     
                            //var hijo_nuevo = parseFloat(hilos_contados)+1;
                            var hijo_nuevo = hilos_de_cada_daga;
                            var id_hilo =$(this).attr("data-hilo");
                             //var posicion= $("div#"+ daga).ntch('div#'+ $(this).attr("data-hilo"));

                        
                           
                            $("div#"+ daga).children("div#"+id_hilo).after("<div id ='hilo"+hijo_nuevo+"' data-cantidad=''  data-daga='"+daga+"' class='hilo'>"+
                                        "<div id='producto' data-cantidad='80' data-altura='' data-imagen=''><p>&nbsp;</p></div>"+
                                            "<div id='spanes'><span id='eliminar' data-hilo='hilo"+hijo_nuevo+"' data-daga='"+daga+"' class='glyphicon glyphicon-remove-circle ' aria-hidden='true'></span>"+
                                            "<span id='agregar' data-hilo='hilo"+hijo_nuevo+"' data-daga='"+daga+"' class='glyphicon glyphicon-plus' aria-hidden='true'></span></div>"+
                                            "</div></div>");
//                            $("div#"+ daga).

                           /* var hilos_de_cada_daga= $("div#"+daga).children('div.hilo').length+1;
                                for(var x=0; x<= hilos_de_cada_daga; x=x+1){
                                    codigo_hilo = $("#contendor_dagas >div#"+daga+" > div.hilo:nth-child("+x+")").attr("id","hilo"+x);
                                }*/
                            
                               $("div#"+ daga).attr("data-hilos",hijo_nuevo);
                            
                            var altura_vacio = $("div#"+daga+" div#hilo0").outerHeight();
                          
                            nueva_altura_vacio = altura_vacio;
                            var altura_daga_modif = $("div#"+ daga).outerHeight() - $("div#"+ daga+"> div#hilo0").outerHeight();
                               
                            $("div#"+daga+" div#hilo0").outerHeight(nueva_altura_vacio);
                            
                            $("div#"+daga+" > section#nombre_daga > div#altura_asignada_daga" +daga+"").css("margin-top",nueva_altura_vacio);
                            $("div#"+daga+" div#hilo0").css("margin-top",-nueva_altura_vacio);
                            


                            e.preventDefault();
                            e.stopPropagation();

                            //busquemos la daga mas alta

                             var dagas_centro = $("#contendor_dagas > div.daga").length;
                                          var contador_alturas=0;
                                            var alturas_dagas_todas = [];
                                        for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {

                                            
                                              altura_dagas_dato=$("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight();

                                                    alturas_dagas_todas.push(altura_dagas_dato); 
                                            }

                                                 var daga_alta= Math.max.apply(null,alturas_dagas_todas);


                                              //      $("#contendor_dagas").height(daga_alta);
                                             

                                    var altura_contenedor = $("#contendor_dagas").outerHeight();
                                   
                                    var dagas_centro = $("#contendor_dagas > div.daga").length;
                                          var contador_alturas=0;
                                            var vacios = [];
                                    for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {
                                        
                                                var altura_actual_daga =($("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight());
                                                              

                                                  var altura_vacio= daga_alta - altura_actual_daga;
                                                  
                                                   $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight(altura_vacio);
                                                   $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").css("margin-top",altura_vacio);
                                                        $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").css("margin-top",-altura_vacio);
                                                     
                                                  /**************si molesta descomento lo de arriba y quito lo de abajo**
                                                  $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").animate({
                                                                                              height: altura_vacio
                                                                                               },
                                                                                               100, function() {
                                                                                                                            
                                                                                                });*******/
                                            
                                        }
                                        var altura_actual = ((400*daga_alta)/600)
                                      //  alert("nueva altura actual" + altura_actual);
                                      operacion_click="Agregar Hilo";
                                      calcular_cantidades()
                                      
                                        
                 });
                 

                 $("div#contendor_dagas ").on("click"," .daga .hilo  span#eliminar", function(e)
                         {


                            var hilo_cerrar= $(this).attr("data-hilo");
                            var daga= $(this).attr("data-daga");
                            $("div#"+daga+" div#"+hilo_cerrar+"").remove();
                             var altura_daga = $("div#"+ daga).outerHeight() - $("div#"+ daga+"> div#hilo0").outerHeight();
                            var altura_hilo_cerrar = $("div#"+daga+" div#"+hilo_cerrar+"").outerHeight();
                            
                            
                                                                                                                       
                            var altura_vacio = $("div#"+daga+" div#hilo0").outerHeight();
                          
                            nueva_altura_vacio = altura_vacio +altura_hilo_cerrar;
                            var altura_daga_modif = $("div#"+ daga).outerHeight() - $("div#"+ daga+"> div#hilo0").outerHeight();
                               
                            $("div#"+daga+" div#hilo0").outerHeight(nueva_altura_vacio);   
                            
                                 $("div#"+daga+" > section#nombre_daga > div#altura_asignada_daga" +daga+"").css("margin-top",nueva_altura_vacio);
                            $("div#"+daga+" div#hilo0").css("margin-top",-nueva_altura_vacio);
                            /*$("div#"+daga+" div#hilo0").animate({
                                                                                              height: nueva_altura_vacio
                                                                                               },
                                                                                               100, function() {
                                                                                                                            
                                                                                                });
                              */              
                                
                            e.preventDefault();
                            e.stopPropagation();

                            //busquemos la daga mas alta

                             var dagas_centro = $("#contendor_dagas > div.daga").length;
                                          var contador_alturas=0;
                                            var alturas_dagas_todas = [];
                                        for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {

                                            
                                              altura_dagas_dato=$("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight();

                                                    alturas_dagas_todas.push(altura_dagas_dato); 
                                            }

                                                 var daga_alta= Math.max.apply(null,alturas_dagas_todas);


                                              //      $("#contendor_dagas").height(daga_alta);
                                             

                                    var altura_contenedor = $("#contendor_dagas").outerHeight();
                                   
                                    var dagas_centro = $("#contendor_dagas > div.daga").length;
                                          var contador_alturas=0;
                                            var vacios = [];
                                    for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {
                                        
                                                var altura_actual_daga =($("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight());
                                                              

                                                  var altura_vacio= daga_alta - altura_actual_daga;
                                                  
                                                  $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight(altura_vacio);
                                                  $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").css("margin-top",altura_vacio);
                                                        $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").css("margin-top",-altura_vacio);

                                                  /* $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").animate({
                                                                                              height: altura_vacio
                                                                                               },
                                                                                               100, function() {
                                                                                                                            
                                                                                                });*/
                                            
                                        }

                                        operacion_click="Eliminar Hilo";

                                        calcular_cantidades();
                                        
                
                        });




                                        var producto_selec="";
                                        var altura_selec="";
                                        var nombre_selec="";




                                            




                                        
                $(" select#productos").on("change", function(e)
                         {


                                
                                        producto_selec= $(" select#productos  option:selected").attr("data-cod");
                                        nombre_selec =$(" select#productos  option:selected").attr("data-nombre");
                                        altura_selec=$(" select#productos  option:selected").attr("data-altura");
                                        $("button#cod_prod_seles").text($(" select#productos  option:selected").attr("data-cod"));
                                        //alert($(" select#productos  option:selected").attr("data-altura"))
                                         //alert($(this).val())
                                        

                        });
            $(" select#productos").trigger('change')

       
                $(" #contendor_dagas ").on("click","div.hilo", function(e)
                        {
                            
                            
                            var dagas_contadas_check= $("#check_dagas div input#check_daga").length;
                           // alert(ejecucion)
                if(ejecucion===0)
                 {
                                
                           
                                                                    if($(this).attr("id")==="hilo0")
                                                                    {
                                                                        return;
                                                                    }
                                                                    var reajuste = 0;
                                                                    var colores_cargados=[   "#A99D9D", "#E9AB00",
                                                                    "#AD0000", "#EF5F69", "#0325A3",  "#B9A737",
                                                                    "#5B6B00", "#FF00C9", "#FF5300", "#00AD75", "#570000", "#8500EB" ,
                                                                    "#00A5CF", "#4FB7B1", "#67FF65", "#C1C999","#DF63DF","#F99100","#19731B"]

                                                
                                                                  var aumento =((600 * parseFloat(altura_selec)*100)/400).toFixed(2);

                                       // $(this).text(producto_selec);

                                                                    var altura = parseFloat(altura_selec);
                                                                    if(altura < 0.10)
                                                                    {
                                                                        $(this).children('div#producto').css({
                                                                            "font-size": '8px'
                                                                            
                                                                        }); 
                                                                    }
                                                                    else
                                                                    {
                                                                             $(this).children('div#producto').css({
                                                                            "font-size": '18px'
                                                                            
                                                                        }); 
                                                                    }
                                                                    

                                                                    var altura_pixeles = (((600 * (altura*100))/400)).toFixed(2);
                                                                  
                                                                    var daga = $(this).attr("data-daga");
                                                                    var altura_contenedor = $("#contendor_dagas").outerHeight();
                                                                    $(this).attr("data-codigo" );
                                                                    $(this).children('div#producto').text(producto_selec)
                                                                    $(this).children('div#producto').attr("data-codigo",producto_selec);
                                                                    $(this).children('div#producto').attr("data-nombre",nombre_selec);
                                                                    $(this).children('div#producto').attr("data-altura",altura_selec);
                                                                    
                                                                   
                                                                        calcular_cantidades();  
                                                                    
                                                                 
                                                                        var productos_resumen =$("#tabla_resumen tbody tr").length;
                                                                        var resto  = productos_resumen % 2;
                                                                        var clase_color="uno"
                                                                        if(resto>1)
                                                                        {
                                                                            clase_color="uno"
                                                                        } else
                                                                        {
                                                                            clase_color="dos";
                                                                        }
                                             var productos =$("#tabla_resumen tbody tr").length;
                                                       var color=1;
                                            var respuesta= verificar_en_tabla_resumen(producto_selec);
                                            var nuevo_producto =0;
                                                    if(respuesta===0)
                                                    {
                                            
                                                              color= 1;
                                         
                                                            var verifica_color=0;
                                                            if(productos>0)
                                                            {
                                                              
                                                                        
                                                                                  color = -1;
                                                                                do {
                                                                                    color = color+1;
                                                                                    verifica_color=0;

                                                                                                   for(var x = 1; x<= productos; x = x+1)
                                                                                                    {
                                                                                                       color_hilo= $("#tabla_resumen tbody tr:nth-child("+x+") td:nth-child("+1+") div#color_identificador").attr("data-background");
                                                                                                      // alert(" color actual tabla "+ color_hilo+ " nuevo color de lista  "+ colores_cargados[color])
                                                                                                       if(colores_cargados[color] !== color_hilo )
                                                                                                                           {
                                                                                                                            verifica_color =verifica_color+ 1;
                                                                                                                        //    alert("cantidad de veces repetida con color " +color );
                                                                                                                   

                                                                                                                           } 

                                                                                                    }


                                                                              //alert(" fin del do ahora verifica quedo en " + verifica_color +" y productos"+ productos)
                                                                                    }while (verifica_color !== productos)
                                                                }

                                                    

                                                                                $("#tabla_resumen tbody ").append(" <tr id='"+clase_color+"'>"+
                                                                 "<td class='col-md-6'>"+
                                                                     "<div class='col-md-3' data-background='"+colores_cargados[color]+"' id='color_identificador'"+
                                                                      "style='background: "+colores_cargados[color]+"' >"+
                                                                         
                                                                     "</div>"+
                                                                     "<div id='porducto_cargado' data-background='"+colores_cargados[color]+"' data-cod='"+producto_selec+"' class='col-md-9'>"+
                                                                         nombre_selec+
                                                                     "</div>"+

                                                                 "</td>"+
                                                                 "<td class='col-md-3'>0</td>"+
                                                                 "<td class='col-md-3'>0</td>"+
                                                                "</tr>");
                                                                     nuevo_producto=1;

                                                        }

                                                                       var color_fondo="";
                                                                      for(var x = 1; x<= productos; x = x+1)
                                                                        {

                                                                                  var codigo_prod =$("table#tabla_resumen tbody tr:nth-child("+x+") td div#porducto_cargado").attr("data-cod");

                                                                                   if(codigo_prod===producto_selec )
                                                                                   {
                                                                                    color_fondo=$("#tabla_resumen tbody tr:nth-child("+x+") td:nth-child("+1+") div#color_identificador").attr("data-background");
                                                                                    break;

                                                                                   }     
                                                                        }


                                                                     if(nuevo_producto===1)
                                                                     {
                                                                                                $(this).css({
                                                                                                "background" : colores_cargados[color]
                                                                                                 
                                                                                            }); 
                                                                
                                                                                     $("button#cod_prod_seles").css({
                                                                                        "background" : colores_cargados[color]
                                                                                        
                                                                                          });
                                                                     
                                                                     }
                                                                     else
                                                                     {
                                                                                $(this).css({
                                                                                "background" : color_fondo
                                                                                
                                                                                  }); 
                                                                                    $("button#cod_prod_seles").css({
                                                                                "background" : color_fondo
                                                                                
                                                                                  });
                                                                     }

                                                                     var dagas_centro = $("#contendor_dagas > div.daga").length;
                                                                      var contador_alturas=0;
                                                                      var alturas_dagas=[];

                     



                                                                        $(this).outerHeight(altura_pixeles);
                                                       
                                                                        //alert("cambia altura");
                                                                        var hilos =$("div#"+ daga+">div").length;
                                                                        var altura_daga_pre_modf = $("#"+ daga).outerHeight() - $("div#"+ daga+"> div#hilo0").outerHeight();
                                                                        //alert(altura_daga_pre_modf);
                                                                        //alert(altura_daga_pre_modf + " "+ $("#"+ daga).outerHeight() +"  "  +  $("div#"+ daga+"> div#hilo0").outerHeight());
                                                          
                             var altura_daga =parseFloat($("#"+ daga).outerHeight())-$("div#"+ daga+"> div#hilo0").outerHeight();
                                //alert("la altura de daga "+ $("#"+ daga).outerHeight() +" vacio "+ $("div#"+ daga+"> div#hilo0").outerHeight());  
                        // alert("la altura de la daga es "+ altura_daga+ " y la del cont " + altura_contenedor);
                             if(altura_daga > altura_contenedor) 
                                {
                             
                                                             var dagas_centro = $("#contendor_dagas > div.daga").length;
                                                             var aumento_div_central = altura_daga-$("#centro_horno").outerHeight();
                                                             $("div#"+ daga+"> div#hilo0").outerHeight(0);
                                                             
                                                             var altura_nombre = $("div#"+daga+" > section#nombre_daga").outerHeight();
                                                                         
                                                                         var altura_mostrar = ((4*(altura_daga- altura_nombre)-36)/600).toFixed(2);
                                                                      
                                                                          $("div#"+daga+" > section#nombre_daga > div#altura_asignada_"+daga+"").text(altura_mostrar+" Mt");
                                                        for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                                          {
                                                                        var altura_dag_mayor =parseFloat($("#"+ daga).outerHeight())-$("div#"+ daga+"> div#hilo0").outerHeight();
                                                                        
                                                        
                                                                           // alert(parseFloat(altura_daga) + " esto " + parseFloat( $("#centro_horno").height()));
                                                                            
                                                                            if($("#"+ daga).attr("id") !== $("#contendor_dagas >div:nth-child(" +num_daga+")").attr("id"))
                                                                         {
                                                                                        var altura_vacio = altura_dag_mayor-$("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()+$("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight();
                                                                              
                                                                                       // $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight(nueva_altura_vacio); 
                                                                                       $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight(altura_vacio); 
                                                                                       $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").css("margin-top",-altura_vacio); 
                                                                                       
                                                                                       // console.log("altura vacio "+ altura_vacio+" numero daga"+ num_daga)
                                                                                          
                                                                                        $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").css("margin-top",altura_vacio);
                                                                                        $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").css("margin-top",-altura_vacio);
                                                                                        
                                                                                      //  var altura_nombre = $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga").outerHeight();
                                                                                         var altura_daga_actual = parseFloat($("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight())-$("#contendor_dagas >div:nth-child(" +num_daga+") div#hilo0").outerHeight();
                                                                                      // var altura_mostrar = ((4*(altura_daga_actual- altura_nombre)-36)/600).toFixed(2);
                                                                                      
                                                                                        //  $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").text(altura_mostrar+" Mt");
                                                                                        
                                                                                        
                                                                                     //   alert(altura_vacio);
                                                                                        /*$("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").animate({
                                                                                                                                                        height: altura_vacio
                                                                                                                                                            },
                                                                                                                                                            100, function() {
                                                                                                                                                            
                                                                                                                                                        });*/
                                                                                    
                                                                          }

                                                            }



                                }
                                else
                                {
                                      
                                             //var altura_contenedor = altura_daga-$("#centro_horno").outerHeight();
                                     
                                                
                                              
                                                   // alert(parseFloat(altura_daga) + " esto " + parseFloat( $("#centro_horno").height()));
                                                    var altura_vacio = altura_contenedor-altura_daga;
                                                 
                                                   //console.log("altura vacio "+ altura_vacio+" numero daga con daga"+ daga)
                                                        
                                                        $("div#"+ daga+"> div#hilo0").outerHeight(altura_vacio);

                                                         $("div#"+daga+" > section#nombre_daga > div#altura_asignada_"+daga+"").css("margin-top",altura_vacio);
                                                         //var altura_nombre = $("div#"+daga+" > section#nombre_daga").outerHeight();
                                                         //alert(altura_nombre +" daga-> "+ altura_daga)
                                                        // var altura_mostrar = ((4*(altura_daga- altura_nombre-37))/600).toFixed(2);
                                                      
                                                         // $("div#"+daga+" > section#nombre_daga > div#altura_asignada_"+daga+"").text(altura_mostrar+" Mt");
                                                            $("div#"+daga+" div#hilo0").css("margin-top",-altura_vacio);
                                                                                              
                                                    //alert(parseFloat($("#"+ daga).outerHeight())-$("div#"+ daga+"> div#hilo0").outerHeight());


                                            

                                }

                                                     var dagas_centro = $("#contendor_dagas > div.daga").length;
                           
                                                         var contador_alturas=0;
                                                        for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                                            {
                                                                
                                                            var altura_daga_prueba=$("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight();
                                                                    if(altura_contenedor > ($("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight()))
                                                                    {
                                                                        
                                                                 
                                                                        contador_alturas= contador_alturas+1;
                                                                    
                                                                    }

                                                            }
                                                            //alert(contador_alturas);
                                                             var vacios = [];
                                      
                                            if(contador_alturas === dagas_centro )
                                            {
                                               
                                                                    for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                                                {
                                                                    
                                                                  var altura_vacio =altura_contenedor- $("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()+$("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight();
                                                                            //$("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight(altura_vacio);

                                                                            vacios.push(altura_vacio); 

                                                                }
                                                               // alert(contador_alturas);
                                     

                                                        var vacio_menor = Math.min.apply(null,vacios);
                                                     for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                                   
                                                     {
                                          
                                                
                                                                   // alert("este es vacio mayor " + vacio_menor);
                                                                 
                                                                   // alert("mostrando"+vacio_mayor);
                                                                  var altura_vacio = $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight() - vacio_menor;
                                                                     //alert("mostrando"+vacio_menor +" y el vacio nuevo " + altura_vacio);

                                                                    if(altura_vacio<0)
                                                                    {
                                                                        altura_vacio=altura_contenedor- $("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()+$("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight()-vacio_menor;
                                                                    }
                                                                       // alert("la altura es "+ $("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight());
                                                                  
                                                                    //alert(altura_vacio);
                                                                   // console.log("altura vacio "+ altura_vacio+" numero daga"+ num_daga)
                                                                     $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight( altura_vacio);
                                                                        $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").css("margin-top",altura_vacio);
                                                                            $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").css("margin-top",-altura_vacio);
                                                                            
                                                                           // var altura_nombre = $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga").outerHeight();
                                                                             
                                                                             //var altura_mostrar = ((4*(altura_daga- altura_nombre)-36)/600).toFixed(2);
                                                                          
                                                                            //  $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").text(altura_mostrar+" Mt");
                                                                     
                                                                           /* $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").animate({
                                                                                                                  height: altura_vacio
                                                                                                                   },
                                                                                                                   100, function() {
                                                                                                                                                
                                                                                                                    });*/

                                                                     
                                                      

                                                        }


                                            }

                              
                             
                                               // alert("click");
                                          calcular_cantidades(); 
                                     
                                    return;
                             
                      }
                              
                              
                                                           
              
                            if($(this).attr("id")==="hilo0"){
                                return;
                            }
                                var reajuste = 0;
                                var colores_cargados=[   "#A99D9D", "#E9AB00",
                                "#AD0000", "#EF5F69", "#0325A3",  "#B9A737",
                                "#5B6B00", "#FF00C9", "#FF5300", "#00AD75", "#570000", "#8500EB" ,
                                "#00A5CF", "#4FB7B1", "#67FF65", "#C1C999","#DF63DF","#F99100","#19731B"]

                               
                                var aumento =((600 * parseFloat(altura_selec)*100)/400).toFixed(2);

                                       // $(this).text(producto_selec);

                                        var altura = parseFloat(altura_selec);
                                        if(altura < 0.10){
                                            $(this).children('div#producto').css({
                                                "font-size": '8px'
                                                
                                            }); 
                                        }else{
                                                 $(this).children('div#producto').css({
                                                "font-size": '18px'
                                                
                                            }); 
                                        }
                                        

                                        var altura_pixeles = (((600 * (altura*100))/400)).toFixed(2);
                                      
                                        var daga = $(this).attr("data-daga");
                                        var altura_contenedor = $("#contendor_dagas").outerHeight();
                                        $(this).attr("data-codigo", )
                                        $(this).children('div#producto').text(producto_selec)
                                        $(this).children('div#producto').attr("data-codigo",producto_selec);
                                        $(this).children('div#producto').attr("data-nombre",nombre_selec);
                                        $(this).children('div#producto').attr("data-altura",altura_selec);
                                        
                                       if(dagas_contadas_check === ultimo_hijo_recorrido && ejecucion===1){
                                            calcular_cantidades();  
                                            }
                                     
                                            var productos_resumen =$("#tabla_resumen tbody tr").length;
                                            var resto  = productos_resumen % 2;
                                            var clase_color="uno"
                                            if(resto>1){
                                                clase_color="uno"
                                            } else{
                                                clase_color="dos";
                                            }
                                             var productos =$("#tabla_resumen tbody tr").length;
                                                       var color=1;
                                            var respuesta= verificar_en_tabla_resumen(producto_selec);
                                            var nuevo_producto =0;
                                            if(respuesta===0){
                                            
                                                color= 1;
                                         
                                                var verifica_color=0;
                                                if(productos>0){
                                                  
                                                            
                                                      color = -1;
                                                    do {
                                                        color = color+1;
                                                        verifica_color=0;

                                                   for(var x = 1; x<= productos; x = x+1)
                                                    {
                                                       color_hilo= $("#tabla_resumen tbody tr:nth-child("+x+") td:nth-child("+1+") div#color_identificador").attr("data-background");
                                                      // alert(" color actual tabla "+ color_hilo+ " nuevo color de lista  "+ colores_cargados[color])
                                                       if(colores_cargados[color] !== color_hilo )
                                                       {
                                                        verifica_color =verifica_color+ 1;
                                                    //    alert("cantidad de veces repetida con color " +color );
                                               

                                                       } 

                                                    }


                                                  //alert(" fin del do ahora verifica quedo en " + verifica_color +" y productos"+ productos)
                                                }
                                                    while (verifica_color !== productos)
                                                    }

                                                    

                                                $("#tabla_resumen tbody ").append(" <tr id='"+clase_color+"'>"+
                                 "<td class='col-md-6'>"+
                                     "<div class='col-md-3' data-background='"+colores_cargados[color]+"' id='color_identificador'"+
                                      "style='background: "+colores_cargados[color]+"' >"+
                                         
                                     "</div>"+
                                     "<div id='porducto_cargado' data-background='"+colores_cargados[color]+"' data-cod='"+producto_selec+"' class='col-md-9'>"+
                                         nombre_selec+
                                     "</div>"+

                                 "</td>"+
                                 "<td class='col-md-3'>0</td>"+
                                 "<td class='col-md-3'>0</td>"+
                                "</tr>");
                                                nuevo_producto=1;

                                            }

                                                var color_fondo="";
                                            for(var x = 1; x<= productos; x = x+1)
                                                    {

                                                      var codigo_prod =$("table#tabla_resumen tbody tr:nth-child("+x+") td div#porducto_cargado").attr("data-cod");

                                                       if(codigo_prod===producto_selec )
                                                       {
                                                        color_fondo=$("#tabla_resumen tbody tr:nth-child("+x+") td:nth-child("+1+") div#color_identificador").attr("data-background");
                                                        break;

                                                       }     
                                                    }


                                                 if(nuevo_producto===1){
                                                $(this).css({
                                                "background" : colores_cargados[color]
                                                 
                                            }); 
                                            
                                             $("button#cod_prod_seles").css({
                                                "background" : colores_cargados[color]
                                                
                                                  });
                                                 }else{
                                                $(this).css({
                                                "background" : color_fondo
                                                
                                                  }); 
                                                    $("button#cod_prod_seles").css({
                                                "background" : color_fondo
                                                
                                                  });
                                                 }

                                         var dagas_centro = $("#contendor_dagas > div.daga").length;
                                          var contador_alturas=0;
                                          var alturas_dagas=[];

                     

                               

                                        $(this).outerHeight(altura_pixeles);
                       
                                        //alert("cambia altura");
                                        var hilos =$("div#"+ daga+">div").length;
                                        var altura_daga_pre_modf = $("#"+ daga).outerHeight() - $("div#"+ daga+"> div#hilo0").outerHeight();
                                        //alert(altura_daga_pre_modf);
                                        //alert(altura_daga_pre_modf + " "+ $("#"+ daga).outerHeight() +"  "  +  $("div#"+ daga+"> div#hilo0").outerHeight());
                          
                             var altura_daga =parseFloat($("#"+ daga).outerHeight())-$("div#"+ daga+"> div#hilo0").outerHeight();
                                //alert("la altura de daga "+ $("#"+ daga).outerHeight() +" vacio "+ $("div#"+ daga+"> div#hilo0").outerHeight());  
                        // alert("la altura de la daga es "+ altura_daga+ " y la del cont " + altura_contenedor);
                       
                       
                                       hijos_recorrridos_click = hijos_recorrridos_click+1;
                                           //if(ultimo_hijo_recorrido === daga_a_recorrer && ejecucion===1){
                                            // alert(hijos_recorrridos_click +"-->suma ");
                                            if( hijos_recorrridos_click === suma_hijos_total && ejecucion===1){
                                           // alert(hijos_recorrridos_click);
                                            //alert(ultimo_hijo_recorrido +"  daga a reco"+daga_a_recorrer +" ed "+ejecucion)
                                             //   alert( "dagas "+ daga_a_recorrer +" ULTIMO "+ ultimo_hijo_recorrido)
                                         //    alert("altura_daga "+ altura_daga+ " altura_cont "+ altura_contenedor)
                             if(altura_daga > altura_contenedor) 
                                {
                             
                                             var dagas_centro = $("#contendor_dagas > div.daga").length;
                                             var aumento_div_central = altura_daga-$("#centro_horno").outerHeight();
                                             $("div#"+ daga+"> div#hilo0").outerHeight(0);
                                             
                                           //  var altura_nombre = $("div#"+daga+" > section#nombre_daga").outerHeight();
                                                         
                                                        // var altura_mostrar = ((4*(altura_daga- altura_nombre)-36)/600).toFixed(2);
                                                      
                                                          //$("div#"+daga+" > section#nombre_daga > div#altura_asignada_"+daga+"").text(altura_mostrar+" Mt");
                                        for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {
                                                var altura_dag_mayor =parseFloat($("#"+ daga).outerHeight())-$("div#"+ daga+"> div#hilo0").outerHeight();
                                                
                                
                                                   // alert(parseFloat(altura_daga) + " esto " + parseFloat( $("#centro_horno").height()));
                                                    
                                                    if($("#"+ daga).attr("id") !== $("#contendor_dagas >div:nth-child(" +num_daga+")").attr("id"))
                                                    {
                                                        var altura_vacio = altura_dag_mayor-$("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()+$("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight();
                                              
                                                       // $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight(nueva_altura_vacio); 
                                                       $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight(altura_vacio); 
                                                       $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").css("margin-top",-altura_vacio); 
                                                       
                                                       // console.log("altura vacio "+ altura_vacio+" numero daga"+ num_daga)
                                                          
                                                        $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").css("margin-top",altura_vacio);
                                                        $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").css("margin-top",-altura_vacio);
                                                        
                                                      //  var altura_nombre = $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga").outerHeight();
                                                         var altura_daga_actual = parseFloat($("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight())-$("#contendor_dagas >div:nth-child(" +num_daga+") div#hilo0").outerHeight();
                                                      // var altura_mostrar = ((4*(altura_daga_actual- altura_nombre)-36)/600).toFixed(2);
                                                      
                                                        //  $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").text(altura_mostrar+" Mt");
                                                        
                                                        
                                                     //   alert(altura_vacio);
                                                        /*$("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").animate({
                                                                                                                        height: altura_vacio
                                                                                                                            },
                                                                                                                            100, function() {
                                                                                                                            
                                                                                                                        });*/
                                                    
                                                    }

                                            }



                             
                                }
                                else
                                {
                                      
                                             //var altura_contenedor = altura_daga-$("#centro_horno").outerHeight();
                                     
                                                
                                              
                                                   // alert(parseFloat(altura_daga) + " esto " + parseFloat( $("#centro_horno").height()));
                                                    var altura_vacio = altura_contenedor-altura_daga;
                                                 
                                                   //console.log("altura vacio "+ altura_vacio+" numero daga con daga"+ daga)
                                                        
                                                        $("div#"+ daga+"> div#hilo0").outerHeight(altura_vacio);

                                                         $("div#"+daga+" > section#nombre_daga > div#altura_asignada_"+daga+"").css("margin-top",altura_vacio);
                                                         //var altura_nombre = $("div#"+daga+" > section#nombre_daga").outerHeight();
                                                         //alert(altura_nombre +" daga-> "+ altura_daga)
                                                        // var altura_mostrar = ((4*(altura_daga- altura_nombre-37))/600).toFixed(2);
                                                      
                                                         // $("div#"+daga+" > section#nombre_daga > div#altura_asignada_"+daga+"").text(altura_mostrar+" Mt");
                                                            $("div#"+daga+" div#hilo0").css("margin-top",-altura_vacio);
                                                                                              
                                                    //alert(parseFloat($("#"+ daga).outerHeight())-$("div#"+ daga+"> div#hilo0").outerHeight());


                                            

                                }


                                var dagas_centro = $("#contendor_dagas > div.daga").length;
                           
                                          var contador_alturas=0;
                                        for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {
                                                
                                            var altura_daga_prueba=$("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight();
                                                    if(altura_contenedor > ($("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight()))
                                                    {
                                                        
                                                 
                                                        contador_alturas= contador_alturas+1;
                                                    
                                                    }

                                            }
                                            //alert(contador_alturas);
                                             var vacios = [];
                                          //   alert(" contador "+ contador_alturas + " dagas centro   " + dagas_centro)
                                            if(contador_alturas === dagas_centro )
                                            {
                                               
                                                for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {
                                                
                                              var altura_vacio =altura_contenedor- $("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()+$("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight();
                                                        //$("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight(altura_vacio);

                                                        vacios.push(altura_vacio); 

                                            }
                                           // alert(contador_alturas);
                                     

                                                var vacio_menor = Math.min.apply(null,vacios);
                                             for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {
                                          
                                                
                                               // alert("este es vacio mayor " + vacio_menor);
                                             
                                               // alert("mostrando"+vacio_mayor);
                                              var altura_vacio = $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight() - vacio_menor;
                                                 //alert("mostrando"+vacio_menor +" y el vacio nuevo " + altura_vacio);

                                                    if(altura_vacio<0){
                                                        altura_vacio=altura_contenedor- $("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()+$("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight()-vacio_menor;
                                                    }
                                                   // alert("la altura es "+ $("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight());
                                              
                                                //alert(altura_vacio);
                                               // console.log("altura vacio "+ altura_vacio+" numero daga"+ num_daga)
                                             //  alert("vacio "+ num_daga +" "+ altura_vacio);
                                                 $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight( altura_vacio);
                                                    $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").css("margin-top",altura_vacio);
                                                        $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").css("margin-top",-altura_vacio);
                                                        
                                                       // var altura_nombre = $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga").outerHeight();
                                                         
                                                         //var altura_mostrar = ((4*(altura_daga- altura_nombre)-36)/600).toFixed(2);
                                                      
                                                        //  $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").text(altura_mostrar+" Mt");
                                                 
                                                       /* $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").animate({
                                                                                              height: altura_vacio
                                                                                               },
                                                                                               100, function() {
                                                                                                                            
                                                                                                });*/

                                                 
                                                      

                                            }


                                            }
                                            
                                            
                                            /*para recalcular todos*/
                                            
                                            
                                             var dagas_centro = $("#contendor_dagas > div.daga").length;
                                          var contador_alturas=0;
                                            var alturas_dagas_todas = [];
                                        for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {

                                            
                                              altura_dagas_dato=$("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight();

                                                    alturas_dagas_todas.push(altura_dagas_dato); 
                                            }

                                                 var daga_alta= Math.max.apply(null,alturas_dagas_todas);


                                              //      $("#contendor_dagas").height(daga_alta);
                                             

                                    var altura_contenedor = $("#contendor_dagas").outerHeight();
                                   
                                    var dagas_centro = $("#contendor_dagas > div.daga").length;
                                          var contador_alturas=0;
                                            var vacios = [];
                                    for(var num_daga = 1; num_daga<= dagas_centro; num_daga = num_daga+1)
                                            {
                                        
                                                var altura_actual_daga =($("#contendor_dagas >div:nth-child(" +num_daga+")").outerHeight()- $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight());
                                                              

                                                  var altura_vacio= daga_alta - altura_actual_daga;
                                                  
                                                  $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").outerHeight(altura_vacio);
                                                  $("#contendor_dagas >div:nth-child(" +num_daga+") > section#nombre_daga > div#altura_asignada_daga" +num_daga+"").css("margin-top",altura_vacio);
                                                        $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").css("margin-top",-altura_vacio);

                                                  /* $("#contendor_dagas >div:nth-child(" +num_daga+") > div#hilo0").animate({
                                                                                              height: altura_vacio
                                                                                               },
                                                                                               100, function() {
                                                                                                                            
                                                                                                });*/
                                            
                                        }

                              
                             
                           
                                  calcular_cantidades(); 
                             
                             
                            
                              
                              
                              }
                                
                              
                                    
                    
                        });
                        
                        
                        
                     //   var altura_cont_daga=$("div#contenedor_dagas_check").height();

//$("#contenedor_opciones_busquedad").height(altura_cont_daga);
//$("#contenedor_botones").height(altura_cont_daga);
$("#producto_parrilla").val("B 5-30");

 
       
        
       $("button#btn_llenar").on("click", function(e){
       ejecucion=1;
       dagas_seleccionadas=0;
       var dagas_prep= $("#check_dagas div input#check_daga").length;
      // alert($("#check_dagas div:last-child input#check_daga").prop('checked'))
       for(var x=1; x<=dagas_prep; x=x+1)
                {
                     if($("#check_dagas div:nth-child("+x+") input#check_daga").prop('checked')===true){
            dagas_seleccionadas=dagas_seleccionadas+1;
        
                     }
                 }
  
    daga_a_recorrer=dagas_seleccionadas;
   //  alert(daga_a_recorrer)
       var numero_hilos= parseFloat($("input#numero_hilos").val());
       
       
        var hilos_bloque = $("input:radio[name=hilo_bloque]:checked").val();
        var hilos_puros= hilo_bloque;
        if(hilos_bloque===undefined){
                    $("p#infor_mostrar").empty();
                    $("p#infor_mostrar").text("Seleccione Cuantos Hilos de Bloque de Parriila Agregar");
                    $("#inforModal").modal();
                    return;
          }
        
      
       $("#modal_cargando").modal();
     //  $('#modal_cargando div.modal-dialog div.modal-content').html('<div></div>');

       // var page = $(this).attr('data');        
      
    
       dagas_seleccionadas=0;

        $.ajax({
            type: "GET",
            url:"{{url("Simulador/cargando")}}",
            //url: "Simulador/cargando",
            data: {informacion:"test"},
            success: function(data) {
                //Cargamos finalmente el contenido deseado
              var dagas= $("#check_dagas div input#check_daga").length;

                for(var x=1; x<=dagas; x=x+1)
                {
                    
                        dagas_seleccionadas=dagas_seleccionadas+1;
                  //  alert("dagas selecc"+ dagas_seleccionadas)
                         var numero_hilos= parseFloat($("input#numero_hilos").val());
       
       
                          var hilos_bloque = $("input:radio[name=hilo_bloque]:checked").val();
                             var hilos_puros= hilo_bloque;


                     if($("#check_dagas div:nth-child("+x+") input#check_daga").prop('checked')===true)
                    {
                                 var daga_selec= $("#check_dagas div:nth-child("+x+") input#check_daga").attr("data-daga");
                                    $("button#cod_prod_seles").text($(" select#productos  option:selected").attr("data-cod")); 
                      
                       
                       
                                    var ultimo_hijo;
                                    var hijos_daga = $("div#"+daga_selec+" div.hilo" ).length+1;
                                    
                          suma_hijos_total=suma_hijos_total+hijos_daga;
                                if(numero_hilos>0)
                                {
                                    var ultimo_hijo= hijos_daga-2;
                                    hijos_daga= parseFloat(numero_hilos) + 2;
                                }
                              // alert("numero de hilos " + hijos_daga +" numero hilos clie "+ numero_hilos+" hijos daga "+ hijos_daga)
                            
                                if((numero_hilos+2)> (hijos_daga-2))
                                {
                   
                                  // alert(" hijos de daga" + hijos_daga +" ultimo_hijo" + ultimo_hijo)
                                         var cantidad_hilos_agregar = numero_hilos-ultimo_hijo;
                                         //alert(cantidad_hilos_agregar)
                                         //alert("agregar " + cantidad_hilos_agregar + " ultmo hilo "+ ultimo_hijo )
                                          for(var num_hilo = 1; num_hilo <= cantidad_hilos_agregar; num_hilo = num_hilo+1)
                                              {

                                                         ultimo_hijo= ultimo_hijo+ 1;    
                                                      // alert(ultimo_hijo +"daga_selec "  +daga_selec)
                                                         $("div#"+daga_selec+"").children("div#hilo"+(ultimo_hijo-1)).after("<div id ='hilo"+ultimo_hijo+"' data-cantidad=''  data-daga='"+daga_selec+"' class='hilo'>"+
                                                          "<div id='producto' data-cantidad='80' data-altura='' data-imagen=''><p>&nbsp;</p></div>"+
                                                          "<div id='spanes'><span id='eliminar' data-hilo='hilo"+ultimo_hijo+"' data-daga='"+daga_selec+"' class='glyphicon glyphicon-remove-circle ' aria-hidden='true'></span>"+
                                                          "<span id='agregar' data-hilo='hilo"+ultimo_hijo+"' data-daga='"+daga_selec+"' class='glyphicon glyphicon-plus' aria-hidden='true'></span></div>"+
                                                          "</div></div>");
                                                         // alert("agregado" +"daga selec "+ daga_selec+ " " +ultimo_hijo )
                                                }
                                                if(cantidad_hilos_agregar<0)
                                                {
                                                             cantidad_hilos_agregar=cantidad_hilos_agregar*(-1)
                                                                    for(var num_hilo = 1; num_hilo <= cantidad_hilos_agregar; num_hilo = num_hilo+1)
                                                                    {

                                         
                                                          // alert(ultimo_hijo +"daga_selec "  +daga_selec)
                                                             $("div#"+daga_selec+"").children("div#hilo"+(ultimo_hijo)).remove();
                                                                ultimo_hijo= ultimo_hijo - 1;    
                                        
                                                                    }
                                                }
                    
                        
                   
                                    }

                                     hilos_bloque= (hijos_daga-2)- hilos_bloque+2;
                
                                  //alert(hilos_bloque)
                            
                       
                              for(var y=1; y<=hijos_daga;y=y+1)
                              {
                                  
                                  
                                   if(y>hilos_bloque)
                                   {
                                    
                                    producto_selec= $(" select#producto_parrilla  option:selected").attr("data-cod");
                                   nombre_selec =$(" select#producto_parrilla  option:selected").attr("data-nombre");
                                   altura_selec=$(" select#producto_parrilla  option:selected").attr("data-altura");
                      
                                    }
                                    else
                                    {
                           
                                           producto_selec= $(" select#productos  option:selected").attr("data-cod");
                                           nombre_selec =$(" select#productos  option:selected").attr("data-nombre");
                                           altura_selec=$(" select#productos  option:selected").attr("data-altura");
                                  
                                     }
                                               ultimo_hijo_recorrido= ultimo_hijo_recorrido+1+20;
                                           //    alert(ultimo_hijo_recorrido)
                                           if(y === hijos_daga && x===dagas ){
                                               ejecucion=0;
                                           }
                                  $("div#"+daga_selec+" div.hilo:nth-child("+y+")").click();

                              }
                             //  alert("daga a reco "+ suma_hijos_total+ " daga sel"+ dagas_seleccionadas+ "ultimo "+ ultimo_hijo_recorrido)
                             // $("div#"+daga_selec+" div.hilo:nth-child("+hijos_daga+")").click();


                    }


                   

                 }
                 $('#modal_cargando').modal('hide');
                 ejecucion=0;
                 ultimo_hijo_recorrido=0;
                  calcular_cantidades();
            }
                    
        });


});
        
        
        
        
            });
            
     


/*aca vamos a gestionar el llenado de dagas*/



$("#check_todas_selec").change(function () {
             $("input#check_daga").prop('checked', $(this).prop("checked"));
                      
                });
                
  

        
        
        
        
        
        
        
        
        
        
        
 
        
        
        
        
        
        
        
        
        
        

   
       
                
              
    </script>

    


    
    
    
    
    
    
    
    
    
    
    
   
    
    
    
    
    
    
    
@endsection
@section('vue')
<script>
Vue.component('busquedas', {
 
  template: '#busqueda-template'
  
})
var app7 = new Vue({
  el: '#opciones_busquedad',
  data: {
    busquedas: [
      { id: 0, text: 'Busquedad' },
      { id: 1, text: 'Lista'  }
      
    ],
    valor_radio:"Busquedad",
    clase_text:"",
    clase_lista:"hide",
    producto_buscar:""
  },
  methods:{
      mostrar:function(valor_radio, event){
         
             if(valor_radio==="Busquedad")
                {
              this.clase_lista="hide";
              this.clase_text="";
          
                }
                else
                {
                    this.clase_text="hide";
                    this.clase_lista="";
                }
          
      }
  }
})  






        
       

</script>
@endsection
