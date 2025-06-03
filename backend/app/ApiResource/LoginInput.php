<?php

namespace App\ApiResource;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\Post;
use App\Http\Controllers\Api\AuthController;

#[ApiResource(
    shortName: 'Login',
    operations: [
        new Post(
            uriTemplate: '/auth/login',
            processor: AuthController::class,
            description: 'Authenticates a user with email and password',
                        inputFormats: ['json' => ['application/json']],
            outputFormats: ['json' => ['application/json']]
        )
    ]
)]
class LoginInput
{
    public string $email;
    public string $password;

    public function __construct(string $email, string $password)
    {
        $this->email = $email;
        $this->password = $password;
    }
}