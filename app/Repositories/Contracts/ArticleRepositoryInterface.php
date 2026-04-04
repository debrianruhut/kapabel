<?php

namespace App\Repositories\Contracts;

interface ArticleRepositoryInterface
{
    /**
     * Get all active articles.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllActiveArticles();

    /**
     * Get latest active articles.
     *
     * @param int $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getLatestArticles(int $limit = 3);
    
    /**
     * Filter articles recursively based on search and category.
     *
     * @param string|null $search
     * @param string|null $categorySlug
     * @param string|null $tagSlug
     */
    public function filterActiveArticles($search, $categorySlug, $tagSlug = null);

    /**
     * Get a specific article by slug.
     *
     * @param string $slug
     * @return \App\Models\Article|null
     */
    public function getBySlug(string $slug);
}
