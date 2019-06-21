<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            "name" => "MAINTENANCE",
            "content" => "0"
        ]);

        Setting::create([
            "name" => "RIGHT ANSWER CSO",
            "content" => "4"
        ]);

        Setting::create([
            "name" => "EMPTY ANSWER CSO",
            "content" => "0"
        ]);

        Setting::create([
            "name" => "WRONG ANSWER CSO",
            "content" => "-1"
        ]);

        Setting::create([
            "name" => "START CSO",
            "content" => "1"//1= stop, 2 = start
        ]);

        Setting::create([
            "name" => "START FWC TAHAP 1",
            "content" => "2"//1= stop, 2 = start
        ]);

        Setting::create([
            "name" => "START FWC TAHAP 2",
            "content" => "1"//1= stop, 2 = start
        ]);
    }
}
