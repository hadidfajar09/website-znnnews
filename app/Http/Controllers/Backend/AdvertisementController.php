<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class AdvertisementController extends Controller
{
    public function ListAdvertisement()
    {
        $reclame = DB::table('advertisements')->orderBy('id', 'desc')->get();

        return view('backend.advertisement.list', compact('reclame'));
    }

    public function AddAdvertisement()
    {
        return view('backend.advertisement.add');
    }

    public function StoreAdvertisement(Request $request)
    {

        $data = array();
        $data['link'] = $request->link;

        if ($request->type == 2) {

            $image = $request->banner;

            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(970, 90)->save('image/iklan/' . $image_one);
            $data['banner'] = 'image/iklan/' . $image_one;
            // image/photogallery/343434.png
            $data['type'] = 2;
            DB::table('advertisements')->insert($data);


            $notification = array(
                'message' => 'Harizontal Ads Inserted Successfully',
                'alert-type' => 'success'
            );

            return Redirect()->route('list.advertisement')->with($notification);
        } else {

            $image = $request->banner;

            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save('image/iklan/' . $image_one);
            $data['banner'] = 'image/iklan/' . $image_one;
            // image/photogallery/343434.png
            $data['type'] = 1;
            DB::table('advertisements')->insert($data);


            $notification = array(
                'message' => 'Vertical Ads Inserted Successfully',
                'alert-type' => 'info'
            );

            return Redirect()->route('list.advertisement')->with($notification);
        }
    } // End Method

    public function DeleteAdvertisement($id)
    {
        $reclame =  DB::table('advertisements')->where('id', $id)->first();

        unlink($reclame->banner);

        DB::table('advertisements')->where('id', $id)->delete();

        $notification = array(

            'message' => 'Advertisement Successfully Deleted',
            'alert-type' => 'error'

        );

        return redirect()->route('list.advertisement')->with($notification);
    }
}
