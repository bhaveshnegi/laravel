<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){

        $products = Product::all();
        // dd($products);

        return view('product.index',['products'=> $products]);
    }

    public function create(){

        return view('product.create');
    }

    public function store(Request $request){

        // $product = new Product;
        // $product->name=$request->name;
        // $product->description=$request->description;
        // $product->size=$request->size;

        // $product->save();
        $request->validate([
            'name'=>'required|max:100',
            'description'=>'nullable|min:3',
            'size'=>'required|decimal:0,2|max:100',
        ]);

        Product::create($request->input());
        return redirect()->route('products.index');
    }
}
