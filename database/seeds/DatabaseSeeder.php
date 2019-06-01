<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $this->call(EventCategoriesSeeder::class);
        $this->call(ArticleCategoriesSeeder::class);
        $this->call(MusicCategoriesSeeder::class);
        $this->call(MusicServicesSeeder::class);
        $this->call(CateringCategoriesSeeder::class);
        $this->call(CateringServicesSeeder::class);
        $this->call(CateringOfferTypesSeeder::class);
        //$this->call(UsersTableSeeder::class);
        //$this->call(SepomexSeeder::class);
    }
}
