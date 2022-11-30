<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\returnSelf;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table('products')
                    ->join('types','products.id_type', '=', 'types.id_type')
                    ->join('categories','categories.id_category', '=', 'types.id_category')
                    ->select('products.*', 'categories.name_category', 'types.name_type')
                    ->get();
        return view('products_view.index',compact('products'));
    }

    public function create(){
        $types = Type::all();
        return view ('products_view.create', compact('types'));
    }

    public function store(Request $request){
        $request->validate([
            'name_product' => 'required',
            'desc_product' => 'nullable',
            'price_product' => 'required',
            'id_type' => 'required'
        ]);
        $product = new Product([
            'name_product' => $request->get('name_product'),
            'desc_product' => $request->get('desc_product'),
            'price_product' => $request->get('price_product'),
            'id_type' => $request->get('id_type')
        ]);
        $product->save();
        return redirect('/products');
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        $types = Type::all();
        return view('products_view.edit', compact('product'), compact('types'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name_product' => 'required',
            'desc_product' => 'nullable',
            'price_product' => 'required',
            'id_type' => 'required'
        ]);
        $product = Product::findOrFail($id);
        $product->name_product = $request->get('name_product');
        $product->desc_product = $request->get('desc_product');
        $product->price_product = $request->get('price_product');
        $product->id_type = $request->get('id_type');
        $product->update();
        return redirect('/products');
    }

    public function destroy($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect('/products');
    }
}
