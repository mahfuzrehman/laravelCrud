<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create() {
        return view('backend.products.add');
    }
    public function store(Request $request) {
      $products = new Product();
      $products->title = $request->title;
      $products->desc  = $request->desc;
      $products->price = $request->price;
      $products->image = $request->image;
      $products->save();

      return back()->with('msg','Products Added Successfully');
    }
    public function index(){
        $products = Product::all();
        return view('backend.products.manage',['products' => $products]);
      }
}
