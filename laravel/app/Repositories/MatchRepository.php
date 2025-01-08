<?php

namespace App\Repositories;

use App\Enums\MatchStatus;
use App\Models\Matches;

class MatchRepository extends AbstractRepository
{
    public function getModelClass()
    {
        return Matches::class;
    }

    public function countLiveMatches()
    {
        $liveStatus = MatchStatus::liveStatus();
        return $this->model->whereIn('matches.status_id', $liveStatus)->count();
    }
}
