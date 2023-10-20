<?php

namespace App\Http\Controllers\Site\V3\Subscribe;

use App\Http\Controllers\Controller;
use App\Http\Requests\Subscribe\SubscribeRequest;
use App\Services\Subscriber\Action\SubscribeAction;

class SubscribeController extends Controller
{
    public function subscribe(
        SubscribeRequest $request,
        SubscribeAction $action
    ) {
        $action->run($request->getEmail());

        return $this->response();
    }
}