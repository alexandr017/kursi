<?php

namespace App\Providers;

use App\Repositories\Read\Comment\CommentReadRepository;
use App\Repositories\Read\Comment\CommentReadRepositoryInterface;
use App\Repositories\Write\Comment\CommentWriteRepository;
use App\Repositories\Write\Comment\CommentWriteRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            CommentWriteRepositoryInterface::class,
            CommentWriteRepository::class
        );
        $this->app->bind(
            CommentReadRepositoryInterface::class,
            CommentReadRepository::class
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
