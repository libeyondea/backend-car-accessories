<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use Carbon\Carbon;

class AuthController extends Controller
{
    use ApiResponser;

    public function signin(Request $request)
    {
        $credentials = request(['user_name', 'password']);

        if (!auth()->attempt($credentials)) {
            return $this->respondBadRequest('Incorrect username or password');
        }

        $tokenResult = auth()->user()->createToken('Personal Access Token');

        return $this->respondSuccess([
            'user' => auth()->user(),
            'tokens' => [
                'access_token' => [
                    'token' => $tokenResult->plainTextToken,
                    'expires_at' => Carbon::parse($tokenResult->accessToken->created_at)->addMinutes(config('sanctum.expiration'))
                ]
            ]
        ]);
    }

    public function signout()
    {
        auth()->user()->tokens()->delete();
        return $this->respondSuccess('Signout success');
    }

    public function me()
    {
        return $this->respondSuccess([
            'id' => auth()->user()->id,
            'user_name' => auth()->user()->user_name,
            'first_name' => auth()->user()->first_name,
            'last_name' => auth()->user()->last_name,
            'email' => auth()->user()->email,
            'email_verified_at' => auth()->user()->email_verified_at,
            'avatar' => auth()->user()->avatar
        ]);
    }
}
