<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Team;
class TeamSeeder extends Seeder
{
    /**
     *  php artisan db:seed --class=TeamSeeder
     */
    public function run(): void
    {
        Team::factory()->count(20)->create();
    }
}
