<?php

namespace App\Http\Repository;

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
        $this->app->bind(
            'App\Http\Repository\User\UserInterface',
            'App\Http\Repository\User\UserRepository'
        );

        $this->app->bind(
            'App\Http\Repository\UserInfo\UserInfoInterface',
            'App\Http\Repository\UserInfo\UserInfoRepository'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
