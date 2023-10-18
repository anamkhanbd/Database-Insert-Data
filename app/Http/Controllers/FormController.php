<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request){
        echo ('<pre>');
        print_r($request);
    }
}
