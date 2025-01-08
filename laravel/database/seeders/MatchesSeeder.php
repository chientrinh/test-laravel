<?php

namespace Database\Seeders;

use App\Models\Matches;
use Illuminate\Database\Seeder;

class MatchesSeeder extends Seeder
{
    /**
     * php artisan db:seed --class=MatchesSeeder 
     */
    public function run(): void
    {
        Matches::factory(20)->create();
    }
}
