<?php

namespace App\Repositories\Eloquent;

use App\Models\Tag;
use App\Repositories\Contracts\TagRepositoryInterface;

class TagRepository implements TagRepositoryInterface
{
    protected $model;

    public function __construct(Tag $model)
    {
        $this->model = $model;
    }

    /**
     * Get tags that have articles
     */
    public function getTagsWithArticles()
    {
        return $this->model->has('articles')->get();
    }
}
