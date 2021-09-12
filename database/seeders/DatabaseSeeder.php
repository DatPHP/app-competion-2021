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

        DB::table('users')->insert([
            [
                'name' => 'Dat Nguyen Van',
                'email' => 'nguyenvandat170296@gmail.com',
                'password' => bcrypt('vandat96'),
                'level' =>'1',
                'status' => '1',
                'roles' => 'regular',
            ]
        ]);
    }
}
