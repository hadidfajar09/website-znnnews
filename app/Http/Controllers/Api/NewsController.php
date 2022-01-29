<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\NewsResource;


class NewsController extends Controller
{
    function getByCategoryName(Request $request)
    {
        $id = $request->input('category_id');
        $news = DB::table('posts')->where([
            ['category_id', $id]
        ])
        ->join('categories', 'posts.category_id', 'categories.id')
        // ->join('subcategories', 'posts.subcategory_id', 'subcategories.id')
        ->join('users', 'posts.user_id', 'users.id')
        ->select('posts.*', 'categories.category_ind', 'categories.category_en', 'users.name')
        ->orderBy('id','desc')->paginate(20);

        $filterKey = $request->get('keyword');
        

        if ($filterKey) {
            $key = DB::table('posts')->where('title_ind', 'LIKE', "%$filterKey%")
            ->orWhere('tags_ind', 'LIKE', "%$filterKey%")
            ->orWhere('tags_en', 'LIKE', "%$filterKey%")
            ->join('categories', 'posts.category_id', 'categories.id')
            // ->join('subcategories', 'posts.subcategory_id', 'subcategories.id')
            ->join('users', 'posts.user_id', 'users.id')
            ->select('posts.*', 'categories.category_ind', 'categories.category_en', 'users.name')
            ->orderBy('id','desc')->paginate(20);
            return response()->json([
                'status' => 'ok',
                'reply' => 'List ditemmukan',
                'totalNews' => DB::table('posts')->count(),
                'totalResults' => $key->count(),
                'articles' => NewsResource::collection($key)
            ], 200);
        }

        

        if ($news->isEmpty()) {
            return response()->json([
                'status' => 'kosong',
                'reply' => 'Berita tidak ditemukan dengan kategori tersebut'
            ], 200);
        } else {
            return response()->json([
                'status' => 'ok',
                'reply' => 'List ditemmukan',
                'totalNews' => DB::table('posts')->count(),
                'totalResults' => $news->count(),
                'articles' => NewsResource::collection($news),
                
            ], 200);
        }
    }

    public function getAll()
    {
        $category = DB::table('categories')->get();
        return CategoryResource::collection($category->all());
    }
    public function getsubAll()
    {
        $subcategory = DB::table('subcategories')->get();
        return CategoryResource::collection($subcategory->all());
    }
}
