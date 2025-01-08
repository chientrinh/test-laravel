<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $keyType = 'string';

    protected $fillable = ['id', 'competition_id', 'country_id', 'name', 'logo'];

    public function competition()
    {
        return $this->belongsTo(Competition::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

}
