<?php

namespace Database\Seeders;

// use App\Models\Role as ModelsRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role as ModelsRole;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $superadmin = ModelsRole::create(['name' => 'Superadmin', 'guard_name' => 'web']);

        $sales = ModelsRole::create(['name' => 'Sales', 'guard_name' => 'web']);

        $admin = \App\Models\User::create([
            'name' => 'Superadmin',
            'email' => 'superadmin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('asdasd'), // password
            'remember_token' => Str::random(10),
            'profile_photo_path' => ''
        ]);

        $admin2 = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => Hash::make('asdfasdf'), // password
            'remember_token' => Str::random(10),
            'profile_photo_path' => ''
        ]);

        $usersales = \App\Models\User::create([
            'name' => 'Sales',
            'email' => 'sales@sales.com',
            'email_verified_at' => now(),
            'password' => Hash::make('asdasd'), // password
            'remember_token' => Str::random(10),
            'profile_photo_path' => ''
        ]);

        $admin->assignRole($superadmin);
        $usersales->assignRole($sales);
        $admin2->assignRole($superadmin);
    }
}
