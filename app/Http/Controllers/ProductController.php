<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
            {
                return view('Pages/insert');
            }

 public function store(Request $request)
                    {
                        //Laravel Validator /*/*/*/-*-*-* 
                        $request -> validate([
                            'name' =>'required',
                            'number' =>'required',
                            'dob' =>'required',
                            'image' =>'required | mimes:jpg,jpeg,png,gif | max:10000',
                            'email' =>'required | email',
                        ]);



                        $images=time().'.'.$request->image->extension() ;
                        $request->image->move(public_path('images'),$images);
                        $Product = new Product;
                        $Product->image=$images;
                        $Product->name = $request->name;
                        $Product->number = $request->number;
                        $Product->dob = $request->dob;
                        $Product->email = $request->email;
                        $Product->save();
                        return back()->withSeccess('Data Submited Seccessfuly !');
                    }



            
}
