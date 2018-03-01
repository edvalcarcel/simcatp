<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Grafica;
use App\Item;
use App\Daga;
use Illuminate\Support\Facades\DB;
use App\Cantidade;
use App\Mov_horno;
use App\Total_lado;

class SimuladorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
      public function __construct()
    {
          $this->middleware('auth');
       // $this->middleware('guest');
          
    
        
    }
    
    


  
    
    public function index($seccion,$limite,$fecha,$horno,$mov)
    {
        //
        $productos=Producto::all();
        $cantidades =Cantidade::select(["codigo","cantidad"])->where('id','>',0)->get();
        return view("simulador.simulador",["productos"=>$productos,
            "cantidades"=>$cantidades,"seccion"=>$seccion,"limite"=>$limite,
            "horno"=>$horno,"mov"=>$mov,"fecha"=>$fecha]);
        
    }
    public function autocomplete_productos(Request $request)
    {
            //
        $nombre_producto = htmlspecialchars(trim($request["nombre_producto"]));
      
        $productos=Producto::select("nombre")->where('nombre','like','%'.$nombre_producto.'%')->get();
      echo json_encode($productos);
        //echo json_encode($productos);
        
    }
    public function Cargar_productos()
    {
            //
        
        $productos=Producto::select(["nombre", "codigo"])->get();
      echo json_encode($productos);
        //echo json_encode($productos);
        
    }
    public function Registrar(Request $request)
    {
         $grafica_id =Grafica::select("id")->where("mov_horno_id","=",$request["movimiento_se"])->get();
         $registros_id =Grafica::select("id")->where("mov_horno_id","=",$request["movimiento_se"])->count();
         //$grafica_id);
         //if(isset($grafica_id[0]["id"])){
         if($registros_id>0){
            
              return (array("message"=>"Programacion Grabada","id"=>$grafica_id[0]["id"]));
         }else{
            $grafica= Grafica::create(["mov_horno_id"=>$request["movimiento_se"]]);
             $id=$grafica->id;
             return (array("message"=>"Programacion Grabada","id"=> $grafica->id)); 
         }
         

    }
    
    public function Registrar_movimiento(Request $request)
    {
        
        $codigo =  Mov_horno::with(["horno"])->where([["horno_id","=",$request["horno_se"]],
            ['fecha_inicio',"=",$request["fecha_ini"]],
            ["tipo_mov_horno_id","=",$request["tipo_mov"]]])->get();
 
        if($codigo->count()>0){
            $grafica_id = Grafica::where("mov_horno_id","=",$codigo[0]->id)->get();
            $totales= DB::table('total_lados')
                    ->where('grafica_id', '=', $grafica_id[0]->id)
                ->select('producto', DB::raw('SUM(cantidad) as cantidad_total'))
                ->groupBy('producto')
                
                ->get();
           $lados = Total_lado::where("grafica_id","=",$grafica_id[0]->id)->get();
            $operations =  Mov_horno::where("id_cargue","=",$codigo[0]->id)->get();
           
          echo json_encode(["resp"=>"Cargue Existente","codigo"=>$codigo[0]->id,
                  "operations"=>$operations,"totales"=>$totales,"lados"=>$lados]);
          
        }else if($codigo->count() == 0 && $request["opcion"]==="revisar"){
            echo json_encode(["resp"=>"Ninguno"]);
        }
        else{
            $movimiento = Mov_horno::create(["tipo_mov_horno_id"=> $request["tipo_mov"],
            'fecha_inicio'=>$request["fecha_ini"],
            'fecha_fin'=>$request["fecha_fin"],
            'horno_id'=>$request["horno_se"],
             'id_cargue'=>$request["id_cargue"]   ]);
            echo json_encode(["message"=>"Correcto, Agregado","codigo"=>$movimiento->id]);
        }
        
    }
    
    
    
     public function Update_movimiento(Request $request)
    {
                $movimiento = Mov_horno::find($request["id"]);
                $movimiento->fecha_inicio =$request["fecha_ini"];
                $movimiento->fecha_fin =$request["fecha_fin"];
                $movimiento->horno_id =$request["horno_se"];
                $movimiento->id_cargue =$request["id_cargue"];
            $movimiento->save();
            echo json_encode(["message"=>"Actualizado Correctamente"]);
        
        
    }
    
     public function Delete_movimiento(Request $request)
    {
           Mov_horno::destroy($request["id"]);
               
            echo json_encode(["message"=>"eliminado Correctamente"]);
        
        
    }
    
      public function Registrar_totales(Request $request){
          $productos =  $request["productos"];
         $cantidades = $request["cantidades"];
          $items= count($productos);
          for($x=0; $x<$items; $x=$x+1){
             $total = Total_lado::where([["grafica_id","=",$request["id_grafica"]],
                  ["producto","=",$productos[$x]],["lado","=",$request["lado"]]])->get();
              if( $total->count()>0){
                  $total_selec =Total_lado::find($total[0]->id);
                  $total_selec->lado=$request["lado"];
                  $total_selec->producto=$productos[$x];
                  $total_selec->cantidad=$cantidades[$x];
                  $total_selec->peso=0;
                  $total_selec->grafica_id=$request["id_grafica"];
                  $total_selec->save();
                 
              }else{
                 Total_lado::create(array("lado"=>$request["lado"],
                  "producto"=>$productos[$x],
                  "cantidad"=>$cantidades[$x],
                  "peso"=>0,
                  "grafica_id"=>$request["id_grafica"])); 
              }
              
          }
                  
         echo json_encode("Correcto");  
          
      }
    
    
    
  public function Graficar_delete(Request $request)
          {
       $id=$request["id"];

       
       
         Daga::where([['grafica_id',"=",$id],['seccion',"=",$request["seccion_se"]]])->delete();
          Item::where([['grafica_id',"=",$id],['seccion',"=",$request["seccion_se"]]])->delete();
         echo json_encode(array("resp"=>"Correcto"));
    
  }  
