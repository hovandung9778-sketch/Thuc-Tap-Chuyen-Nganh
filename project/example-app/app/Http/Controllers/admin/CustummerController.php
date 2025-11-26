<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Custummer;

class CustummerController extends Controller
{
     public function __construct()
    {
        $custummer = Custummer::all();
        view()->share(['custummer'=>$custummer]);
    }   
    public function index(){
        $custummer = Custummer::all();
        return view('customer.Custummer',compact('custummer'));
    }
     public function create(){
        return view('customer.add');
    }
    public function store(Request $request){
        $customer = Custummer::create(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                
            ]
            );
            if($customer)
                return redirect()->route('admin.customer.index');
            else{
                return back();
            }
    }
    public function show($id){    }

    public function edit($id){
        $customer = Custummer::find($id);
        return view('customer.edit',compact('customer'));
    }
    public function update(Request $request,$id){
        $customer =Custummer::find($id);
        $customer->update([
            'name'=>$request->name,
            'email'=>$request->email,
        ]);
        if($customer)
            return redirect()->route('admin.customer.index');
        else
            return back();
    }
    public function destroy($id){
        $customer = Custummer::find($id);
        $customer->delete();
        if($customer)

            return redirect()->route('admin.customer.index');
        else
            return back();
    }

}
