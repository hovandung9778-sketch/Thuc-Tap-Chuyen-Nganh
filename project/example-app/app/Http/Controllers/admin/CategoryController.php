<?php

namespace App\Http\Controllers\admin; 

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller 
{
    public function __construct()
    {
        $categories = Category::all();
        view()->share(['categories'=>$categories]);
    }
    public function index(){
        $categories = Category::all();
        return view('category.category',compact('categories'));
    }
    public function create(){
        return view('category.add');
    }
    public function store(Request $request){
        $category = Category::create(
            [
                'name'=>$request->name,
                
            ]
            );
            if($category)
                return redirect()->route('admin.category.index');
            else{
                return back();
            }
    }
    public function show($id){    }

    public function edit($id){
        $category = Category::find($id);
        return view('category.edit',compact('category'));
    }
    public function update(Request $request,$id){
        $category =Category::find($id);
        $category->update([
            'name'=>$request->name,
        ]);
        if($category)
            return redirect()->route('admin.category.index');
        else
            return back();
    }
    public function destroy($id){
        $category = Category::find($id);
        $category->delete();
        if($category)

            return redirect()->route('admin.category.index');
        else
            return back();
    }
    
}