<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function home(){
       return view ('index');
   }
    public function dataForm(){
       return view ('Pages/dataForm');
   }

public function dataView(){
       return view ('Pages/dataView',['products'=>Product::get()]);
   }

   
}
