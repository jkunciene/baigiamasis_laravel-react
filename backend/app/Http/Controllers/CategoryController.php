<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(){
        return view('skateboards.pages.add_category');
    }

    public function storeCategory(Request $request){
        $validateDate = $request->validate([
            'name' => 'required'
        ]);
//        $cat = request('title');
//        dd($cat);
        $category = Category::create([
            'name'=> request('name')
        ]);
        return redirect('/category_management');
    }

    public function manageCategory(){
        $categories = Category::all();
        return view('skateboards.pages.category_management', compact('categories'));
    }
    public function categoryDelete(Category $category){
        $category->delete();
        return redirect ('/category_management');
    }
}
