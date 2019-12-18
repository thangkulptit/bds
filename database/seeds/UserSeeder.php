<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Pham Thang',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456')
        ]);
    }
}
