<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class RaceRunner extends Pivot
{
    use HasFactory;

    protected $hidden = [
        'laravel_through_key',
    ];

    protected $table = 'race_runner';

    public function formData(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(FormData::class);
    }

    public function race(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Race::class);
    }

    public function runner(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Runner::class);
    }


}
