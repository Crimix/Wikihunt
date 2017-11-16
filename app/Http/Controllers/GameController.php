<?php

namespace App\Http\Controllers;

use App\Game;
use App\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class GameController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function gameSelection()
    {
        $categories = Game::all();
        return view('gameSelection')->with('categories',$categories);
    }
	
	public function startGame()
    {
        $id = Input::get('drop_down');
        $game = Game::find($id);
        $scores = Score::where('game_id', $id)->orderBy('score','desc')->take(5)->get();
        return view('startGame')->with('game',$game)->with('scores',$scores);
    }
	
	
	
}
