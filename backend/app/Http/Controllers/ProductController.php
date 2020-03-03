<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

use File;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function adProduct()
    {
        $categories = Category::all();
        return view('skateboards.pages.add_product', compact('categories'));
    }

    public function storeProduct(Request $request)
    {
        dd($request);
        $validateDate = $request->validate([
            'kategorijos' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'img' => 'mimes:jpeg, jpg, png, gift|required|max:10000'

            //pildomos formos name reiksme
        ]);

        $path = $request->file("img")->store("public/images");
        $filename = str_replace("public/", "", $path);

//        $cat = request('title');
//        dd($cat);
//        $tel = request('tel');
//        dd($tel);
        //dd(Auth::id());
        $product = Product::create([

            //i db stulpeli vardu name, idek title reiksme is formos
            'name' => request('name'),
            'description' => request('description'),
            'img' => $filename,
            'price' => request('price'),
            'quantity' => request('quantity'),
            'catid' => request('kategorijos'),
            'userId' => Auth::id()

        ]);
        return redirect('/product_management');
    }
    public function manageProduct(){
        return view('skateboards.pages.product_management');
    }
}
