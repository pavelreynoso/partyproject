<?php

use Illuminate\Database\Seeder;

class CateringCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catering_categories')->insert([
            'type'=> 'Banquete Clásico'
        ]);
        DB::table('catering_categories')->insert([
            'type'=> 'Comida Mexicana'
        ]);
        DB::table('catering_categories')->insert([
            'type'=> 'Taquizas'
        ]);
        DB::table('catering_categories')->insert([
            'type'=> 'Coctéles'
        ]);
        DB::table('catering_categories')->insert([
            'type'=> 'Servicio de Estaciones'
        ]);
        DB::table('catering_categories')->insert([
            'type'=> 'Comida Informal'
        ]);
        DB::table('catering_categories')->insert([
            'type'=> 'Buffet'
        ]);
    }
}
