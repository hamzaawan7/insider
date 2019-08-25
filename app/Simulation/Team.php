<?php


namespace App\Simulation;


class Team extends League
{
    protected $team;

    public function __construct($t)
    {
        $this->team = $t;
    }
}
