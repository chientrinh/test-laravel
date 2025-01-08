<?php

namespace Database\Factories;

use App\Models\Competition;
use App\Models\Matches;
use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MatchesFactory extends Factory
{
    protected $model = Matches::class;

    public function definition()
    {
        $ftHomeScore = $this->faker->numberBetween(0, 10);
        $htHomeScore = $this->faker->numberBetween(0, $ftHomeScore);
        $ftAwayScore = $this->faker->numberBetween(0, 10);
        $htAwayScore = $this->faker->numberBetween(0, $ftAwayScore);
        $statusId = $this->faker->numberBetween(1, 9);
        $homeScores = [
            $ftHomeScore,
            $htHomeScore,
            $this->faker->numberBetween(0, 5),
            $this->faker->numberBetween(0, 5),
            $this->faker->numberBetween(-1, 5),
            $this->faker->numberBetween(0, 10),
            $this->faker->numberBetween(0, 5),
        ];
        $awayScores = [
            $ftAwayScore,
            $htAwayScore,
            $this->faker->numberBetween(0, 5),
            $this->faker->numberBetween(0, 5),
            $this->faker->numberBetween(-1, 5),
            $this->faker->numberBetween(0, 10),
            $this->faker->numberBetween(0, 5),
        ];

        if ($statusId === 1) {
            $homeScores = [0, 0, 0, 0, 0, 0, 0];
            $awayScores = [0, 0, 0, 0, 0, 0, 0];
        }

        if ($statusId === 3) {
            $homeScores[0] = $homeScores[1];
            $awayScores[0] = $awayScores[1];
        }
        
        return [
            'id' => (string) Str::uuid(),
            'competition_id' => Competition::inRandomOrder()->first()->id,
            'home_team_id' => $homeTeamId = Team::inRandomOrder()->first()->id,
            'away_team_id' => Team::where('id', '!=', $homeTeamId)->inRandomOrder()->first()->id,
            'status_id' => $statusId,
            'match_time' => $this->faker->unixTime(),
            'home_scores' => json_encode($homeScores),
            'away_scores' => json_encode($awayScores),
        ];
    }
}
