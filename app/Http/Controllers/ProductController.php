<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index () {
        $subjudul  = 'katalog lengkap';
        $products = Product::all();

        return view('products.index', compact(['subjudul', 'products']));
    }

    public function create () {
        $subjudul  = 'tambah katalog';

        return view('products.create', compact(['subjudul']));
    }

    public function store (Request $request) {
        Product::create($request->all());

        return redirect('/products');
    }

    public function edit ($id){
        $subjudul  = 'edit katalog';

        $product = Product::find($id);

        return view('products.edit', compact(['subjudul', 'product']));
    }

    public function update (Request $request, $id){
        $product = Product::find($id);

        $product->update($request->all());

        return redirect('/products');

    }

    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        return redirect("/products");
    }
}
