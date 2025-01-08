<?php

namespace App\Http\Resources;

use App\Enums\MatchStatus;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MatchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $homeScores = json_decode($this->home_scores, true);
        $awayScores = json_decode($this->away_scores, true);

        return [
            'home_team' => [
                'name' => $this->home_team_name,
                'logo' => $this->home_team_logo,
            ],
            'away_team' => [
                'name' => $this->away_team_name,
                'logo' => $this->away_team_logo,
            ],
            'scores' => [
                'home' => $this->home_scores,
                'away' => $this->away_scores,
                'fulltime_score' => $this->getFulltimedScore($homeScores, $awayScores),
                'halftime_score' => $this->getHalftimedScore($homeScores, $awayScores),
                'corners' => $this->getCorners($homeScores, $awayScores),
            ],
            'match_time' => Carbon::parse($this->match_time)->format('H:i'),
            'status_id' => $this->status_id,
            'status' => MatchStatus::from($this->status_id)->description(),

        ];
    }

    private function getFulltimedScore(array $homeScores, array $awayScores): string
    {
        if (in_array($this->status_id, MatchStatus::notStartedStatus())) {
            return '-';
        }

        return $this->getHomeTeamScore($homeScores) . ' - ' . $this->getAwayTeamScore($awayScores);
    }

    private function getHalftimedScore(array $homeScores, array $awayScores): string
    {
        if (in_array($this->status_id, MatchStatus::notStartedStatus())) {
            return '-';
        }
        return $this->getHomeHalftimeScore($homeScores) . ' - ' . $this->getAwayHalftimeScore($awayScores);
    }

    private function getCorners(array $homeScores, array $awayScores): string
    {
        if (in_array($this->status_id, MatchStatus::notStartedStatus())) {
            return '-';
        }
        return $this->getHomeTeamCorners($homeScores) . ' - ' . $this->getAwayTeamCorners($awayScores);
    }

    private function getHomeTeamScore(array $homeScores): int
    {
        return $homeScores[0];
    }

    private function getAwayTeamScore(array $awayScores): int
    {
        return $awayScores[0];
    }

    private function getHomeHalftimeScore(array $homeScores): int
    {
        return $homeScores[1];
    }

    private function getAwayHalftimeScore(array $awayScores): int
    {
        return $awayScores[1];
    }

    private function getHomeTeamCorners(array $homeScores): int
    {
        return $homeScores[4] < 1 ? 0 : $homeScores[4];
    }

    private function getAwayTeamCorners(array $awayScores): int
    {
        return $awayScores[4] < 1 ? 0 : $awayScores[4];
    }
}
