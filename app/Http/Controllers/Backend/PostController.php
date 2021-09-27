<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(Request $request)
    {
        $filterKey = $request->get('keyword');
        $data['post'] = DB::table('posts')->paginate(5);
        if ($filterKey) {
            $data['post'] = DB::table('posts')->where('title_ind', 'LIKE', "%$filterKey%")
                ->join('categories', 'posts.category_id', 'categories.id')
                ->join('subcategories', 'posts.subcategory_id', 'subcategories.id')
                ->join('provinces', 'posts.province_id', 'provinces.id')
                ->join('citys', 'posts.city_id', 'citys.id')
                ->select('posts.*', 'categories.category_ind', 'subcategories.subCategory_ind', 'provinces.province_ind', 'citys.city_ind')
                ->orderBy('id', 'desc')->paginate(5);

            return view('backend.post.index', $data);
        }

        $post = DB::table('posts')
            ->join('categories', 'posts.category_id', 'categories.id')
            ->join('subcategories', 'posts.subcategory_id', 'subcategories.id')
            ->join('provinces', 'posts.province_id', 'provinces.id')
            ->join('citys', 'posts.city_id', 'citys.id')
            ->select('posts.*', 'categories.category_ind', 'subcategories.subCategory_ind', 'provinces.province_ind', 'citys.city_ind')
            ->orderBy('id', 'desc')->paginate(5);


        return view('backend.post.index', compact('post'));
    }


    public function Create()
    {

        $category = DB::table('categories')->get();
        $province = DB::table('provinces')->get();


        return view('backend.post.create', compact('category', 'province'));
    }


    public function StorePost(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'province_id' => 'required',
            'image' => 'required|image|mimes:jpeg,jpg,png|unique:posts|max:2048',
        ]);

        $data = array();
        $data['title_ind'] = $request->title_ind;
        $data['title_en'] = $request->title_en;
        $data['user_id'] = Auth::id();
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['province_id'] = $request->province_id;
        $data['city_id'] = $request->city_id;
        $data['tags_ind'] = $request->tags_ind;
        $data['tags_en'] = $request->tags_en;
        $data['details_ind'] = $request->details_ind;
        $data['details_en'] = $request->details_en;
        $data['headline'] = $request->headline;
        $data['first_section'] = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['big_thumbnail'] = $request->big_thumbnail;
        $data['post_date'] = date('d-m-Y H:i:s');
        $data['post_month'] = date("F");

        $image = $request->image;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 300)->save('image/postimg/' . $image_one);
            $data['image'] = 'image/postimg/' . $image_one;
            DB::table('posts')->insert($data);

            $notification = array(

                'message' => 'News Successfully Added',
                'alert-type' => 'success'

            );

            return redirect()->route('all.post')->with($notification);
        } else {
            return redirect()->back()->withErrors($validated);
        }
    }




    public function GetSubCategory($category_id)
    {
        $sub = DB::table('subcategories')->where('category_id', $category_id)->get();

        return response()->json($sub);
    }

    public function GetCity($province_id)
    {
        $city = DB::table('citys')->where('province_id', $province_id)->get();

        return response()->json($city);
    }

    public function EditPost($id)
    {
        $post = DB::table('posts')->where('id', $id)->first();
        $category = DB::table('categories')->get();
        $province = DB::table('provinces')->get();

        return view('backend.post.edit', compact('post', 'category', 'province'));
    }

    public function UpdatePost(Request $request, $id)
    {

        $data = array();
        $data['title_ind'] = $request->title_ind;
        $data['title_en'] = $request->title_en;
        $data['user_id'] = Auth::id();
        $data['category_id'] = $request->category_id;
        $data['subcategory_id'] = $request->subcategory_id;
        $data['province_id'] = $request->province_id;
        $data['city_id'] = $request->city_id;
        $data['tags_ind'] = $request->tags_ind;
        $data['tags_en'] = $request->tags_en;
        $data['details_ind'] = $request->details_ind;
        $data['details_en'] = $request->details_en;
        $data['headline'] = $request->headline;
        $data['first_section'] = $request->first_section;
        $data['first_section_thumbnail'] = $request->first_section_thumbnail;
        $data['big_thumbnail'] = $request->big_thumbnail;

        $oldimage = $request->oldimage;

        $image = $request->image;
        if ($image) {
            $image_one = uniqid() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 300)->save('image/postimg/' . $image_one);
            $data['image'] = 'image/postimg/' . $image_one;
            DB::table('posts')->where('id', $id)->update($data);

            unlink($oldimage);

            $notification = array(

                'message' => 'News Successfully Updated',
                'alert-type' => 'info'

            );

            return redirect()->route('all.post')->with($notification);
        } else {
            $data['image'] = $oldimage;

            DB::table('posts')->where('id', $id)->update($data);

            $notification = array(

                'message' => 'News Successfully Updated',
                'alert-type' => 'info'

            );
            return Redirect()->route('all.post')->with($notification);
        }
    }


    public function DeletePost($id)
    {
        $post =  DB::table('posts')->where('id', $id)->first();

        unlink($post->image);

        DB::table('posts')->where('id', $id)->delete();

        $notification = array(

            'message' => 'News Successfully Deleted',
            'alert-type' => 'error'

        );

        return redirect()->route('all.post')->with($notification);
    }
}
