<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the 'admin' role if it doesn't exist
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Create an admin user
        $adminUser = User::firstOrCreate(
            ['nip_nis' => '12345'],
            [
                'nama' => 'Admin E-Smansa',
                'nip_nis' => '12345',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('iniadmin1'), 
                'status' => 'guru',
            ]
        );

        // Assign the role to the user
        if (!$adminUser->hasRole('admin')) {
            $adminUser->assignRole($adminRole);
        }
    }
}
