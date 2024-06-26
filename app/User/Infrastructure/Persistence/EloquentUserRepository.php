<?php

namespace App\User\Infrastructure\Persistence;

use App\User\Domain\User;
use App\User\Domain\UserRepository;
use App\User\Infrastructure\Persistence\Models\EloquentUser;

class EloquentUserRepository implements UserRepository
{
    public function save(User $user): void
    {
        if ($user->getId()) {
            EloquentUser::where('id', $user->getId())->update([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
            ]);
        } else {
            $eloquentUser = EloquentUser::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
            ]);
            $user = new User($eloquentUser->id, $eloquentUser->name, $eloquentUser->email);
        }
    }

    public function findById(int $id): ?User
    {
        $eloquentUser = EloquentUser::find($id);
        if ($eloquentUser === null) {
            return null;
        }
        return new User($eloquentUser->id, $eloquentUser->name, $eloquentUser->email);
    }
}
