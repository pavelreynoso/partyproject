<?php

use Illuminate\Database\Seeder;

class ArticleCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles_categories')->insert([
            'type'=> 'Música'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Lugares para Eventos'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Comida Banquetes y Bebidas'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Organización de Eventos'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Mobiliario y Decoración'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Animación'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Transporte'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Fotografía y Vídeo'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Vestimenta y Complementos'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Regalos y Recuerdos'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Viajes'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Belleza'
        ]);
    }
}
