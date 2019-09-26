<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
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
        $adminRole = Role::where('type', 'Admin')->first();
        $providerRole = Role::where('type', 'Provider')->first();
        $userRole = Role::where('type', 'User')->first();

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

        $admin->roles()->attach($adminRole);
        $provider->roles()->attach($providerRole);
        $user->roles()->attach($userRole);
    }
}
