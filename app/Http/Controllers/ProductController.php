<?php

namespace App\Http\Controllers;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();

        return view('product', compact('products'));
    }

};