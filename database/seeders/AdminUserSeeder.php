<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Asfandyar Khan',
            'email' => 'aasfandyark90@gmail.com',
            'password' => bcrypt('admin!@#')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $user->assignRole([$role->id]);
    }
}
