<?php

namespace App\Repository\Runners;

use Illuminate\Cache\CacheManager;

class RunnerCacheRepository implements RunnerRepositoryInterface
{
    protected $repo;

    protected $cache;

    const TTL = 1440; # 1 day

    public function __construct(CacheManager $cache, RunnerRepository $repo)
    {
        $this->repo = $repo;
        $this->cache = $cache;
    }


    public function getRunnerWithHistory($runnerID)
    {
        return $this->cache->remember($runnerID, self::TTL, function () use ($runnerID) {
            return $this->repo->getRunnerWithHistory($runnerID);
        } );
    }

}