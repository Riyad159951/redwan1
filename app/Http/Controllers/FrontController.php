<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontController extends Controller
{
    public function index()
    {
        $products = product::all();
        return view('frontend.index', compact('products'));

    }

    public function fashion(){
        return view('frontend.fashion');
    
    
    }


    }

