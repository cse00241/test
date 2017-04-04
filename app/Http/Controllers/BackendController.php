<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    //

    public function myadmin(){
    	return view('backend/dashboard');
    }
    
    public function slider()
    {
        
    }
    public function categories(){
    	return view('backend/categories');
    }

    public function brands(){
    	return view('backend/brands');
    }


    public function products(){
    	return view('backend/products');
    }

    public function order(){
    	return view('backend/order');
    }
    
}
