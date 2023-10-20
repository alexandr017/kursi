<?php

namespace App\Providers;

use App\Repositories\BackCall\BackCallRepository;
use App\Repositories\BackCall\BackCallRepositoryInterface;
use App\Repositories\Comments\CommentRepository;
use App\Repositories\Comments\CommentRepositoryInterface;
use App\Repositories\Company\CompanyRepository;
use App\Repositories\Company\CompanyRepositoryInterface;
use App\Repositories\Courses\CoursesRepository;
use App\Repositories\Courses\CoursesRepositoryInterface;
use App\Repositories\Employee\EmployeeRepository;
use App\Repositories\Employee\EmployeeRepositoryInterface;
use App\Repositories\Listing\ListingRepository;
use App\Repositories\Listing\ListingRepositoryInterface;
use App\Repositories\PostCategory\PostCategoryRepository;
use App\Repositories\PostCategory\PostCategoryRepositoryInterface;
use App\Repositories\Posts\PostRepository;
use App\Repositories\Posts\PostRepositoryInterface;
use App\Repositories\Question\QuestionRepository;
use App\Repositories\Question\QuestionRepositoryInterface;
use App\Repositories\StaticPage\StaticPageRepository;
use App\Repositories\StaticPage\StaticPageRepositoryInterface;
use App\Repositories\Subscriber\SubscriberRepository;
use App\Repositories\Subscriber\SubscriberRepositoryInterface;
use App\Repositories\Tags\TagRepository;
use App\Repositories\Tags\TagRepositoryInterface;
use App\Repositories\Url\UrlRepository;
use App\Repositories\Url\UrlRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
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
        $this->app->bind(
            CompanyRepositoryInterface::class,
            CompanyRepository::class
        );
        $this->app->bind(
            PostRepositoryInterface::class,
            PostRepository::class
        );
        $this->app->bind(
            PostCategoryRepositoryInterface::class,
            PostCategoryRepository::class
        );
        $this->app->bind(
            UrlRepositoryInterface::class,
            UrlRepository::class
        );
        $this->app->bind(
            EmployeeRepositoryInterface::class,
            EmployeeRepository::class
        );
        $this->app->bind(
            StaticPageRepositoryInterface::class,
            StaticPageRepository::class
        );
        $this->app->bind(
            UserRepositoryInterface::class,
            UserRepository  ::class,
        );
        $this->app->bind(
            SubscriberRepositoryInterface::class,
            SubscriberRepository::class
        );
        $this->app->bind(
            BackCallRepositoryInterface::class,
            BackCallRepository::class
        );
        $this->app->bind(
            QuestionRepositoryInterface::class,
            QuestionRepository::class
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
