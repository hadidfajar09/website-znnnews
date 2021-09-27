<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'User Logout');
    }

    public function AccountSetting()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);

        return view('backend.account.profile', compact('editData'));
    }

    public function AccountEdit()
    {
        $id = Auth::user()->id;
        $editData = User::find($id);

        return view('backend.account.edit', compact('editData'));
    }

    public function AccountUpdate(Request $request, $id)
    {
        $data = User::find(Auth::user()->id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;
        $data->address = $request->address;
        $data->gender = $request->gender;
        $data->position = $request->position;

        if ($request->file('image')) {
            $file = $request->file('image');
            @unlink(public_path('upload/user_images/' . $data->image));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/user_images'), $filename);
            $data['image'] = $filename;
        }

        $data->save();

        $notification = array(

            'message' => 'Account Successfully Updated',
            'alert-type' => 'info'

        );

        return redirect()->route('account.setting')->with($notification);
    }

    public function ShowPassword()
    {
        return view('backend.account.showpass');
    }

    public function ChangePassword(Request $request)
    {
        $validated = $request->validate([
            'oldpassword' => 'required',
            'password' => 'required|confirmed',
        ]);


        $hashPassword = Auth::user()->password;
        if (Hash::check($request->oldpassword, $hashPassword)) {
            $user = User::find(Auth::id());
            $user->password = Hash::make($request->password);
            $user->save();
            Auth::logout();

            $notification = array(

                'message' => 'Password Successfully Changed',
                'alert-type' => 'info'

            );

            return redirect()->route('login')->with($notification);
        } else {
            return redirect()->back();
        }
    }
}
