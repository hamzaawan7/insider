<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $current_week_id
 * @property integer $next_week_id
 * @property string $name
 * @property string $logo_path
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property MatchWeek $currentMatchWeek
 * @property MatchWeek $nextMatchWeek
 * @property Match[] $matches
 * @property Standing[] $standings
 * @property Team[] $teams
 * @property TeamPrediction[] $teamPredictions
 */
class League extends Model
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
    protected $fillable = ['current_week_id', 'next_week_id', 'name', 'logo_path', 'status', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function currentMatchWeek()
    {
        return $this->belongsTo('App\MatchWeek', 'current_week_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function nextMatchWeek()
    {
        return $this->belongsTo('App\MatchWeek', 'next_week_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function matches()
    {
        return $this->hasMany('App\Match');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function standings()
    {
        return $this->hasMany('App\Standing')->orderBy('points', 'desc')->orderBy('goal_difference', 'desc');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teams()
    {
        return $this->hasMany('App\Team');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teamPredictions()
    {
        return $this->hasMany('App\TeamPrediction');
    }
}
