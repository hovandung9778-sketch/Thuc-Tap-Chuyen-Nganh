<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
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
        $categories = Category::all(); 
        return view('admin', compact('categories')); 
    }


    public function home()
    {
        $categories = Category::all();
        $products = product::where('status', 1)->get();
        return view('home',compact('categories','products'));
    }
}
