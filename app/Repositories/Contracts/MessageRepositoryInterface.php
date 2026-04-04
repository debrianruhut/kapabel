<?php

namespace App\Repositories\Contracts;

interface MessageRepositoryInterface
{
    /**
     * Create a new message
     * @param array $data
     * @return \App\Models\Message
     */
    public function createMessage(array $data);
}
