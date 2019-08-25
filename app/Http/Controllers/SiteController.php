<?php

namespace App\Http\Controllers;

use App\League;
use Illuminate\Support\Facades\Artisan;

class SiteController extends Controller
{
    public function index()
    {
        Artisan::call('db:seed --class=ResetSeeder');
        $league = League::findorfail(1);
        return view('leagues.index', compact('league'));
    }
}
