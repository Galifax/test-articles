<?php
namespace App\Services;

use App\Contracts\ArticleRepositoryContract;
use App\Models\Article;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ArticleServices
{
    public function __construct(private readonly ArticleRepositoryContract $articleRepository)
    {}

    public function list(): LengthAwarePaginator
    {
        return $this->articleRepository
            ->list();
    }

    public function findByUrl(string $url): Article
    {
        return $this->articleRepository
            ->findByUrl($url);
    }

    public function switchStatusById(int $id): Article
    {
        return $this->articleRepository
            ->switchActiveById($id);
    }
}
