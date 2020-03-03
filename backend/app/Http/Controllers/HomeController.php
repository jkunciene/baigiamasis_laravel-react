<?php

namespace App\Http\Controllers;
use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('skateboards.pages.home');
    }

    public function manageProduct()
    {
        $products = Product::select('products.id', 'products.name', 'products.description', 'products.img', 'products.price', 'products.quantity', 'categories.name as category')
            ->join('categories', 'categories.id', "=", 'products.catid')->paginate(2);
//
        return view('skateboards.pages.product_management', compact('products'));

    }

    public function manageCategory(){
        return view('skateboards.pages.category_management');
    }



    public function manageOrders(){
        return view('skateboards.pages.orders_management');
    }
}
