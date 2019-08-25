<?php


namespace App\Simulation;


use App\Standing;

class TeamPrediction extends League
{
    private $team_prediction;

    public function __construct($tp)
    {
        $this->team_prediction = $tp;
    }

    public function updatePredictions()
    {
        $match = $this->team_prediction->team->latestMatch($this->team_prediction->team_id);
        $result = $this->checkWinner($match, $this->team_prediction->team_id);
        $this->team_prediction->percentage = $this->calculatePrediction($this->team_prediction, $result);
        $this->team_prediction->save();
    }

    private function calculatePrediction($team_prediction, $result)
    {
        $percentage = $team_prediction->percentage;
        switch ($result) {
            case "W":
                $percentage = $percentage + 12.5;
                break;
            case "L":
                $percentage = $percentage - 12.5;
                break;
        }
        return $percentage;
    }
}
