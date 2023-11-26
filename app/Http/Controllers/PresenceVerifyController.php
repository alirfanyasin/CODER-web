<?php

namespace App\Http\Controllers;

use App\Models\Presence;
use App\Models\User;
use App\Models\UserPresence;
use Illuminate\Http\Request;

class PresenceVerifyController extends Controller
{

    public function user_presence($uuid, $id)
    {
        return view('pages.app.presence_verify', [
            'data' => Presence::findOrFail($id)
        ]);
    }

    public function user_presence_submit(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required',
            'password' => 'required|min:8'
        ]);

        $email = $validate['email'];
        $password = $validate['password'];

        $user = User::where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user->password)) {
                $dataPresence = Presence::findOrFail($request->presence_id);
                if ($dataPresence->status == 'Active') {
                    UserPresence::updateOrCreate(
                        ['user_id' => $user->id, 'presence_id' => $request->presence_id, 'status' => 'Hadir']
                    );
                    return redirect()->route('presence.verify.success')->with(['success' => 'Presence Success', 'username' => $user->name]);
                } else {
                    return redirect()->back()->with('error', 'Absensi sudah di tutup');
                }
            } else {
                return redirect()->back()->with('error', 'Email atau Password anda salah');
            }
        } else {
            return redirect()->back()->with('error', 'Email atau Password anda salah');
        }
    }

    public function user_presence_success()
    {
        return view('pages.app.presence_verify_success');
    }
}
