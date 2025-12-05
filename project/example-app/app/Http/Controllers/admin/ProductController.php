<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    public function __construct()
    {
        $products = product::all();
        view()->share(['products'=>$products]);
    }
    public function index(){
        $products = Product::with('category')->get();
        return view('product.product',compact('products'));
    }

    public function create(){
    $categories = Category::all(); 
    return view('product.add', compact('categories'));
    }

    public function store(Request $request){
        $product = product::create(
            [
                'name'=>$request->name,
                'image'=>$request->image,
                'decription'=>$request->decription,
                'content'=>$request->content,
                'gia'=>$request->gia,
                'idCategory'=>$request->idCategory,
                'status'=>$request->status,
            ]
            );
            if($product)
                return redirect()->route('admin.product.index');
            else{
                return back();
            }
    }
    public function show($id){    }

    public function edit($id){
        $product = product::find($id);
        $categories = Category::all();
        return view('product.edit',compact('product','categories'));
    }
    public function update(Request $request,$id){
        $product =product::find($id);
        $product->update([
           'name'=>$request->name,
            'image'=>$request->image,
            'decription'=>$request->decription,
            'content'=>$request->content,
            'gia'=>$request->gia,
            'status'=>$request->status,
        ]);
        if($product)
            return redirect()->route('admin.product.index');
        else
            return back();
    }
    public function destroy($id){
        $product = product::find($id);
        $product->delete();
        if($product)

            return redirect()->route('admin.product.index');
        else
            return back();
    }
    

}
