<?php

namespace App\Transformers;

use App\Models\Article;
use Flugg\Responder\Transformers\Transformer;

class ArticleTransformer extends Transformer
{
    protected $relations = [];

    protected $load = [];

    public function transform(Article $article): array
    {
        return [
            'id' => $article->id,
            'active' => $article->active,
            'title' => $article->title,
            'description' => $article->description,
            'content' => $article->content,
            'url' => $article->url,
            'date' => $article->created_at
                ->format('Y-m-d H:i:s')
        ];
    }
}
