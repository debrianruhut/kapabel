<?php

namespace App\Repositories\Eloquent;

use App\Models\Category;
use App\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    protected $model;

    public function __construct(Category $model)
    {
        $this->model = $model;
    }

    /**
     * Get categories that have articles with count
     */
    public function getCategoriesWithArticleCount()
    {
        return $this->model->has('articles')->withCount('articles')->get();
    }
}
