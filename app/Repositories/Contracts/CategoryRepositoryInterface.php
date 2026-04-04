<?php

namespace App\Repositories\Contracts;

interface CategoryRepositoryInterface
{
    /**
     * Get categories that have articles with count
     */
    public function getCategoriesWithArticleCount();
}
