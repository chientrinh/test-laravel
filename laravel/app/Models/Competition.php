<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Competition extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $keyType = 'string';
    protected $fillable = ['id', 'name', 'logo'];

    public function matches()
    {
        return $this->hasMany(Matches::class);
    }

}
