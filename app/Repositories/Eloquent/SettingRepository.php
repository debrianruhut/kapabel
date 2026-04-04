<?php

namespace App\Repositories\Eloquent;

use App\Models\Setting;
use App\Repositories\Contracts\SettingRepositoryInterface;

class SettingRepository implements SettingRepositoryInterface
{
    protected $model;

    public function __construct(Setting $model)
    {
        $this->model = $model;
    }

    /**
     * Get the first Setting based on ID
     */
    public function getFirstSetting()
    {
        return $this->model->orderBy('id', 'asc')->first();
    }
}
