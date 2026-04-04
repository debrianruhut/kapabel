<?php

namespace App\Repositories\Eloquent;

use App\Models\Message;
use App\Repositories\Contracts\MessageRepositoryInterface;

class MessageRepository implements MessageRepositoryInterface
{
    protected $model;

    public function __construct(Message $model)
    {
        $this->model = $model;
    }

    /**
     * Create a new message
     * @param array $data
     * @return \App\Models\Message
     */
    public function createMessage(array $data)
    {
        return $this->model->create($data);
    }
}
