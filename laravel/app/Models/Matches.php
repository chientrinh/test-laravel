<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matches extends Model
{
    use HasFactory;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $table = 'matches';

    protected $fillable = ['id', 'competition_id', 'home_team_id', 'away_team_id', 'home_scores', 'away_scores', 'match_time', 'status_id'];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function homeTeam()
    {
        return $this->belongsTo(Team::class, 'home_team_id');
    }

    public function awayTeam()
    {
        return $this->belongsTo(Team::class, 'away_team_id');
    }
}
