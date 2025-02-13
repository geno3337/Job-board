<?php

namespace App\Http\Service;

use Firebase\JWT\JWT;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;

class JwtService
{
    protected $secretKey;

    public function __construct()
    {
        $this->secretKey = 'JWT_SECRET'; // Fetch JWT secret from .env file
    }

    /**
     * Generate JWT token for the authenticated user
     *
     * @param \App\Models\User $user
     * @return string
     */
    public function generateToken($user)
    {
        $issuedAt = time();
        $expirationTime = $issuedAt + 36000;  // jwt valid for 10 hour from the issued time
        $payload = [
            'iat' => $issuedAt,
            'exp' => $expirationTime,
            'sub' => $user->id,  // Typically user id as the subject
            'name' => $user->name,
            'email' => $user->email,
            'role' => $user->role,
        ];

        // Encode the JWT
        return JWT::encode($payload, $this->secretKey,'HS256');
    }

    /**
     * Generate JWT for the currently authenticated user
     *
     * @return string
     */
    public function generateForCurrentUser()
    {
        $user = Auth::user();
        return $this->generateToken($user);
    }
}
