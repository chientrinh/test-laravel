<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * php artisan db:seed --class=DatabaseSeeder 
     */
    public function run(): void
    {
        $this->call([
            CountrySeeder::class, 
            CompetitionSeeder::class, 
            TeamSeeder::class,         
            MatchesSeeder::class,    
        ]);
    }
}
