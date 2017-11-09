<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

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
        return view('startGame');
    }
	
	
	
}
