<?php

namespace App\Http\Service;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use App\Models\User;

class JwtGuard implements Guard
{
    use \Illuminate\Auth\GuardHelpers;

    protected $request;
    protected $user;
    protected $secretKey;

    public function __construct(UserProvider $provider, Request $request)
    {
        $this->provider = $provider;
        $this->request = $request;
        $this->secretKey = 'JWT_SECRET'; // Ensure your JWT secret is in the .env file
    }

    /**
     * Get the currently authenticated user.
     */
    public function user()
    {
        if ($this->user) {
            return $this->user;
        }

        $token = $this->getTokenFromRequest();

        if ($token) {
            $decoded = $this->decodeToken($token);

            if ($decoded && isset($decoded->sub)) {
                $this->user = $this->provider->retrieveById($decoded->sub);
            }
        }

        return $this->user;
    }

    /**
     * Check if a user is authenticated.
     */
    public function check()
    {
        return !is_null($this->user());
    }

    /**
     * Validate a user’s credentials.
     */
    public function validate(array $credentials = [])
    {
        if (!isset($credentials['email'], $credentials['password'])) {
            return false;
        }

        $user = $this->provider->retrieveByCredentials($credentials);

        return $user && $this->provider->validateCredentials($user, $credentials);
    }

    /**
     * Get token from the request.
     */
    protected function getTokenFromRequest()
    {
        $token = $this->request->bearerToken();

        return $token;
    }

    /**
     * Decode the JWT token.
     */
    protected function decodeToken($token)
    {
        try {
            return JWT::decode($token, new Key($this->secretKey, 'HS256'));
        } catch (\Exception $e) {
            return null;
        }
    }
}
