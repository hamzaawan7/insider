<?php


namespace App\Simulation;


class Team extends League
{
    protected $team_id;

    public function __construct($id)
    {
        $this->team_id = $id;
    }
}
