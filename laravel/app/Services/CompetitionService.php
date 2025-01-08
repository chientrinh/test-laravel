<?php

namespace App\Services;

use App\Http\Resources\CompetitionResource;
use App\Repositories\CompetitionRepository;

class CompetitionService
{
    public function __construct(
        private CompetitionRepository $competitionRepository
    ) {}


    public function getCompetitionWithMatches(array $params)
    {
        $competitions = $this->competitionRepository->getCompetitionWithMatches($params);
        $grouped = $competitions->groupBy('competition_id');

        return CompetitionResource::collection($grouped);
    }
}
