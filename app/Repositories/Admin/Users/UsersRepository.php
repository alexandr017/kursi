<?php

namespace App\Repositories\Admin\Users;

use DB;
use App\Models\Users\UserRole;
use App\Models\User;
use Hash;
use Str;

class UsersRepository
{
    public function getRolesForSelect() : array
    {
        // todo после занесения ролей поменять код
        //return UserRole::select(['id', 'name'])->pluck('name', 'id')->toArray();
        return [1 => 'Пользователь', 2 => 'Супер администратор', 3 => 'Контент-менеджер'];
    }

    public function getAllUsersForShow() : array
    {
        return DB::table('users')
            ->select(['id', 'first_name', 'last_name', 'email'])
            ->get()
            ->toArray();
    }

    public function find(int $id) : null|object
    {
        return User::find($id);
    }

    public function createUser(array $data) : User
    {
        if ($data['password'] == null) {
            $data['password'] = Hash::make(Str::random(10));
        }
        $user = new User($data);
        $user->save();
        return $user;
    }

    public function updateUser(int $id, array $data) : null|User
    {
        $user = User::find($id);

        if ($user != null) {
            if ($data['password'] == null) {
                $data['password'] = $user->password;
            }
            $user->update($data);
            return $user;
        }

        return  null;
    }

    public function deleteUser(int $id) : null|User
    {
        $user = User::find($id);
        $user->delete();

        return $user;
    }
}
