<?php

namespace App\Providers;

use App\Contracts\ArticleRepositoryContract;
use App\Repositories\ArticleRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(ArticleRepositoryContract::class, ArticleRepository::class);
    }

    public function boot(): void
    {
    }
}
