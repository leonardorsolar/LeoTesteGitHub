<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //

    public function index(){

        $products = Product::all();

        return view('product.index', compact('products'));
    }

    public function show(Product $product)
    {
    // $project = Project::find(request('product'));
    // $project = Project::findOrFail(request('product'));
    return view ('product.show', compact('product'));
    }



}