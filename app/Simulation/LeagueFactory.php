<?php


namespace App\Simulation;


use App\Interfaces\LeagueFactoryInterface;

class LeagueFactory implements LeagueFactoryInterface
{
    public static function build(): League
    {
        // TODO: Implement build() method.
        return new League();
    }
}
