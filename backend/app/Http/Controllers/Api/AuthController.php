<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use ApiPlatform\Metadata\Operation;
use ApiPlatform\State\ProcessorInterface;
use App\ApiResource\LoginInput;

class AuthController implements ProcessorInterface
{
    /**
     * Handle an authentication attempt.
     */
    public function process(mixed $data, Operation $operation, array $uriVariables = [], array $context = []): JsonResponse
    {
        /** @var LoginInput $data */
        $credentials = [
            'email' => $data->email,
            'password' => $data->password,
        ];

        if (Auth::attempt($credentials)) {
            session()->regenerate();

            return response()->json(["status" => "ok"]);
        }

        return response()->json(
            ["status" => "error", "message" => "The provided credentials do not match our records."],
            401
        );
    }
}
