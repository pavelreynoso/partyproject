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
            'type'=> 'Weddings'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Sweet sixteen'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Birthdays'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Kids parties'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Business events'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Religious'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Bachelorettes'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Graduations'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Baby Showers'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'Get-Togethers'
        ]);
        DB::table('events_categories')->insert([
            'type'=> 'All options'
        ]);
    }
}
