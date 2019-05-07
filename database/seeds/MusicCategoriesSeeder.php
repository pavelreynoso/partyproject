<?php

use Illuminate\Database\Seeder;

class MusicCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('music_categories')->insert([
            'description'=> 'Mariachi'
        ]);
        DB::table('music_categories')->insert([
            'description'=> 'Rockola/Sonido'
        ]);
        DB::table('music_categories')->insert([
            'description'=> 'Luz y Sonido'
        ]);
        DB::table('music_categories')->insert([
            'description'=> 'Música Versátil'
        ]);
        DB::table('music_categories')->insert([
            'description'=> 'DJ'
        ]);
        DB::table('music_categories')->insert([
            'description'=> 'Norteño'
        ]);
        DB::table('music_categories')->insert([
            'description'=> 'Norteño/Banda'
        ]);
        DB::table('music_categories')->insert([
            'description'=> 'Banda'
        ]);
        DB::table('music_categories')->insert([
            'description'=> 'Trío'
        ]);
        DB::table('music_categories')->insert([
            'description'=> 'Cuarteto'
        ]);
        DB::table('music_categories')->insert([
            'description'=> 'Coro'
        ]);
        DB::table('music_categories')->insert([
            'description'=> 'Filarmónica'
        ]);
        DB::table('music_categories')->insert([
            'description'=> 'Música Cristiana'
        ]);
        DB::table('music_categories')->insert([
            'description'=> 'Saxofonista'
        ]);
    }
}
