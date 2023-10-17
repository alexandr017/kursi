<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\LogoutRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Services\Auth\Action\LoginAction;
use App\Services\Auth\Action\LogoutAction;
use App\Services\Auth\Action\RegisterAction;
use App\Services\Auth\Dto\LoginDto;
use App\Services\Auth\Dto\RegisterDto;
use Illuminate\Http\JsonResponse;

class AuthController extends Controller
{
    public function login(
        LoginRequest $request,
        LoginAction $action
    ): JsonResponse
    {
        $dto = LoginDto::fromRequest($request);
        $result = $action->run($dto);

        return $this->response($result->toArray($request))
            ->withCookie(cookie('Authorization', $result->access_token, $result->expires_in));
    }

    public function register(
        RegisterRequest $request,
        RegisterAction $action
    ): JsonResponse
    {
        $dto = RegisterDto::fromRequest($request);
        $user = $action->run($dto);

        return $this->response($user->toArray(), 201);
    }

    public function logout(
        LogoutRequest $request,
        LogoutAction $action
    ) {
        $action->run($request->user());

        return $this->response();
    }

}