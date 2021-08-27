<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;

    public function races(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Race::class);
    }
}
