<?php

namespace App\Services;

use App\Enums\MatchStatus;
use App\Repositories\MatchRepository;

class MatchService
{
    public function __construct(
        private MatchRepository $matchRepository
    ) {}


    public function countLiveMatches()
    {
        return $this->matchRepository->countLiveMatches();
    }

    public function matchStatus()
    {
        return [
            'live' => MatchStatus::liveStatus(),
            'end' => MatchStatus::endStatus(),
            'not_started' => MatchStatus::notStartedStatus(),
        ];
    }
}
