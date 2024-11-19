<?php

namespace App\Persistence\Eloquent\Repositories;

use App\Persistence\Eloquent\Models\UserModel;
use Core\Application\Mappers\UserMapper;
use Core\Domain\Repositories\UserRepositoryInterface;

readonly class UserRepository implements UserRepositoryInterface
{
    public function __construct(private UserModel $model)
    {}

    public function findAll(): array
    {
        $users = $this->model->all();

        return $users->map(function ($user) {
            return UserMapper::fromEloquent($user);
        })->toArray();
    }
}
