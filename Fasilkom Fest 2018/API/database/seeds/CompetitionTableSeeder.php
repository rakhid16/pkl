<?php

use Illuminate\Database\Seeder;
use App\Models\Competition;

class CompetitionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Competition::create([
        	'event_id' => 1,
        	'name' => 'Computer Science Olympiad',
        	'short_desc' => '',
        	'long_desc' => '',
            'price_to_compete' => 90000
        ]);

        Competition::create([
            'event_id' => 1,
            'name' => 'Fasilkom Web Contest',
            'short_desc' => '',
            'long_desc' => '',
            'price_to_compete' => 80000
        ]);

        Competition::create([
            'event_id' => 1,
            'name' => 'FSC',
            'short_desc' => '',
            'long_desc' => '',
            'price_to_compete' => 0
        ]);

        Competition::create([
            'event_id' => 1,
            'name' => 'FPC',
            'short_desc' => '',
            'long_desc' => '',
            'price_to_compete' => 0
        ]);
    }
}
