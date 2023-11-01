<?php
namespace App\Contracts;

use App\Models\Article;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

interface ArticleRepositoryContract
{
    public function list(): LengthAwarePaginator;

    public function findByUrl(string $url): Article;

    public function switchActiveById(int $id): Article;
}
