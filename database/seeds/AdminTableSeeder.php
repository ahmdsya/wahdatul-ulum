<?php

use Illuminate\Database\Seeder;
Use App\admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'password' => bcrypt('secret123')
        ]);
    }
}
