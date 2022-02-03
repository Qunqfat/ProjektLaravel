<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GameController extends Controller
{
    public function show()
    {
        return view('layout.main');
    }

    public function equipment()
    {
        return view('user.equipment');
    }

    public function stats()
    {
        return view('user.stats');
    }
    public function master()
    {
        return view('layout.master');
    }

    public function rest()
    {
        return view('user.rest');
    }

    public function monsters()
    {
        return view('user.monsters');
    }

    public function characters()
    {
        return view('user.characters');
    }

    public function fights()
    {
        return view('user.fights');
    }

    public function animals()
    {
        return view('user.animals');
    }

    public function shop()
    {
        return view('user.shop');
    }

    public function privateHandel()
    {
        return view('user.privateHandel');
    }

    public function playerShop()
    {
        return view('user.playerShop');
    }

    public function news()
    {
        return view('user.news');
    }

    public function king()
    {
        return view('user.king');
    }

    public function jobs()
    {
        return view('user.jobs');
    }

    public function guilds()
    {
        return view('user.jobs');
    }
}
