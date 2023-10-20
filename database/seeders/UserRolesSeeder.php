<?php

namespace Database\Seeders;

use App\Models\Users\UserRole;
use Illuminate\Database\Seeder;

class UserRolesSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'role' =>  UserRole::ROLE_USER,
            ],
            [
                'role' =>  UserRole::ROLE_SUPER_ADMIN,
            ],
            [
                'role' =>  UserRole::ROLE_CONTENT_MANAGER,
            ]
        ];

        UserRole::query()->insert($data);
    }
}