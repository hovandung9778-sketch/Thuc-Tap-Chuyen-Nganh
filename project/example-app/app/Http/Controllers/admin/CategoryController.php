<?php

namespace App\Http\Controllers\admin; // PHẢI CÓ DÒNG NÀY

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller // PHẢI CÓ DÒNG NÀY
{
    public function __construct()
    {
        $categories = Category::all();
        view()->share(['categories'=>$categories]);
    }
    public function index(){
        $categories = Category::all();
        return view('category.customer',compact('categories'));
    }
}