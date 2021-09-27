<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SubCategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $subcategory = DB::table('subcategories')
            ->join('categories', 'subcategories.category_id', 'categories.id')
            ->select('subcategories.*',  'categories.category_ind')
            ->orderBy('id', 'desc')->paginate(5);


        return view('backend.subcategory.index', compact('subcategory'));
    }

    public function AddSubCategory()
    {
        $category = DB::table('categories')->get();

        return view('backend.subcategory.create', compact('category'));
    }

    public function StoreSubCategory(Request $request)
    {

        $validated = $request->validate([
            'subCategory_ind' => 'required|unique:subcategories|max:255',
            'subCategory_en' => 'required|unique:subcategories|max:255',

        ]);

        $data = array();
        $data['subCategory_ind'] = $request->subCategory_ind;
        $data['subCategory_en'] = $request->subCategory_en;
        $data['category_id'] = $request->category_id;
        DB::table('subcategories')->insert($data);

        $notification = array(

            'message' => 'SubCategory Successfully Added',
            'alert-type' => 'success'

        );

        return redirect()->route('subcategories')->with($notification);
    }

    public function EditSubCategory($id)
    {
        $subcategory = DB::table('subcategories')->where('id', $id)->first();

        $category = DB::table('categories')->get();

        return view('backend.subcategory.edit', compact('subcategory', 'category'));
    }

    public function UpdateSubCategory(Request $request, $id)
    {

        $data = array();
        $data['subCategory_ind'] = $request->subCategory_ind;
        $data['subCategory_en'] = $request->subCategory_en;
        $data['category_id'] = $request->category_id;
        DB::table('subcategories')->where('id', $id)->update($data);

        $notification = array(

            'message' => 'SubCategory Successfully Updated',
            'alert-type' => 'info'

        );

        return redirect()->route('subcategories')->with($notification);
    }

    public function DeleteSubCategory($id)
    {
        DB::table('subcategories')->where('id', $id)->delete();

        $notification = array(

            'message' => 'SubCategory Successfully Deleted',
            'alert-type' => 'error'

        );

        return redirect()->route('subcategories')->with($notification);
    }
}
