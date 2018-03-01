<?php

use Illuminate\Database\Seeder;
use App\Producto;
class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        Producto::create(['nombre'=>"Piso 60","codigo"=>"P.60",'categoria'=>"Pisos",
                        'area'=>0.36,'largo'=>1,'ancho'=>1,'alto'=>0.6]);

        Producto::create(['nombre'=>"Piso 30","codigo"=>"P.30",'categoria'=>"Pisos",
                        'area'=>0.09,'largo'=>1,'ancho'=>1,'alto'=>0.30]);

        Producto::create(['nombre'=>"Piso 25","codigo"=>"P.25",'categoria'=>"Pisos",
                        'area'=>0.0625,'largo'=>1,'ancho'=>1,'alto'=>0.25]);

        Producto::create(['nombre'=>"Zocalo 30","codigo"=>"Z.30",'categoria'=>"Enchape",
                        'area'=>0.09,'largo'=>1,'ancho'=>1,'alto'=>0.30]);

        Producto::create(['nombre'=>"Zocalo 25","codigo"=>"Z.25",'categoria'=>"Enchape",
                        'area'=>0.0625,'largo'=>1,'ancho'=>1,'alto'=>0.25]);

        Producto::create(['nombre'=>"Bloque 5/30","codigo"=>"B 5-30",'categoria'=>"Mamposteria",
                        'area'=>0.09,'largo'=>1,'ancho'=>1,'alto'=>0.3]);

        Producto::create(['nombre'=>"Bloque 1/2","codigo"=>"B 1-2",'categoria'=>"Mamposteria",
                        'area'=>0.025,'largo'=>1,'ancho'=>1,'alto'=>0.15]);

        Producto::create(['nombre'=>"Piso 40x20","codigo"=>"P.40X20",'categoria'=>"Pisos",
                        'area'=>0.16,'largo'=>1,'ancho'=>1,'alto'=>0.4]);

        Producto::create(['nombre'=>"Piso 40x10","codigo"=>"P.40X10",'categoria'=>"Pisos",
                        'area'=>0.16,'largo'=>1,'ancho'=>1,'alto'=>0.4]);

        Producto::create(['nombre'=>"Fachaleta 7*25","codigo"=>"FACH",'categoria'=>"Pisos",
                        'area'=>0.0049,'largo'=>1,'ancho'=>1,'alto'=>0.07]);

        Producto::create(['nombre'=>"Teja Shingle","codigo"=>"T.S",'categoria'=>"Cubiertas",
                        'area'=>0.1089,'largo'=>1,'ancho'=>1,'alto'=>0.33]);

        Producto::create(['nombre'=>"Teja Romana","codigo"=>"T.R",'categoria'=>"Cubiertas",
                        'area'=>0.1089,'largo'=>1,'ancho'=>1,'alto'=>0.33]);

        Producto::create(['nombre'=>"Huella 30","codigo"=>"H.30",'categoria'=>"Pisos",
                        'area'=>0.09,'largo'=>1,'ancho'=>1,'alto'=>0.3]);

        Producto::create(['nombre'=>"Huella 25","codigo"=>"H.25",'categoria'=>"Pisos",
                        'area'=>0.0625,'largo'=>1,'ancho'=>1,'alto'=>0.25]);


                
    }
}
