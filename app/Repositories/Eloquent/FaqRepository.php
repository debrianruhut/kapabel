<?php

namespace App\Repositories\Eloquent;

use App\Models\Faq;
use App\Repositories\Contracts\FaqRepositoryInterface;

class FaqRepository implements FaqRepositoryInterface
{
    protected $model;

    public function __construct(Faq $model)
    {
        $this->model = $model;
    }

    /**
     * Get the first FAQ based on ID
     */
    public function getFirstFaq()
    {
        return $this->model->orderBy('id', 'asc')->first();
    }
}
