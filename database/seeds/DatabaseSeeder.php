<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
			UserSeeder::class,
			GameTypeSeeder::class,
            GameSeeder::class,
            ScoreboardSeeder::class
		]);
    }
}
