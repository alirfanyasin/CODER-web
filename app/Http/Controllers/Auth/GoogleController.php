<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCollback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $findUser = User::where('google_id', $googleUser->id)->first();

            if ($findUser) {
                Auth::login($findUser);
                return redirect()->intended('dashboard');
            } else {
                $user = User::updateOrCreate([
                    'google_id' => $googleUser->id,
                ], [
                    'division_id' => 1,
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => Hash::make('password')
                    // 'google_token' => $googleUser->token,
                    // 'google_refresh_token' => $googleUser->refreshToken,
                ]);
                $user->assignRole('user');
                Auth::login($user);
            }
            return redirect()->intended('dashboard');
        } catch (Exception $error) {
            dd($error->getMessage());
        }
    }
}
