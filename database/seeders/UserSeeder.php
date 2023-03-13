<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        Role::create(['name' => 'admin']);

        User::truncate();
        $admin = User::create([
           'name' => 'admin',
           'email' => 'admin@admin.com',
           'password' => bcrypt('admin123')
        ]);
        $admin->assignRole('admin');
    }
}
