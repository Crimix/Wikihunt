<?php

use App\GameType;
use Illuminate\Database\Seeder;

class GameTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('game_types')->delete();
        $challenge = GameType::create([
            'id' => '1',
			'gameType' => 'Challenge',
        ]);
        $challenge->save();
    }
}
