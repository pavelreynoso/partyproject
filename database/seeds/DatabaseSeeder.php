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
        $this->call(ProfilesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(EventCategoriesTableSeeder::class);
        $this->call(ArticleCategoriesTableSeeder::class);
        $this->call(MusicCategoriesTableSeeder::class);
        $this->call(MusicServicesTableSeeder::class);
        $this->call(CateringCategoriesTableSeeder::class);
        $this->call(CateringServicesTableSeeder::class);
        $this->call(CateringOfferTypesTableSeeder::class);
        //$this->call(SepomexSeeder::class);
    }
}
