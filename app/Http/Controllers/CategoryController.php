<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(){
        return view('backend.category.add');
    }
    public function store(Request $request){
      $categories = new Category();
      $categories->name = $request->name;
      $categories->save();

      return back()->with('msg', 'Category Name Added Successfully!');
    }
    public function index(){
      $categories = Category::all();
      return view('backend.category.manage',['categories' => $categories]);
    }
}
