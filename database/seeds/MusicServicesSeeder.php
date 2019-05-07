<?php

use Illuminate\Database\Seeder;

class MusicServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('music_services')->insert([
            'description'=> 'Equipo de Sonido'
        ]);
        DB::table('music_services')->insert([
            'description'=> 'Pantallas'
        ]);
        DB::table('music_services')->insert([
            'description'=> 'DJ'
        ]);
        DB::table('music_services')->insert([
            'description'=> 'Música en Vivo'
        ]);
        DB::table('music_services')->insert([
            'description'=> 'Vídeo'
        ]);
        DB::table('music_services')->insert([
            'description'=> 'Pista Iluminada'
        ]);
        DB::table('music_services')->insert([
            'description'=> 'Rayos Láser'
        ]);
        DB::table('music_services')->insert([
            'description'=> 'Humo'
        ]);
        DB::table('music_services')->insert([
            'description'=> 'Robot'
        ]);
        DB::table('music_services')->insert([
            'description'=> 'Artículos de Animación'
        ]);
        DB::table('music_services')->insert([
            'description'=> 'Bailarines'
        ]);
        DB::table('music_services')->insert([
            'description'=> 'Iluminación'
        ]);
    }
}
