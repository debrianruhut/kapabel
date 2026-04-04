<?php

namespace App\Repositories\Contracts;

interface SettingRepositoryInterface
{
    /**
     * Get the first Setting based on ID
     */
    public function getFirstSetting();
}
