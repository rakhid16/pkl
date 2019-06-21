<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

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
        	'email' => 'lugitomichael@gmail.com',
        	'password' => strtoupper(md5('lulung'))
        ]);

        Admin::create([
            'email' => 'ricosandyca@gmail.com',
            'password' => strtoupper(md5('riconoob'))
        ]);
    }
}
