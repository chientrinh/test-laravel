<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompetitionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'competition_id' => $this->first()->competition_id,
            'competition_name' => $this->first()->competition_name,
            'competition_logo' => $this->first()->competition_logo,
            'home_country' => [
                'name' => $this->first()->home_country_name,
                'logo' => $this->first()->home_country_logo,
                'id' => $this->first()->home_country_id,
            ],
            'matches' => MatchResource::collection($this),
        ];
    }
}
