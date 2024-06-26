<?php

namespace App\User\Infrastructure\Http\Controllers;

use App\User\Application\Services\UserService;
use App\User\Application\DTO\RegisterUserDTO;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class UserController
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function registerUser(Request $request): JsonResponse
    {
        $dto = new RegisterUserDTO(
            $request->input('name'),
            $request->input('email')
        );
        $this->userService->registerUser($dto);
        return response()->json(['message' => 'User registered successfully'], 201);
    }

    public function getUser(int $id): JsonResponse
    {
        $user = $this->userService->getUser($id);
        if ($user === null) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return response()->json($user);
    }
}
