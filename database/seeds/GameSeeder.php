<?php

use App\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->delete();
        $game1 = Game::create([
            'startPage' => 'Volkswagen',
			'goalPage' => 'Adolf Hitler',
			'startPageUrl' => 'https://en.wikipedia.org/wiki/Volkswagen',
			'goalPageUrl' => 'https://en.wikipedia.org/wiki/Adolf_Hitler',
			'gameType' => '1',
        ]);
        $game1->save();
		
        $game2 = Game::create([
            'startPage' => 'Napoleon',
			'goalPage' => 'Vladimir Putin',
			'startPageUrl' => 'https://en.wikipedia.org/wiki/Napoleon',
			'goalPageUrl' => 'https://en.wikipedia.org/wiki/Vladimir_Putin',
			'gameType' => '1',
        ]);
        $game2->save();
		
		$game3 = Game::create([
            'startPage' => 'Nuclear weapon',
			'goalPage' => 'Antibiotics',
			'startPageUrl' => 'https://en.wikipedia.org/wiki/Nuclear_weapon',
			'goalPageUrl' => 'https://en.wikipedia.org/wiki/Antibiotics',
			'gameType' => '1',
        ]);
        $game3->save();
    }
}
