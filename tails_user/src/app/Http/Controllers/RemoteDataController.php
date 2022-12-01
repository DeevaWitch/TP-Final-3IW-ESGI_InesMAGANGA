<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RemoteDataController extends Controller
{
    public function getRemoteProducts(){
       
        $products = Http::get('http://tails_admin/remoteProducts');
        $data = json_decode($products->body(), true);
        return view('products.index', compact('data'));
    }
}
