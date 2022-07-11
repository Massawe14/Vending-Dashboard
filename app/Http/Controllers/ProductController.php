<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // GET
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // POST
        $request->validate([
            'product_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'slot_number' => 'required',
            'vending_id' => 'required',
            'category' => 'required'
        ]);

        return Product::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($product_id)
    {
        // GET Product by product id
        return Product::find($product_id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_id)
    {
        // UPDATE
        $product = Product::find($product_id);
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_id)
    {
        // DELETE
        return Product::destroy($product_id);
    }

    /**
     * Search for a name.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function search($category)
    {
        // SEARCH
        return Product::where('category', 'like', '%'.$category.'%')->get();
    }
}
