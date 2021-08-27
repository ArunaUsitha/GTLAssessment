<?php

namespace App\Repository\Runners;

use App\Models\Runner;

class RunnerRepository implements RunnerRepositoryInterface
{

    protected $model;

    public function __construct(Runner $model)
    {
        $this->model = $model;
    }

    public function getRunnerWithHistory($runnerID)
    {
        return $this->model->getRunnerWithHistory($runnerID);
    }
}