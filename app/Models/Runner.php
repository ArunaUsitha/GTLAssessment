<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Runner extends Model
{
    use HasFactory;


    public function Races(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(Race::class);
    }

    public function raceRunners(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(RaceRunner::class);
    }

    public function formDatas(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this->hasManyThrough(
            FormData::class,
            RaceRunner::class,
            'runner_id',
            'race_runner_id');
    }

    public function getRunnerWithHistory($runnerID)
    {
        \Log::info('DB Hit');
        $runnerInfo = Runner::find($runnerID);

        $runnerFormDatas = $runnerInfo->formDatas()->get();
        $runnerInfo->last_runs = $runnerFormDatas->makeHidden('laravel_through_key');

        return  $runnerInfo;
    }

}
