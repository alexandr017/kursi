<?php

namespace App\Repositories\Subscriber;

use App\Exceptions\SavingErrorException;
use App\Models\Subscriber\Subscriber;

class SubscriberRepository implements SubscriberRepositoryInterface
{
    public function save(Subscriber $subscriber): bool
    {
        if (!$subscriber->save()) {
            throw new SavingErrorException();
        }

        return true;
    }
}