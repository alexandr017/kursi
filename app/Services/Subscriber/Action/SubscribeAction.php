<?php

namespace App\Services\Subscriber\Action;

use App\Models\Subscriber\Subscriber;
use App\Repositories\Subscriber\SubscriberRepositoryInterface;

class SubscribeAction
{
    public function __construct(protected SubscriberRepositoryInterface $subscriberRepository)
    {}

    public function run(string $email):  void
    {
        $subscriber = Subscriber::create($email);

        $this->subscriberRepository->save($subscriber);
    }
}