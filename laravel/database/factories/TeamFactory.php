<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\Competition;
use App\Models\Country;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    protected $model = Team::class;

    protected static $teams = [
        ['name' => 'Arsenal', 'logo' => 'https://is.vnecdn.net/objects/teams/42.png'],
        ['name' => 'Aston Villa', 'logo' => 'https://is.vnecdn.net/objects/teams/66.png'],
        ['name' => 'Bournemouth', 'logo' => 'https://is.vnecdn.net/objects/teams/35.png'],
        ['name' => 'Brentford', 'logo' => 'https://is.vnecdn.net/objects/teams/55.png'],
        ['name' => 'Brighton', 'logo' => 'https://is.vnecdn.net/objects/teams/51.png'],
        ['name' => 'Chelsea', 'logo' => 'https://is.vnecdn.net/objects/teams/49.png'],
        ['name' => 'Crystal Palace', 'logo' => 'https://is.vnecdn.net/objects/teams/52.png'],
        ['name' => 'Everton', 'logo' => 'https://is.vnecdn.net/objects/teams/45.png'],
        ['name' => 'Fulham', 'logo' => 'https://is.vnecdn.net/objects/teams/36.png'],
        ['name' => 'Leicester', 'logo' => 'https://is.vnecdn.net/objects/teams/46.png'],
        ['name' => 'Liverpool', 'logo' => 'https://is.vnecdn.net/objects/teams/40.png'],
        ['name' => 'Man City', 'logo' => 'https://is.vnecdn.net/objects/teams/50.png'],
        ['name' => 'Man Utd', 'logo' => 'https://is.vnecdn.net/objects/teams/33.png'],
        ['name' => 'Newcastle', 'logo' => 'https://is.vnecdn.net/objects/teams/34.png'],
        ['name' => 'Nottingham Forest', 'logo' => 'https://is.vnecdn.net/objects/teams/65.png'],
        ['name' => 'Southampton', 'logo' => 'https://is.vnecdn.net/objects/teams/41.png'],
        ['name' => 'Tottenham', 'logo' => 'https://is.vnecdn.net/objects/teams/47.png'],
        ['name' => 'West Ham', 'logo' => 'https://is.vnecdn.net/objects/teams/48.png'],
        ['name' => 'Wolves', 'logo' => 'https://is.vnecdn.net/objects/teams/39.png'],
        ['name' => 'Athletic Club', 'logo' => 'https://is.vnecdn.net/objects/teams/531.png'],
        ['name' => 'Atletico', 'logo' => 'https://is.vnecdn.net/objects/teams/530.png'],
        ['name' => 'Barca', 'logo' => 'https://is.vnecdn.net/objects/teams/529.png'],
        ['name' => 'Celta Vigo', 'logo' => 'https://is.vnecdn.net/objects/teams/538.png'],
        ['name' => 'Espanyol', 'logo' => 'https://is.vnecdn.net/objects/teams/540.png'],
        ['name' => 'Getafe', 'logo' => 'https://is.vnecdn.net/objects/teams/546.png'],
        ['name' => 'Girona', 'logo' => 'https://is.vnecdn.net/objects/teams/547.png'],
        ['name' => 'Mallorca', 'logo' => 'https://is.vnecdn.net/objects/teams/798.png'],
        ['name' => 'Osasuna', 'logo' => 'https://is.vnecdn.net/objects/teams/727.png'],
        ['name' => 'Rayo Vallecano', 'logo' => 'https://is.vnecdn.net/objects/teams/728.png'],
        ['name' => 'Real Betis', 'logo' => 'https://is.vnecdn.net/objects/teams/543.png'],
        ['name' => 'Real Madrid', 'logo' => 'https://is.vnecdn.net/objects/teams/541.png'],
        ['name' => 'Sevilla', 'logo' => 'https://is.vnecdn.net/objects/teams/536.png'],
        ['name' => 'Sociedad', 'logo' => 'https://is.vnecdn.net/objects/teams/548.png'],
        ['name' => 'Valencia', 'logo' => 'https://is.vnecdn.net/objects/teams/532.png'],
        ['name' => 'Valladolid', 'logo' => 'https://is.vnecdn.net/objects/teams/720.png'],
        ['name' => 'Villarreal', 'logo' => 'https://is.vnecdn.net/objects/teams/533.png'],
        ['name' => 'Bình Định', 'logo' => 'https://is.vnecdn.net/objects/teams/9160.png'],
        ['name' => 'Bình Dương', 'logo' => 'https://is.vnecdn.net/objects/teams/3668.png'],
        ['name' => 'Đà Nẵng', 'logo' => 'https://is.vnecdn.net/objects/teams/3669.png'],
        ['name' => 'Hà Nội', 'logo' => 'https://is.vnecdn.net/objects/teams/3670.png'],
        ['name' => 'Hà Tĩnh', 'logo' => 'https://is.vnecdn.net/objects/teams/11134.png'],
        ['name' => 'HAGL', 'logo' => 'https://is.vnecdn.net/objects/teams/3673.png'],
        ['name' => 'Hải Phòng', 'logo' => 'https://is.vnecdn.net/objects/teams/3671.png'],
        ['name' => 'Nam Định', 'logo' => 'https://is.vnecdn.net/objects/teams/3674.png'],
        ['name' => 'SLNA', 'logo' => 'https://is.vnecdn.net/objects/teams/3678.png'],
        ['name' => 'Thanh Hóa', 'logo' => 'https://is.vnecdn.net/objects/teams/3680.png'],
        ['name' => 'Thể Công', 'logo' => 'https://is.vnecdn.net/objects/teams/3681.png'],
        ['name' => 'TP HCM', 'logo' => 'https://is.vnecdn.net/objects/teams/3672.png'],
        ['name' => 'Bayern', 'logo' => 'https://is.vnecdn.net/objects/teams/157.png'],
        ['name' => 'Bremen', 'logo' => 'https://is.vnecdn.net/objects/teams/162.png'],
        ['name' => 'Dortmund', 'logo' => 'https://is.vnecdn.net/objects/teams/165.png'],
        ['name' => 'FC Augsburg', 'logo' => 'https://is.vnecdn.net/objects/teams/170.png'],
        ['name' => 'Frankfurt', 'logo' => 'https://is.vnecdn.net/objects/teams/169.png'],
        ['name' => 'Freiburg', 'logo' => 'https://is.vnecdn.net/objects/teams/160.png'],
        ['name' => 'Hoffenheim', 'logo' => 'https://is.vnecdn.net/objects/teams/167.png'],
        ['name' => 'Leverkusen', 'logo' => 'https://is.vnecdn.net/objects/teams/168.png'],
        ['name' => 'M\'gladbach', 'logo' => 'https://is.vnecdn.net/objects/teams/163.png'],
        ['name' => 'Mainz', 'logo' => 'https://is.vnecdn.net/objects/teams/164.png'],
        ['name' => 'RB Leipzig', 'logo' => 'https://is.vnecdn.net/objects/teams/173.png'],
        ['name' => 'Stuttgart', 'logo' => 'https://is.vnecdn.net/objects/teams/172.png'],
        ['name' => 'Union Berlin', 'logo' => 'https://is.vnecdn.net/objects/teams/182.png'],
        ['name' => 'VfL Bochum', 'logo' => 'https://is.vnecdn.net/objects/teams/176.png'],
        ['name' => 'Wolfsburg', 'logo' => 'https://is.vnecdn.net/objects/teams/161.png'],
    ];


    public function definition()
    {
        if (empty(self::$teams)) {
            throw new \Exception('All teams have already been used.');
        }

        $teamIndex = array_rand(self::$teams);
        $team = self::$teams[$teamIndex];
        unset(self::$teams[$teamIndex]);

        self::$teams = array_values(self::$teams);

        return [
            'id' => $this->faker->uuid,
            'competition_id' => Competition::inRandomOrder()->first()->id,
            'country_id' => Country::inRandomOrder()->first()->id,
            'name' => $team['name'],
            'logo' => $team['logo'],
        ];
    }
}
