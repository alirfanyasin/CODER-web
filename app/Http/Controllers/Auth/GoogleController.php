<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin\Division;
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
                $user = User::updateOrCreate(
                    ['google_id' => $googleUser->id],
                    [
                        'division_id' => 1,
                        'name' => $googleUser->name,
                        'email' => $googleUser->email,
                        'password' => Hash::make('Y60ku5mYH5sMVpSggYi0g5nVHk6LNw')
                        // 'google_token' => $googleUser->token,
                        // 'google_refresh_token' => $googleUser->refreshToken,
                    ]
                );
                $user->assignRole('user');

                // Redirect to division choice for the first login
                if (!$findUser) {
                    Auth::login($user);
                    return redirect()->route('auth.choice_division')->with('success', 'Choice division');
                } else {
                    Auth::login($user);
                    return redirect()->intended('dashboard');
                }
            }
        } catch (Exception $error) {
            dd($error->getMessage());
        }
    }

    public function choiceDivision()
    {
        return view('pages.app.choice_division', [
            'data_division' => Division::all()
        ]);
    }

    public function saveChoiceDivision(Request $request)
    {
        $request->validate([
            'division_id' => 'required'
        ]);

        $user = User::findOrFail(Auth::user()->id);
        $user->update(['division_id' => $request->division_id]);

        return redirect()->intended('dashboard');
    }
}
