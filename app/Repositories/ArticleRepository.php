<?php
namespace App\Repositories;

use App\Contracts\ArticleRepositoryContract;
use App\Models\Article;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class ArticleRepository implements ArticleRepositoryContract
{
    const PER_PAGE = 6;

    public function list(): LengthAwarePaginator
    {
        return Article::query()
            ->where('active', true)
            ->orderByDesc('created_at')
            ->paginate(self::PER_PAGE);
    }

    public function findByUrl(string $url): Article
    {
        return Article::query()
            ->where([
                'active' => true,
                'url' => $url,
            ])
            ->firstOrFail();
    }

    public function switchActiveById(int $id): Article
    {
        return Article::query()
            ->findOrFail($id)
            ->switchActive();
    }
}
