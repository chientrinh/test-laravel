<?php
namespace Database\Factories;

use App\Models\Competition;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompetitionFactory extends Factory
{
    protected $model = Competition::class;

    public function definition()
    {
        return [
            'id' => $this->faker->uuid,  
            'name' => $this->faker->word, 
            'logo' => $this->faker->imageUrl(200, 200, 'sports', true),
        ];
    }
}
