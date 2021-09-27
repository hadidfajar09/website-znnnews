<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class ComponentController extends Controller
{
    public function MainWebSetting()
    {
        $webset = DB::table('websettings')->first();

        return view('backend.setting.website', compact('webset'));
    }


    public function UpdateComponent(Request $request, $id)
    {
        $data = array();
        $data['address_ind'] = $request->address_ind;
        $data['address_en'] = $request->address_en;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;


        $oldlogo = $request->oldlogo;

        $logo = $request->logo;
        if ($logo) {
            $image_one = uniqid() . '.' . $logo->getClientOriginalExtension();
            Image::make($logo)->resize(320, 130)->save('image/logo/' . $image_one);
            $data['logo'] = 'image/logo/' . $image_one;
            DB::table('websettings')->where('id', $id)->update($data);

            unlink($oldlogo);

            $notification = array(

                'message' => 'Component Successfully Updated',
                'alert-type' => 'info'

            );

            return redirect()->route('component.setting')->with($notification);
        } else {
            $data['logo'] = $oldlogo;

            DB::table('websettings')->where('id', $id)->update($data);

            $notification = array(

                'message' => 'Component Successfully Updated',
                'alert-type' => 'info'

            );
            return Redirect()->route('component.setting')->with($notification);
        }
    }
}
