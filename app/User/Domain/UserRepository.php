<?php

namespace App\User\Domain;
interface UserRepository
{
    public function save(User $user): void;

    public function findById(int $id): ?User;
}
