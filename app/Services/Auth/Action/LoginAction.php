<?php

namespace App\Services\Auth\Action;

use App\Exceptions\User\UserNotFoundException;
use App\Http\Resources\Auth\TokensResource;
use App\Models\Users\UserRole;
use App\Repositories\User\UserRepositoryInterface;
use App\Services\Auth\Dto\LoginDto;
use Http;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\UnauthorizedException;
use Laravel\Passport\Client;

class LoginAction
{
    public function __construct(protected UserRepositoryInterface $userRepository)
    {}

    public function run(LoginDto $dto): TokensResource
    {
        try {
            $user = $this->userRepository->getByEmail($dto->email);
        } catch (UserNotFoundException) {
            throw new UnauthorizedException(__('errors.unauthorized'));
        }

        $oClientId = config('passport.passport_grant_client.id');
        $oClient = Client::where('id', $oClientId)->first();

        $response =  Http::asForm()->post(env('APP_URL') . 'oauth/token/', [
            'grant_type' => 'password',
            'client_id' => $oClient->id,
            'client_secret' => $oClient->secret,
            'username' => $dto->email,
            'password' => $dto->password,
            'scope' => '*',
        ]);

        $data = json_decode($response->getBody()->getContents());

        if (is_null($data) || property_exists($data, 'error')|| property_exists($data, 'errors')) {
            throw new AuthorizationException();
        }

        $data->user = $user;

        if ($user->role->role == UserRole::ROLE_SUPER_ADMIN) {
            $data->url = '/admin/index';
        } else {
            $data->url = '/';
        }

        return new TokensResource($data);
    }
}
