<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function categoryIndex(){
        $categories = Category::all();
        return view("admin.category-add",compact("categories"));
    }

    public function categoryAdd(){
        $categories = Category::all();
        return view("admin.category-add",compact("categories"));
    }
    public function categoryStore(Request $request){

        $request->validate([
            'name' => 'required',
        ]);


        Category::create($request->all());
        return redirect()->route('categoryIndex')->with('msg', 'Category created successfully');


    }
    public function categoryEdit($id){
    {
        // dd($id);
        $category = Category::find($id);
      return view('admin.category-edit', compact('category'));
    }
}
}
