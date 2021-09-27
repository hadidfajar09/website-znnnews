<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ExtraController extends Controller
{
    public function English()
    {
        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang', 'en');
        return redirect()->back();
    }

    public function Indonesia()
    {

        Session::get('lang');
        Session()->forget('lang');
        Session()->put('lang', 'ind');
        return redirect()->back();
    }

    public function SinglePost($id)
    {
        $post = DB::table('posts')
            ->join('categories', 'posts.category_id', 'categories.id')
            ->join('subcategories', 'posts.subcategory_id', 'subcategories.id')
            ->join('users', 'posts.user_id', 'users.id')
            ->select('posts.*', 'categories.category_ind', 'categories.category_en', 'subcategories.subCategory_ind', 'subcategories.subCategory_en', 'users.name')
            ->where('posts.id', $id)->first();

        return view('main.single_post', compact('post'));
    }

    public function CategoryPost($id, $category_en)
    {
        $catposts = DB::table('posts')->where('category_id', $id)->orderBy('id', 'desc')->paginate(5);

        return view('main.allpost', compact('catposts'));
    }


    public function SubCategoryPost($id, $subCategory_en)
    {
        $subcatposts = DB::table('posts')->where('subcategory_id', $id)->orderBy('id', 'desc')->paginate(5);

        return view('main.subpost', compact('subcatposts'));
    }

    public function GetSubProvince($province_id)
    {
        $sub = DB::table('citys')->where('province_id', $province_id)->get();

        return response()->json($sub);
    }

    public function SearchProvince(Request $request)
    {
        $provid = $request->province_id;
        $cityid = $request->city_id;

        $district = DB::table('posts')->where('province_id', $provid)->where('city_id', $cityid)->orderBy('id', 'desc')->paginate(5);

        return view('main.searchdistrict', compact('district'));
    }

    public function SearchPost(Request $request)
    {
        $filterKey = $request->get('keyword');
        $post = DB::table('posts')->paginate(5);
        if ($filterKey) {
            $post = DB::table('posts')->where('title_ind', 'LIKE', "%$filterKey%")->orWhere('title_en', 'LIKE', "%$filterKey%")
                ->orWhere('tags_ind', 'LIKE', "%$filterKey%")->orWhere('tags_en', 'LIKE', "%$filterKey%")
                ->orderBy('id', 'desc')->paginate(5);

            return view('main.searchpost', compact('post'));
        }

        $post = DB::table('posts')
            ->orderBy('id', 'desc')->paginate(5);

        return view('main.searchpost', compact('post'));
    }

    public function PhotoGallery()
    {
        $photos = DB::table('photos')->orderBy('id', 'desc')->get();

        return view('main.photogallery', compact('photos'));
    }

    public function VideoGallery()
    {
        $videos = DB::table('videos')->orderBy('id', 'desc')->get();

        return view('main.videogallery', compact('videos'));
    }
}
