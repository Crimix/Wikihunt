<?php

use App\Score;
use Illuminate\Database\Seeder;

class ScoreboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scores')->delete();
        $ibScore1 = Score::create([
            'score' => 1,
			'user_id' => 1,
            'game_id' => 1,
        ]);
        $ibScore1->save();
		
        $johnScore1 = Score::create([
            'score' => 2,
			'user_id' => 2,
            'game_id' => 1,
        ]);
        $johnScore1->save();

        $ibScore2 = Score::create([
            'score' => 3,
			'user_id' => 1,
            'game_id' => 2,
        ]);
        $ibScore2->save();
		
        $johnScore2 = Score::create([
            'score' => 4,
			'user_id' => 2,
            'game_id' => 2,
        ]);
        $johnScore2->save();

        $ibScore3 = Score::create([
            'score' => 7,
			'user_id' => 1,
            'game_id' => 3,
        ]);
        $ibScore3->save();
		
        $johnScore3 = Score::create([
            'score' => 8,
			'user_id' => 2,
            'game_id' => 3,
        ]);
        $johnScore3->save();
    }
}
