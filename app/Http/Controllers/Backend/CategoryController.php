<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $category = DB::table('categories')->orderBy('id', 'desc')->paginate(5);
        return view('backend.category.index', compact('category'));
    }

    public function AddCategory()
    {
        return view('backend.category.create');
    }

    public function StoreCategory(Request $request)
    {

        $validated = $request->validate([
            'category_ind' => 'required|unique:categories|max:255',
            'category_en' => 'required|unique:categories|max:255',
        ]);

        $data = array();
        $data['category_ind'] = $request->category_ind;
        $data['category_en'] = $request->category_en;
        DB::table('categories')->insert($data);

        $notification = array(

            'message' => 'Category Successfully Added',
            'alert-type' => 'success'

        );

        return redirect()->route('categories')->with($notification);
    }

    public function EditCategory($id)
    {
        $category = DB::table('categories')->where('id', $id)->first();

        return view('backend.category.edit', compact('category'));
    }

    public function UpdateCategory(Request $request, $id)
    {

        $data = array();
        $data['category_ind'] = $request->category_ind;
        $data['category_en'] = $request->category_en;
        DB::table('categories')->where('id', $id)->update($data);

        $notification = array(

            'message' => 'Category Successfully Updated',
            'alert-type' => 'info'

        );

        return redirect()->route('categories')->with($notification);
    }

    public function DeleteCategory($id)
    {
        DB::table('categories')->where('id', $id)->delete();

        $notification = array(

            'message' => 'Category Successfully Deleted',
            'alert-type' => 'error'

        );

        return redirect()->route('categories')->with($notification);
    }
}
