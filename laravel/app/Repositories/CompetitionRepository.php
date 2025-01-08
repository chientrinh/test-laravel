<?php

namespace App\Repositories;

use App\Models\Competition;

class CompetitionRepository extends AbstractRepository
{
    public function getModelClass()
    {
        return Competition::class;
    }

    public function getCompetitionWithMatches(array $params)
    {
        $query =  $this->model->select([
            'competitions.id as competition_id',
            'competitions.name as competition_name',
            'competitions.logo as competition_logo',
            'home_team.name as home_team_name',
            'home_team.logo as home_team_logo',
            'away_team.name as away_team_name',
            'away_team.logo as away_team_logo',
            'matches.home_scores',
            'matches.away_scores',
            'matches.match_time',
            'matches.status_id',
            'home_country.name as home_country_name',
            'home_country.logo as home_country_logo',
            'home_country.id as home_country_id',
        ])
            ->join('matches', 'matches.competition_id', '=', 'competitions.id')
            ->join('teams as home_team', 'matches.home_team_id', '=', 'home_team.id')
            ->join('teams as away_team', 'matches.away_team_id', '=', 'away_team.id')
            ->join('countries as home_country', 'home_team.country_id', '=', 'home_country.id');

        if (!empty($params['status_ids'])) {
            $query->whereIn('matches.status_id', $params['status_ids']);
        }

        $list = $query->orderBy('matches.match_time', 'asc')
            ->get();

        return $list;
    }
}
