<?php


namespace App\Interfaces;

use App\Simulation\League;

interface LeagueFactoryInterface
{
    public static function build(): League;
}
