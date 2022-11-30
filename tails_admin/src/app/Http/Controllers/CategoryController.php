<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('categories_view.index', compact('categories'));
    }

    public function create() {
        return view('categories_view.create');
    }

    public function store(Request $request){
        $request->validate([
            'name_category' => 'required'
        ]);
        $category = new Category([
            'name_category' => $request->get('name_category')
        ]);
        $category->save();
        return redirect('/categories');
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('categories_view.edit', compact('category'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name_category' => 'required'
        ]);
        $category = Category::findOrFail($id);
        $category->name_category = $request->get('name_category');
        $category->update();
        return redirect('/categories');
    }

    public function destroy($id){
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/categories');
    }
}
