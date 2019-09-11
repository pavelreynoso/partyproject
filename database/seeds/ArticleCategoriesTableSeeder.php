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
            'type'=> 'Entertainment'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Transportation'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Photography and Video'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Clothing'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Gifts and Souvenirs'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Travel'
        ]);
        DB::table('articles_categories')->insert([
            'type'=> 'Beauty'
        ]);
    }
}
