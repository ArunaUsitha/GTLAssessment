<?php

namespace App\Providers;

use App\Repository\Runners\RunnerRepository;
use App\Repository\Runners\RunnerRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

        //without cache layer
        $this->app->bind(RunnerRepositoryInterface::class,RunnerRepository::class );

        //with cache layer
//        $this->app->bind(RunnerRepositoryInterface::class,function($app){
//            return new RunnerCacheRepository(new CacheManager($app),new RunnerRepository(new Runner()));
//        });

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
