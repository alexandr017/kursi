<?php

namespace App\Http\Controllers\Site\V3\BackCall;

use App\Http\Controllers\Controller;
use App\Http\Requests\BackCall\CreateBackCallRequest;
use App\Services\BackCall\Action\CreateBackCallAction;
use App\Services\BackCall\Dto\CreateBackCallDto;

class BackCallController extends Controller
{
    public function create(
        CreateBackCallRequest $request,
        CreateBackCallAction $action
    ) {
        $dto = CreateBackCallDto::fromRequest($request);
        $action->run($dto);

        return $this->response();
    }
}