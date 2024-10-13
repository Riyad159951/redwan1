<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = product::all();
        return view('backend.product.index', compact('products'));
    }

    public function create()
    {
        return view('backend.product.create');
    }

    public function store(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->descreption = $request->descreption;
        // if(!empty($request->image)){
        //     $file_name = 'product/'.time().'.' .$request->image->getClientOriginalExtension();
        //     Storage::disk('public')->put($file_name, file_get_contents($request->image));
        //     $product->image = $file_name;
        // }
        $product->save();
        session()->flash('success', 'Product created successfully');
        return redirect()->back();
    }


    public function edit($id){
        $product = product::find($id);
        return view('backend.product.edit', compact('product'));
    }

    public function update(Request $request, $id){
        $product = product::find($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->descreption = $request->descreption;
        if(!empty($request->image)){
            $file_name = 'product/'.time().'.' .$request->image->getClientOriginalExtension();
            Storage::disk('public')->put($file_name, file_get_contents($request->image));
            $product->image = $file_name;
        }
        $product->save();
        session()->flash('success', 'Product updated successfully');
        return redirect()->route('product.index');
    }

}
