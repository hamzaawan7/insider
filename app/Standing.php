<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $league_id
 * @property integer $team_id
 * @property int $games_played
 * @property int $wins
 * @property int $lost
 * @property int $draws
 * @property int $goals_scored
 * @property int $goals_against
 * @property string $goal_difference
 * @property int $points
 * @property string $recent_form
 * @property string $created_at
 * @property string $updated_at
 * @property League $league
 * @property Team $team
 */
class Standing extends Model
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
    protected $fillable = ['league_id', 'team_id', 'games_played', 'wins', 'lost', 'draws', 'goals_scored', 'goals_against', 'goal_difference', 'points', 'recent_form', 'created_at', 'updated_at'];

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
    public function team()
    {
        return $this->belongsTo('App\Team');
    }
}
