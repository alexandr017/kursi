<?php

namespace App\Repositories\Subscriber;

use App\Models\Subscriber\Subscriber;

interface SubscriberRepositoryInterface
{
    public function save(Subscriber $subscriber): bool;
}