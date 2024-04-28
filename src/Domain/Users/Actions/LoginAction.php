<?php

namespace Domain\Users\Actions;

use Domain\Users\DataTransferObjects\LoginDataTransferObject;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class LoginAction
{
    public function __invoke(
        LoginDataTransferObject $object
    ): JsonResponse
    {
        $authAttempt = Auth::attempt([
            'email' => $object->email,
            'password' => $object->password,
        ]);

        return match (!$authAttempt) {
            true => response()->json([
                'message' => 'Unauthorized'
            ], 401),
            default => response()->json([
                'message' => [
                    'access_token' => Auth::user()->createToken('auth_token')->plainTextToken,
                    'user' => Auth::user()
                ]
            ])
        };
    }
}
