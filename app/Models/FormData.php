<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    public function raceRunner(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(RaceRunner::class);
    }

    use HasFactory;
}
