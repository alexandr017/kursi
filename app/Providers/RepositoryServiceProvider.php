<?php

namespace App\Providers;

use App\Repositories\Comments\CommentRepository;
use App\Repositories\Comments\CommentRepositoryInterface;
use App\Repositories\Courses\CoursesRepository;
use App\Repositories\Courses\CoursesRepositoryInterface;
use App\Repositories\Listing\ListingRepository;
use App\Repositories\Listing\ListingRepositoryInterface;
use App\Repositories\Tags\TagRepository;
use App\Repositories\Tags\TagRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(
            CommentRepositoryInterface::class,
            CommentRepository::class
        );
        $this->app->bind(
            CoursesRepositoryInterface::class,
            CoursesRepository::class
        );
        $this->app->bind(
            ListingRepositoryInterface::class,
            ListingRepository::class
        );
        $this->app->bind(
            TagRepositoryInterface::class,
            TagRepository::class
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
