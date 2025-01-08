<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * php artisan db:seed --class=CountrySeeder
     */
    public function run()
    {
        Country::factory()->count(20)->create();
    }
}