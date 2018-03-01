<?php

use Illuminate\Database\Seeder;
use App\Horno;
use App\Tipo_mov_horno;

class hornosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Horno::create(["horno"=>"H-1","Descripcion"=>"pertenece a Arte y Arcilla"]);
        Horno::create(["horno"=>"H-2","Descripcion"=>"pertenece a Gress"]);
        Horno::create(["horno"=>"H-3","Descripcion"=>"pertenece a Gress"]);
        Horno::create(["horno"=>"H-4","Descripcion"=>"pertenece a Gress"]);
        Horno::create(["horno"=>"H-5","Descripcion"=>"pertenece a Gress"]);
        Horno::create(["horno"=>"H-6","Descripcion"=>"pertenece a Gress"]);
        Horno::create(["horno"=>"H-7","Descripcion"=>"pertenece a Gress"]);
        Horno::create(["horno"=>"H-8","Descripcion"=>"pertenece a Gress"]);
        Horno::create(["horno"=>"H-9","Descripcion"=>"pertenece a Gress"]);
        Horno::create(["horno"=>"H-10","Descripcion"=>"pertenece a Gress"]);
        Horno::create(["horno"=>"H-11","Descripcion"=>"pertenece a Gress"]);
        Horno::create(["horno"=>"H-12","Descripcion"=>"pertenece a Gress"]);
        Horno::create(["horno"=>"H-13","Descripcion"=>"pertenece a Arte y Arcilla"]);
        Horno::create(["horno"=>"H-14","Descripcion"=>"pertenece a Arte y Arcilla"]);
        Horno::create(["horno"=>"H-15","Descripcion"=>"pertenece a Arte y Arcilla"]);


        Tipo_mov_horno::create(["nombre_movimiento"=>"Cargue"]);
        Tipo_mov_horno::create(["nombre_movimiento"=>"Descargue"]);
        Tipo_mov_horno::create(["nombre_movimiento"=>"Enfriamiento"]);
        Tipo_mov_horno::create(["nombre_movimiento"=>"Mantenimiento"]);
        Tipo_mov_horno::create(["nombre_movimiento"=>"Quema"]);
        Tipo_mov_horno::create(["nombre_movimiento"=>"Vacio"]);

    }
}
