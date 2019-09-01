<?php

use Illuminate\Database\Seeder;

class CateringServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catering_services')->insert([
            'type'=> 'Banquete'
        ]);
        DB::table('catering_services')->insert([
            'type'=> 'Bebidas'
        ]);
        DB::table('catering_services')->insert([
            'type'=> 'Mantelería'
        ]);
        DB::table('catering_services')->insert([
            'type'=> 'Decoración'
        ]);
        DB::table('catering_services')->insert([
            'type'=> 'Vinos y Licores'
        ]);
        DB::table('catering_services')->insert([
            'type'=> 'Montaje'
        ]);
        DB::table('catering_services')->insert([
            'type'=> 'Meseros y Personal'
        ]);
        DB::table('catering_services')->insert([
            'type'=> 'Vajilla'
        ]);
        DB::table('catering_services')->insert([
            'type'=> 'Utencilios'
        ]);
        DB::table('catering_services')->insert([
            'type'=> 'Baristas'
        ]);
        DB::table('catering_services')->insert([
            'type'=> 'Hielo y Refrescos'
        ]);
        DB::table('catering_services')->insert([
            'type'=> 'Capitán de Meseros'
        ]);
        DB::table('catering_services')->insert([
            'type'=> 'Barras Personalizadas'
        ]);
        DB::table('catering_services')->insert([
            'type'=> 'Candy Station'
        ]);
    }
}
