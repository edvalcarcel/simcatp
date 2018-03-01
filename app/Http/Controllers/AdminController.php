<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horno;
use App\Mov_horno;
use App\Tipo_mov_horno;
use App\Festivo;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

// Ejemplo de uso:

// Salida : 17
    public function index()
    {
        //Producto::with(["inventario.bodega", "inventario"])->
        $hornos = Horno::with(["mov_hornos"])->where("id",">",0)->get();
        $fecha_final= date('Y-m-d', strtotime('+25 day')) ; 
        $fecha_inicio= date('Y-m-d', strtotime('-10 day')); 
        $array_festivos = array();
         $festivos = Festivo::select(["day_festiv"])->where("day_festiv",">=",$fecha_inicio)->get();
         foreach ( $festivos as  $festivo) {
        array_push($array_festivos,$festivo->day_festiv);
         }
  
      
        $dias	= (strtotime($fecha_inicio)-strtotime($fecha_final))/86400;
	$dias 	= abs($dias); 
        $dias = floor($dias);		
            $contador =0;
  //     dd($hornos);
             
             
       // echo $hornos;
       // $mov_hornos = Mov_horno::all();
        //$tipo_mov_hornos = Tipo_mov_horno::all();

       // return view("administracion.admin",["hornos"=>$hornos,"tipo_mov_hornos"=>$tipo_mov_hornos,"mov_hornos"=>$mov_hornos]);
       
         return view("administracion.admin",
                 ["hornos"=>$hornos,"fecha_inicio"=>$fecha_inicio,"dias"=>$dias,
                    "fecha_inicio"=>$fecha_inicio, "contador"=>$contador,
                     "array_festivos"=>$array_festivos]);
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
}
