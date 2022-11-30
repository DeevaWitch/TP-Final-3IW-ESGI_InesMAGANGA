<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TypeController extends Controller
{
    public function index(){
        $types = DB::table('types')
                ->join('categories', 'types.id_category', '=', 'categories.id_category')
                ->select('types.*', 'categories.name_category')
                ->get();
        return view('types_view.index',compact('types'));
    }

    public function create(){
        $categories = Category::all();
        return view('types_view.create', compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'name_type' => 'required',
            'id_category' => 'required'
        ]);
        $type = new Type([
            'name_type' => $request->get('name_type'),
            'id_category' => $request->get('id_category')
        ]);
        $type->save();
        return redirect('/types');
    }

    public function edit($id){
        $type = Type::findOrFail($id);
        $categories = Category::all();
        return view('types_view.edit', compact('type'), compact('categories'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name_type' => 'required',
            'id_category' => 'required'
        ]);
        $type = Type::findOrFail($id);
        $type->name_type = $request->get('name_type');
        $type->id_category = $request->get('id_category');
        $type->update();
        return redirect('/types');
    }

    public function destroy($id){
        $type = Type::findOrFail($id);
        $type->delete();
        return redirect('/types');
    }
}
