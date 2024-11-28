<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // This an API endpoint
    function form(Request $request){
        $products= Product::all();
        return view('alpine.products', ['products'=>$products]);
    }
    function index(Request $request){
        $products = Product::all();
        return response()->json($products);
        
    }
    function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);
        //Ekhon model call kore data create hobe
        $product = Product::create($validated);
        // return response()->json($product);
        return response()->json(['message' => 'Product Created Successfully!!!', 'product' => $product],201);
    }
    function delete(Request $request, $id){
        $product = Product::find($id);
        $product->delete();
        return response()->json(['message' => 'Product deleted successfully!'], 200);
    }
    function update(Request $request, $id){
        $product = Product::find($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);
        $product->update($validated);
        return response()->json(['message' => 'Product Updated Successfully!!!', 'product' => $product],200);
    }


}
