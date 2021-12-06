<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\SingupRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\ApiResponser;
use Carbon\Carbon;

class AuthController extends Controller
{
    use ApiResponser;

    public function signup(SingupRequest $request)
    {
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->user_name = $request->user_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->gender = $request->gender;
        $user->avatar = 'user.png';
        $user->save();

        return $this->respondSuccess($user);
    }

    public function signin(Request $request)
    {
        $credentials = $request->only(['user_name', 'password']);

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
