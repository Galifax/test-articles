<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\ArticleServices;
use App\Transformers\ArticleListTransformer;
use App\Transformers\ArticleTransformer;
use Illuminate\Http\JsonResponse;

class ArticleController extends Controller
{
    public function index(ArticleServices $articleServices): JsonResponse
    {
        return responder()
            ->success($articleServices->list(), new ArticleListTransformer())
            ->respond();
    }

    public function show(string $url, ArticleServices $articleServices): JsonResponse
    {
        return responder()
            ->success($articleServices->findByUrl($url), new ArticleTransformer())
            ->respond();
    }

    public function switchStatus(int $id, ArticleServices $articleServices): JsonResponse
    {
        return responder()
            ->success($articleServices->switchStatusById($id), new ArticleTransformer())
            ->respond();
    }
}
