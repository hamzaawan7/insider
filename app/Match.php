<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $league_id
 * @property integer $week_id
 * @property integer $home_team_id
 * @property integer $visitor_team_id
 * @property int $home_team_score
 * @property int $visitor_team_score
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property Team $homeTeam
 * @property League $league
 * @property Team $visitorTeam
 * @property MatchWeek $matchWeek
 */
class Match extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['league_id', 'week_id', 'home_team_id', 'visitor_team_id', 'home_team_score', 'visitor_team_score', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function homeTeam()
    {
        return $this->belongsTo('App\Team', 'home_team_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function league()
    {
        return $this->belongsTo('App\League');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function visitorTeam()
    {
        return $this->belongsTo('App\Team', 'visitor_team_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function matchWeek()
    {
        return $this->belongsTo('App\MatchWeek', 'week_id');
    }
}
