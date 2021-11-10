<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Player;

class PlayersController extends Controller
{
    public function index() {
        //echo 'test';
        // $params = [
        //     'test' => 'これはテストです。',
        //     'sample' => 'これはサンプルです。'
        // ];

        // return view('players.index', compact('params'));

        $players = Player::all();
        return view('players.index', compact('players'));
    }
}
