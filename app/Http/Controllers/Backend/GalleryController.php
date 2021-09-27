<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function PhotoGallery()
    {
        $photo = DB::table('photos')->orderBy('id', 'desc')->paginate(5);

        return view('backend.gallery.photos', compact('photo'));
    }

    public function AddPhoto()
    {
        return view('backend.gallery.createphoto');
    }


    public function StorePhoto(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|unique:photos|max:255',
            'photo' => 'required|image|mimes:jpeg,jpg,png|unique:photos|max:2048',

        ]);

        $data = array();
        $data['title'] = $request->title;
        $data['type'] = $request->type;


        $image = $request->photo;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 300)->save('image/photogallery/' . $image_one);
            $data['photo'] = 'image/photogallery/' . $image_one;
            DB::table('photos')->insert($data);

            $notification = array(

                'message' => 'Photo Successfully Added',
                'alert-type' => 'success'

            );

            return redirect()->route('photo.gallery')->with($notification);
        } else {
            return redirect()->back()->withErrors($validated);
        }
    }

    public function EditPhoto($id)
    {
        $photo = DB::table('photos')->where('id', $id)->first();

        return view('backend.gallery.editphoto', compact('photo'));
    }

    public function UpdatePhoto(Request $request, $id)
    {
        $data = array();
        $data['title'] = $request->title;
        $data['type'] = $request->type;


        $oldimage = $request->oldimage;

        $image = $request->photo;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 300)->save('image/photogallery/' . $image_one);
            $data['photo'] = 'image/photogallery/' . $image_one;
            DB::table('photos')->where('id', $id)->update($data);

            unlink($oldimage);


            $notification = array(

                'message' => 'Photo Successfully Updated',
                'alert-type' => 'info'

            );

            return redirect()->route('photo.gallery')->with($notification);
        } else {
            $data['photo'] = $oldimage;

            DB::table('photos')->where('id', $id)->update($data);

            $notification = array(

                'message' => 'Photo Successfully Updated',
                'alert-type' => 'info'

            );
            return Redirect()->route('photo.gallery')->with($notification);
        }
    }

    public function DeletePhoto($id)
    {
        $photo =  DB::table('photos')->where('id', $id)->first();

        unlink($photo->photo);

        DB::table('photos')->where('id', $id)->delete();

        $notification = array(

            'message' => 'Photo Successfully Deleted',
            'alert-type' => 'error'

        );

        return redirect()->route('photo.gallery')->with($notification);
    }

    public function VideoGallery()
    {
        $video = DB::table('videos')->orderBy('id', 'desc')->paginate(5);

        return view('backend.gallery.videos', compact('video'));
    }

    public function AddVideo()
    {
        return view('backend.gallery.createvideo');
    }

    public function StoreVideo(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|unique:photos|max:255',
            'embed_code' => 'required',

        ]);

        $data = array();
        $data['title'] = $request->title;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;

        DB::table('videos')->insert($data);

        $notification = array(

            'message' => 'Video Embed Successfully Added',
            'alert-type' => 'success'

        );

        return redirect()->route('video.gallery')->with($notification);
    }

    public function EditVideo($id)
    {
        $video = DB::table('videos')->where('id', $id)->first();

        return view('backend.gallery.editvideo', compact('video'));
    }

    public function UpdateVideo(Request $request, $id)
    {

        $validated = $request->validate([
            'title' => 'required|unique:photos|max:255',
            'embed_code' => 'required',

        ]);

        $data = array();
        $data['title'] = $request->title;
        $data['embed_code'] = $request->embed_code;
        $data['type'] = $request->type;

        DB::table('videos')->where('id', $id)->update($data);

        $notification = array(

            'message' => 'Video Embed Successfully Updated',
            'alert-type' => 'info'

        );

        return redirect()->route('video.gallery')->with($notification);
    }

    public function DeleteVideo($id)
    {


        DB::table('videos')->where('id', $id)->delete();

        $notification = array(

            'message' => 'Video Successfully Deleted',
            'alert-type' => 'error'

        );

        return redirect()->route('video.gallery')->with($notification);
    }
}
