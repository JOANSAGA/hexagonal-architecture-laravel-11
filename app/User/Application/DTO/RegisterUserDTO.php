<?php

namespace App\User\Application\DTO;

class RegisterUserDTO
{
    public $name;
    public $email;

    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
}
