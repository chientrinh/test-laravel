<?php

namespace App\Enums;

enum MatchStatus: int
{
    case NOT_STARTED = 1;
    case FIRST_HALF = 2;
    case HALF_TIME = 3;
    case SECOND_HALF = 4;
    case OVERTIME = 5;
    case OVERTIME_DEPRECATED = 6;
    case PENALTY_SHOOTOUT = 7;
    case END = 8;
    case DELAY = 9;

    /**
     * Lấy mô tả trạng thái.
     *
     * @return string
     */
    public function description(): string
    {
        return match ($this) {
            self::NOT_STARTED => 'Not started',
            self::FIRST_HALF => 'First half',
            self::HALF_TIME => 'Half-time',
            self::SECOND_HALF => 'Second half',
            self::OVERTIME => 'Overtime',
            self::OVERTIME_DEPRECATED => 'Overtime (deprecated)',
            self::PENALTY_SHOOTOUT => 'Penalty Shoot-out',
            self::END => 'End',
            self::DELAY => 'Delay',
        };
    }

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function names(): array
    {
        return array_column(self::cases(), 'name');
    }
    public static function array(): array
    {
        return array_combine(self::names(), self::values());
    }

    public static function liveStatus(): array
    {
        return [
            self::FIRST_HALF->value,
            self::HALF_TIME->value,
            self::SECOND_HALF->value,
            self::OVERTIME->value,
            self::OVERTIME_DEPRECATED->value,
            self::PENALTY_SHOOTOUT->value,
        ];
    }

    public static function endStatus(): array
    {
        return [
            self::END->value,
            self::DELAY->value,
        ];
    }

    public static function notStartedStatus(): array
    {
        return [
            self::NOT_STARTED->value,
        ];
    }
}
