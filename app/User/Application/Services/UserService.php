<?php

namespace App\User\Application\Services;

use App\User\Domain\User;
use App\User\Domain\UserRepository;
use App\User\Application\DTO\RegisterUserDTO;

class UserService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function registerUser(RegisterUserDTO $dto): void
    {
        $user = new User(null, $dto->name, $dto->email);
        $this->userRepository->save($user);
    }

    public function getUser(int $id): ?User
    {
        return $this->userRepository->findById($id);
    }
}
