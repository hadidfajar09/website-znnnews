<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function AllKolumnis()
    {
        $kolumnis = DB::table('users')->where('type', 0)->get();

        return view('backend.role.index', compact('kolumnis'));
    }

    public function AddKolumnis()
    {

        return view('backend.role.addrole');
    }

    public function StoreKolumnis(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['category'] = $request->category;
        $data['district'] = $request->district;
        $data['post'] = $request->post;
        $data['setting'] = $request->setting;
        $data['website'] = $request->website;
        $data['gallery'] = $request->gallery;
        $data['ads'] = $request->ads;
        $data['role'] = $request->role;
        $data['type'] = 0;

        DB::table('users')->insert($data);

        $notification = array(

            'message' => 'User Role Successfully Added',
            'alert-type' => 'success'

        );

        return redirect()->route('all.kolumnis')->with($notification);
    }



    public function EditKolumnis($id)
    {
        $kolumnis = DB::table('users')->where('id', $id)->first();

        return view('backend.role.edit', compact('kolumnis'));
    }

    public function UpdateKolumnis(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['category'] = $request->category;
        $data['district'] = $request->district;
        $data['post'] = $request->post;
        $data['setting'] = $request->setting;
        $data['website'] = $request->website;
        $data['gallery'] = $request->gallery;
        $data['ads'] = $request->ads;
        $data['role'] = $request->role;

        DB::table('users')->where('id', $id)->update($data);

        $notification = array(

            'message' => 'User Role Successfully Updated',
            'alert-type' => 'info'

        );

        return redirect()->route('all.kolumnis')->with($notification);
    }

    public function DeleteKolumnis($id)
    {
        $kolumnis =  DB::table('users')->where('id', $id)->first();

        unlink($kolumnis->image);

        DB::table('posts')->where('id', $id)->delete();

        $notification = array(

            'message' => 'Kolumnis Successfully Deleted',
            'alert-type' => 'error'

        );

        return redirect()->route('all.kolumnis')->with($notification);
    }
}
