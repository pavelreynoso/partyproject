<?php

use Illuminate\Database\Seeder;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'type'=> 'Admin'
        ]);
        DB::table('profiles')->insert([
            'type'=> 'Provider'
        ]);
        DB::table('profiles')->insert([
            'type'=> 'User'
        ]);
    }
}
