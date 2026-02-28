<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $adminsuperRole = Role::create([
            'name' => 'Admin Super'
        ]);
        $admindataRole = Role::create([
            'name' => 'Admin Data'
        ]);
        $consultantRole = Role::create([
            'name' => 'Consultant'
        ]);
        $user = User::create([
            'name' => 'Admin Super',
            'email' => 'admin@kapabelindonesia.com',
            'password' => bcrypt('admin12345')
        ]);
        $user->assignRole($adminsuperRole);

    }
}
