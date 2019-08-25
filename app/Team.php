<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $league_id
 * @property string $name
 * @property string $short_code
 * @property string $logo_path
 * @property string $created_at
 * @property string $updated_at
 * @property League $league
 * @property Match[] $homeMatches
 * @property Match[] $visitorMatches
 * @property Standing[] $standings
 * @property Standing $standing
 * @property TeamPrediction[] $teamPredictions
 * @property TeamPrediction $teamPrediction
 * @property TeamStrength[] $teamStrengths
 * @property TeamStrength $teamStrength
 */
class Team extends Model
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
    protected $fillable = ['league_id', 'name', 'short_code', 'logo_path', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function league()
    {
        return $this->belongsTo('App\League');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function homeMatches()
    {
        return $this->hasMany('App\Match', 'home_team_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function visitorMatches()
    {
        return $this->hasMany('App\Match', 'visitor_team_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function standings()
    {
        return $this->hasMany('App\Standing')->orderBy('position', 'desc');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function standing()
    {
        return $this->hasOne('App\Standing');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teamPredictions()
    {
        return $this->hasMany('App\TeamPrediction');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function teamStrengths()
    {
        return $this->hasMany('App\TeamStrength');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teamPrediction()
    {
        return $this->hasOne('App\TeamPrediction');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function teamStrength()
    {
        return $this->hasOne('App\TeamStrength');
    }

    public function latestMatch($team_id)
    {
        return Match::where('status', 1)
            ->where(function ($q) use ($team_id) {
                $q->where('home_team_id', $team_id)
                    ->orWhere('visitor_team_id', $team_id);
            })
            ->orderBy('id', 'desc')
            ->first();
        /*return $this->hasOne('App\Match', 'home_team_id');*/
    }
}