public function Graficar(Request $request)
    {

     $id=$request["id"];

       $datos =$request["graficar"];
      
       $daga = $request["daga"];
       $codigo_daga = $request["codigo_daga"];
      
               
       Daga::create(array('codigo'=>$codigo_daga,'cod_daga'=> $daga,'grafica_id'=>$id,"grupo"=>"","seccion"=>$request["seccion_se"]));
    
 foreach ($datos as $dato) {
    Item::create(array('codigo'=>$dato["producto"],'hilo'=>$dato["hilo"],'daga'=>$dato["daga"],'ubicacion'=>$dato["posicion"],
        "grafica_id"=>$id,"color_hilo"=>$dato["color"],'seccion'=>$request["seccion_se"]));
 }
      
          echo json_encode(array("id"=>$id)); 
      

        
       
    }




       public function inicio($fecha_cargue,$horno)
    {
        //
   
           $mes   = substr($fecha_cargue, 5, 2);
           $dia = substr($fecha_cargue, 8, 2);
            $anio = substr($fecha_cargue, 0, 4);
   
         $fecha_js = $mes."/".$dia."/".$anio;
         echo  $fecha_js;
        return view("simulador.inicio",["fecha_cargue"=>$fecha_cargue,"horno"=>$horno,
                                        "fecha_js"=> $fecha_js]);

        
    }
    public function obtener_items(Request $request)
    {
        //
        //    echo $request["movimiento_se"];
        $grafica =Grafica::select("id")->where("mov_horno_id","=",$request["id_mov"])->get();
       // echo $grafica;
        $items = Item::where([["grafica_id","=",$grafica[0]["id"]],["seccion","=",$request["seccion_se"]]])->get();
        $dagas = Item::select("daga")->where([["grafica_id","=",$grafica[0]["id"]],["seccion","=",$request["seccion_se"]]])->max("daga");
        $hilo = Item::select("hilo")->where([["grafica_id","=",$grafica[0]["id"]],["seccion","=",$request["seccion_se"]]])->max("hilo");
        
        echo json_encode(array("items"=>$items,
                                "daga_mayor"=>$dagas,
                                "hilo_mayor"=>$hilo));
        
        
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function cargando(){
        
    }
}
