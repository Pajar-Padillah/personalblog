<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function edit(User $user)
    {
        return view('dashboard/user/index', [
            'title' => "Edit Profile",
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // $user = Auth::user();
        $rules = [
            'name' => 'required',
            'username' => 'required',
            'image' => 'image|file|mimes:jpg,jpeg,png,gif|max:2048',
            'email' => 'required'
        ];
        $validate_data = $request->validate($rules);

        if ($request->filled('password')) {
            $request->validate([
                'password' => 'min:6'
            ]);
            if (Hash::check($request->old_password, $user->password)) {
                $validate_data['password'] = Hash::make($request->password);
            } else {
                toastr()->error('Old Password does not match!');
                return redirect()->back();
            }
        }

        if ($request->File('image')) {
            if ($request->old_image) {
                File::delete(public_path('uploud/user') . '/' . $request->old_image);
            }
            $image_file = $request->file('image');
            $image_ekstensi = $image_file->extension();
            $image_name = date('ymdhis') . "." . $image_ekstensi;
            $image_file->move(public_path('uploud/user'), $image_name);
            $validate_data['image'] = $image_name;
        }

        User::where('id', $user->id)->update($validate_data);
        toastr()->success('User has been updated!');
        return redirect()->back();
    }
}
