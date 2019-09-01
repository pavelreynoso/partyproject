<?php

use Illuminate\Database\Seeder;

class CateringOfferTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('catering_offer_types')->insert([
            'type'=> 'Por Paquetes'
        ]);
        DB::table('catering_offer_types')->insert([
            'type'=> 'Por Invitado'
        ]);
    }
}
