<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Presence;
use App\Models\Submission;
use App\Models\User;
use App\Models\UserPresence;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UserProfileController extends Controller
{
  public function index($id, $name)
  {
    $data = User::where(['id' => $id, 'name' => $name])->first();
    $dataPresence = UserPresence::where('user_id', $id)->get();
    $dataSubmission = Submission::where('user_id', $id)->get();

    $totalPointSubmission = $dataSubmission->sum('point');
    $totalPointPresence = $dataPresence->sum('point');
    $totalPoint = $totalPointSubmission + $totalPointPresence;

    $meeting = Presence::all();

    $totalPresence = $dataPresence->where('status', 'Hadir')->count();
    $totalMeetings = $meeting->count();

    // if ($totalMeetings > 0) {
    //     $attendancePercentage = ($totalPresence / $totalMeetings) * 100;
    // } else {
    //     $attendancePercentage = 0;
    // }

    return view('pages.app.my_profile', [
      'data' => $data,
      'dataPresence' => $dataPresence,
      'dataSubmission' => $dataSubmission,
      'totalPoint' => $totalPoint,
      'totalPresence' => $totalPresence,
    ]);
  }


  public function settings($id, $name)
  {
    return view('pages.app.profile_settings', [
      'data' => User::findOrFail($id)
    ]);
  }


  public function update(Request $request, $id)
  {
    $data = User::findOrFail($id);
    $validatedData = $request->validate([
      'name' => 'required',
      'email' => 'nullable|email',
      'field_of_study' => 'required',
      'nim' => 'required',
      'batch' => 'nullable',
      'phone_number' => 'nullable',
      'avatar' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation rules
    ]);

    if ($request->hasFile('avatar')) {
      $oldFile = $data->avatar;

      if ($oldFile && $oldFile !== 'photo-profile.jpg') {
        Storage::delete('public/avatar/' . $oldFile);
      }

      $file = $request->file('avatar');
      $nameFile = Str::random(5) . '_' . $file->getClientOriginalName();
      $file->storeAs('public/avatar', $nameFile);
      $validatedData['avatar'] = $nameFile;
    }



    if ($data->update($validatedData)) {
      return redirect()->route('user.my-profile', ['id' => $id, 'name' => $data->name])->with('success', 'Updated profile successfully');
    } else {
      return redirect()->back()->with('error', 'Failed to update profile.')->withErrors($validatedData)->withInput();
    }
  }
}
