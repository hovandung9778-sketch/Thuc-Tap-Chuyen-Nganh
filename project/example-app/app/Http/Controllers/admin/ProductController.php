<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $products = product::all();
        view()->share(['products'=>$products]);
    }
    public function index(){
        $products = product::all();
        return view('product.product',compact('products'));
    }

     public function create(){
        return view('product.add');
    }
    public function store(Request $request){
        $product = product::create(
            [
                'name'=>$request->name,
                'gia'=>$request->gia,
                
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
        return view('product.edit',compact('product'));
    }
    public function update(Request $request,$id){
        $product =product::find($id);
        $product->update([
            'name'=>$request->name,
            'gia'=>$request->gia,
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
