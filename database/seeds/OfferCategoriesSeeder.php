<?php

use Illuminate\Database\Seeder;

class OfferCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offer_categories')->insert([
            'type'=> 'Service',
        ]);
        DB::table('offer_categories')->insert([
            'type'=> 'Product'
        ]);
        DB::table('offer_categories')->insert([
            'type'=> 'Both'
        ]);
    }
}
