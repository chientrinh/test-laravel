<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Country;
use Symfony\Component\Intl\Countries;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    protected $model = Country::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $countryCode = $this->faker->countryCode;
        $countryName = Countries::getName($countryCode);
        return [
            'id' => $this->faker->uuid,
            'name' => $countryName,
            'logo' => 'https://flagcdn.com/' . strtolower($countryCode) . '.svg'
        ];
    }
}
