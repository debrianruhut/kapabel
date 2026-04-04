<?php

namespace App\Repositories\Contracts;

interface FaqRepositoryInterface
{
    /**
     * Get the first FAQ based on ID
     */
    public function getFirstFaq();
}
