<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CityController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $city = DB::table('citys')
            ->join('provinces', 'citys.province_id', 'provinces.id')
            ->select('citys.*',  'provinces.province_ind')
            ->orderBy('id', 'desc')->paginate(5);


        return view('backend.city.index', compact('city'));
    }

    public function AddCity()
    {
        $province = DB::table('provinces')->get();

        return view('backend.city.create', compact('province'));
    }

    public function StoreCity(Request $request)
    {

        $validated = $request->validate([
            'city_ind' => 'required|unique:citys|max:255',
            'city_en' => 'required|unique:citys|max:255',

        ]);

        $data = array();
        $data['city_ind'] = $request->city_ind;
        $data['city_en'] = $request->city_en;
        $data['province_id'] = $request->province_id;
        DB::table('citys')->insert($data);

        $notification = array(

            'message' => 'City Successfully Added',
            'alert-type' => 'success'

        );

        return redirect()->route('citys')->with($notification);
    }


    public function EditCity($id)
    {
        $city = DB::table('citys')->where('id', $id)->first();

        $province = DB::table('provinces')->get();

        return view('backend.city.edit', compact('city', 'province'));
    }


    public function UpdateCity(Request $request, $id)
    {

        $data = array();
        $data['city_ind'] = $request->city_ind;
        $data['city_en'] = $request->city_en;
        $data['province_id'] = $request->province_id;
        DB::table('citys')->where('id', $id)->update($data);

        $notification = array(

            'message' => 'City Successfully Updated',
            'alert-type' => 'info'

        );

        return redirect()->route('citys')->with($notification);
    }


    public function DeleteCity($id)
    {
        DB::table('citys')->where('id', $id)->delete();

        $notification = array(

            'message' => 'City Successfully Deleted',
            'alert-type' => 'error'

        );

        return redirect()->route('citys')->with($notification);
    }
}
