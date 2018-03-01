<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Daga;
class GraficasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
       ///$id_grafica= $request["id_grafica"];
       $id_grafica =$request["id_grafica"];
        $dagas = Daga::select("codigo","cod_daga","id","grupo","seccion")->where([["id",">",0],["grafica_id","=",$id_grafica]])->groupBy("codigo")->get();
        //echo $dagas;
      
       foreach ($dagas as $daga) {
             $grupo ="Daga";
            //echo $daga->codigo;
           $codigos_dagas = Daga::select("cod_daga")->where([["codigo","=",$daga->codigo],["grafica_id","=",$id_grafica]])->get();
           foreach ($codigos_dagas as $codigos_daga) {
               $grupo .= " ". number_format($codigos_daga->cod_daga,0)." -";
           }        
           //$grupo = substr($grupo , 0, -1);
           $daga_actualizar = Daga::find($daga->id);
           $daga_actualizar->grupo = $grupo;
            $daga_actualizar->save();
       }
       $dagas_con_grupos = Daga::select("codigo","cod_daga","id","grupo","seccion")->where([["id",">",0],["grafica_id","=",$id_grafica]])->groupBy("codigo")->get();
    
         return view("graficas.mostrar",["dagas"=>$dagas_con_grupos]);
           }
           
           
           
           
           
           
           public function index2($id,$pagina)
    {
        //
       ///$id_grafica= $request["id_grafica"];
       $id_grafica =$id;
       $pagina_origen =$pagina;
        $dagas = Daga::select("codigo","cod_daga","id","grupo","seccion")->where([["id",">",0],["grafica_id","=",$id_grafica]])->groupBy("codigo")->get();
        //echo $dagas;
      
       foreach ($dagas as $daga) {
             $grupo ="Daga";
            //echo $daga->codigo;
           $codigos_dagas = Daga::select("cod_daga")->where([["codigo","=",$daga->codigo],["grafica_id","=",$id_grafica]]) ->orderBy('cod_daga', 'asc')->get();
           foreach ($codigos_dagas as $codigos_daga) {
               $grupo .= " ". number_format($codigos_daga->cod_daga,0)." -";
           }        
           //$grupo = substr($grupo , 0, -1);
           $daga_actualizar = Daga::find($daga->id);
           $daga_actualizar->grupo = $grupo;
            $daga_actualizar->save();
       }
       $dagas_con_grupos = Daga::select("codigo","cod_daga","id","grupo","grafica_id","seccion")->where([["id",">",0],["grafica_id","=",$id_grafica]])->groupBy("codigo")->get();
            if($pagina_origen=="pagina"){
              echo json_encode($dagas_con_grupos);
            }else{
               return view("graficas.mostrar",["dagas"=>$dagas_con_grupos]);
            }
        
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
