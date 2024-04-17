<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::get();
        return view('category.index',compact('categories'));
    }
    public function create(){

        return view('category.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>['required','min:5'],
            'description'=>'required','string',
        ]);

        Category::create([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        return redirect('/create')->with('status','category-created');
    }
    public function edit(int $id){
        $category=Category::findOrFail($id);
        return view('category.edit',compact('category'));
    }
    public function update(Request $request,int $id){
        $request->validate([
            'name'=>['required','min:5'],
            'description'=>'required','string',
        ]);

        $category=Category::findOrFail($id);
        $category->update([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        return redirect('/categories')->with('status','category-updated');
    }
    public function destroy(int $id){
        $category=Category::findOrFail($id);
        $category->delete();
        return redirect('/categories')->with('status','category-deleted');
    }
}
