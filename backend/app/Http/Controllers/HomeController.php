<?php

namespace App\Http\Controllers;

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


    public function manageCategory(){
        return view('skateboards.pages.category_management');
    }



    public function manageOrders(){
        return view('skateboards.pages.orders_management');
    }
}
