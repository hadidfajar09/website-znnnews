<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvinceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $province = DB::table('provinces')->orderBy('id', 'desc')->paginate(5);
        return view('backend.province.index', compact('province'));
    }

    public function AddProvince()
    {
        return view('backend.province.create');
    }

    public function StoreProvince(Request $request)
    {

        $validated = $request->validate([
            'province_ind' => 'required|unique:provinces|max:255',
            'province_en' => 'required|unique:provinces|max:255',
        ]);

        $data = array();
        $data['province_ind'] = $request->province_ind;
        $data['province_en'] = $request->province_en;
        DB::table('provinces')->insert($data);

        $notification = array(

            'message' => 'Province Successfully Added',
            'alert-type' => 'success'

        );

        return redirect()->route('provinces')->with($notification);
    }

    public function EditProvince($id)
    {
        $province = DB::table('provinces')->where('id', $id)->first();

        return view('backend.province.edit', compact('province'));
    }

    public function UpdateProvince(Request $request, $id)
    {

        $data = array();
        $data['province_ind'] = $request->province_ind;
        $data['province_en'] = $request->province_en;
        DB::table('provinces')->where('id', $id)->update($data);

        $notification = array(

            'message' => 'Province Successfully Updated',
            'alert-type' => 'info'

        );

        return redirect()->route('provinces')->with($notification);
    }


    public function DeleteProvince($id)
    {
        DB::table('provinces')->where('id', $id)->delete();

        $notification = array(

            'message' => 'Province Successfully Deleted',
            'alert-type' => 'error'

        );

        return redirect()->route('provinces')->with($notification);
    }
}
