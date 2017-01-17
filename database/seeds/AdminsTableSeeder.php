<?php

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'admin',
            'password' => bcrypt('123456'),
            'email' => 'admin@szjlxh.com',
            'phone' => '18888888888',
        ]);
    }
}
