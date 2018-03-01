@extends('layouts.app2')
        

@section('content')

<table class="table table-bordered" style="font-size: 24px">
    <thead>
        <tr>
        <td>Nombre</td>
        <td>Ver</td>
        <td>Imprimir</td>
        </tr>
    </thead>
    
    @foreach ($dagas as $daga)
                               
    <tr>
        <td>{{ substr($daga->grupo,0,-1)}}</td>
        <td><a href="http://192.168.1.189:8080/grafica/?id_grafica={{$daga->grafica_id}}&id_daga={{ number_format($daga->cod_daga,0)}}">Ver</a></td>
        <td><a href="http://192.168.1.189:8080/grafica/?id_grafica={{$daga->grafica_id}}&id_daga={{ number_format($daga->cod_daga,0)}}&imprimir=true">Imprimir</a></td>
    </tr>
                               @endforeach
                               </table>



@endsection



        

@section('script')

    


    
    
    
    
    
    
    
    
    
    
    
   
    
    
    
    
    
    
    
@endsection
@section('vue')

@endsection
