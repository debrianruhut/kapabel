<?php

namespace App\Repositories\Eloquent;

use App\Models\Expert;
use App\Repositories\Contracts\ExpertRepositoryInterface;

class ExpertRepository implements ExpertRepositoryInterface
{
    protected $model;

    public function __construct(Expert $model)
    {
        $this->model = $model;
    }

    public function filterActiveExperts($search, $position)
    {
        $query = $this->model->where('is_active', true);

        if (!empty($search)) {
            $query->where('name', 'like', "%{$search}%");
        }

        if (!empty($position)) {
            $query->where('position', $position);
        }

        return $query->orderBy('order', 'asc')->latest()->paginate(6);
    }

    public function getPositions()
    {
        return $this->model->where('is_active', true)->select('position')->distinct()->pluck('position')->filter();
    }

    public function getActiveExpertsForFrontpage(int $limit = 4)
    {
        return $this->model
            ->where('is_active', true)
            ->latest() // Assumes we want the most recent or we can use another ordering
            ->limit($limit)
            ->get();
    }

    public function getAllActiveExperts()
    {
        return $this->model
            ->where('is_active', true)
            ->latest()
            ->get();
    }

    public function getFounders()
    {
        return $this->model
            ->where('is_active', false)
            ->orderBy('order', 'asc')
            ->latest()
            ->get();
    }
    public function getBySlug(string $slug)
    {
        return $this->model
            ->where('slug', $slug)
            ->firstOrFail();
    }
}
