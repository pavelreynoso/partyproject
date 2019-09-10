<?php

use Illuminate\Database\Seeder;

class ArticleCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles_categories')->insert([
            'type'=> 'Music'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Event Venues'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Food, Catering and Drinks'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Event-Planning'
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
