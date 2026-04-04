<?php

namespace App\Repositories\Contracts;

interface ExpertRepositoryInterface
{
    public function filterActiveExperts($search, $position);
    public function getPositions();
    public function getFounders();
    /**
     * Get active experts to display on the front page.
     *
     * @param int $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getActiveExpertsForFrontpage(int $limit = 4);

    /**
     * Get all active experts to display on the about page.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllActiveExperts();
    /**
     * Get a specific expert by slug.
     *
     * @param string $slug
     * @return \App\Models\Expert|null
     */
    public function getBySlug(string $slug);
}
