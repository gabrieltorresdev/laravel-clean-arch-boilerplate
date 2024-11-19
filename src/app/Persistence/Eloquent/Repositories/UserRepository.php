<?php

namespace App\Persistence\Eloquent\Repositories;

use App\Persistence\Eloquent\Models\UserModel;
use Core\Application\Mappers\UserMapper;
use Core\Domain\Repositories\UserRepositoryInterface;

readonly class UserRepository implements UserRepositoryInterface
{
    public function __construct(private UserModel $model)
    {}

    public function listar(): array
    {
        $projetos = $this->model->all();

        return $projetos->map(function ($projeto) {
            return UserMapper::fromEloquent($projeto);
        })->toArray();
    }
}
