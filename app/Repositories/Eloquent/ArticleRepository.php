<?php

namespace App\Repositories\Eloquent;

use App\Models\Article;
use App\Repositories\Contracts\ArticleRepositoryInterface;

class ArticleRepository implements ArticleRepositoryInterface
{
    protected $model;

    public function __construct(Article $model)
    {
        $this->model = $model;
    }

    public function getAllActiveArticles()
    {
        return $this->model
            ->with(['user', 'category'])
            ->where('status', 'published') // or similar depending on migration
            ->latest()
            ->get();
    }

    public function getLatestArticles(int $limit = 3)
    {
        return $this->model
            ->with(['user', 'category'])
            ->where('status', 'published')
            ->latest()
            ->limit($limit)
            ->get();
    }

    public function filterActiveArticles($search, $categorySlug, $tagSlug = null)
    {
        $query = $this->model->with(['user', 'category', 'tags'])->where('status', 'published');

        if (!empty($search)) {
            $query->where('title', 'like', "%{$search}%");
        }

        if (!empty($categorySlug)) {
            $query->whereHas('category', function ($q) use ($categorySlug) {
                $q->where('slug', $categorySlug);
            });
        }

        if (!empty($tagSlug)) {
            $query->whereHas('tags', function ($q) use ($tagSlug) {
                $q->where('slug', $tagSlug);
            });
        }

        return $query->latest()->paginate(6);
    }

    public function getBySlug(string $slug)
    {
        return $this->model
            ->with(['user', 'category'])
            ->where('slug', $slug)
            ->firstOrFail();
    }
}
