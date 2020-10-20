<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'campo' => 'required|string',
            'valor' => 'required|string',
        ]);

        if ($validator->fails()) {
            return view('consultar', [
                'products' => [],
                'stores' => Store::all(),
            ]);
        }

        $products = Product::where($request->campo, 'like', "%$request->valor%")->get();

        return view('consultar', [
            'products' => $products,
            'stores' => Store::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registrar', [
            'categories' => Category::all(),
            'stores' => Store::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'code' => 'required|string|max:3',
            'name' => 'required|string',
            'category_id' => 'required|integer',
            'store_id' => 'required|integer',
            'description' => 'required|string',
            'stock' => 'required|integer',
            'price' => 'required|integer',
        ]);

        Product::create([
            'code' => $valid['code'],
            'name' => $valid['name'],
            'category_id' => $valid['category_id'],
            'store_id' => $valid['store_id'],
            'description' => $valid['description'],
            'stock' => $valid['stock'],
            'price' => $valid['price'],
        ])->save();

        return $this->create();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('editar')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $valid = $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
        ]);

        $product->update([
            'name' => $valid['name'],
            'description' => $valid['description'],
            'price' => $valid['price'],
        ]);

        return redirect('/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        
        return redirect('/products');
    }
}
