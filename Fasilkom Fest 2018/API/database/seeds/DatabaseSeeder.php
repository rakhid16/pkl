<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SettingTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(CompetitionTableSeeder::class);
    }
}
