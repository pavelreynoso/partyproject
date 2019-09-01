<?php

use Illuminate\Database\Seeder;

class EventCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events_categories')->insert([
            'type'=> 'Bodas'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'XV años'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Cumpleaños'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Fiestas Infantiles'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Eventos Empresariales'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Religiosos'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Despedida de Solteros'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Graduaciones'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Baby Shower'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Reuniones Casuales'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Todas las anteriores'
        ]);
    }
}
