<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;
use RandomLib\Source\Random;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminProfile = Profile::where('type', 'Admin')->first();
        $providerProfile = Profile::where('type', 'Provider')->first();
        $userProfile = Profile::where('type', 'User')->first();

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin1234'),
            'date_of_birth' => '1970-01-01',
            'last_names' => 'Administrator',
        ]);

        $provider = User::create([
            'name' => 'Provider',
            'email' => 'provider@provider.com',
            'password' => bcrypt('provider1234'),
            'date_of_birth' => '1970-01-01',
            'last_names' => 'Provider',
        ]);

        $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('user1234'),
            'date_of_birth' => '1970-01-01',
            'last_names' => 'User',
        ]);

        $admin->profiles()->attach($adminProfile);
        $provider->profiles()->attach($providerProfile);
        $user->profiles()->attach($userProfile);
    }
}
