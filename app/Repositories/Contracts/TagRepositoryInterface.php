<?php

namespace App\Repositories\Contracts;

interface TagRepositoryInterface
{
    /**
     * Get tags that have articles
     */
    public function getTagsWithArticles();
}
