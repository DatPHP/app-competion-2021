<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        DB::table('admins')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'email' => 'admin@gmail.com',
                'status' => '1',
                'roles' => 'superadmin',
                
            ]
        ]);

        DB::table('users')->insert([
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('admin123'),
                'phone' => '0328089939',
                'address' => '51 Nguyen Van Tiet Street , Thuan An City, Binh Duong Province',
                'gender'=>'1',
                'level' =>'1',
                'status' => '1',
                'roles' => 'regular',
            ]
        ]);

    }
}
