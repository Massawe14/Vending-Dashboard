<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductsCategory;
use App\Models\Vending;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::latest()->paginate(5);
        $category = ProductsCategory::all();
        $vending = Vending::all();
        return view('livewire.user.product-list-component', compact('product','category','vending'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = ProductsCategory::all();
        $vending = Vending::all();
        return view('livewire.user.product-component', compact('category','vending'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'image' => 'required',
            'vending_id' => 'required',
            'category' => 'required'
        ]);

        $data = $request->input();

        try{
            $product = new Product();
            $product->product_id = $data['product_id'];
            $product->name = $data['name'];
            $product->price = $data['price'];
            $product->quantity = $data['quantity'];
            $product->slot_number = $data['slot_number'];
            $product->vending_id = $data['vending_id'];
            $product->category = $data['category'];

            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $image_name = $file->getClientOriginalName();
                $filename = time().".".$image_name;
                $path = $file->store('uploads/products', 'public');
                $product->image = $path;
            }

            $product->save();
            return redirect('/user/product')->with('status',"Product added successfully");
        }
        catch(Exception $e){
            return redirect('/user/product')->with('failed',"Something went wrong");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($vending_id)
    {
        $product = Product::find($vending_id);
        return view('livewire.user.vending-product-component', compact('product'))->layout('layouts.base');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $category = ProductsCategory::all();
        $vending = Vending::all();
        return view('livewire.user.edit-product-component', compact('product','category','vending'))->layout('layouts.base');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->input();

        try {
            $product = Product::find($id);
            $product->product_id = $data['product_id'];
            $product->name = $data['name'];
            $product->price = $data['price'];
            $product->quantity = $data['quantity'];
            $product->slot_number = $data['slot_number'];
            $product->vending_id = $data['vending_id'];
            $product->category = $data['category'];

            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $image_name = $file->getClientOriginalName();
                $filename = time().".".$image_name;
                $path = $file->store('uploads/products', 'public');
                $product->image = $path;
            }

            $product->update();
            return redirect('/user/productList')->with('status',"Product updated successfully");
        }
        catch(Exception $e){
            return redirect('/user/productList')->with('failed',"Something went wrong");
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $product = Product::find($id);
            $product->delete();
            return redirect('/user/productList')->with('status',"Product deleted successfully");
        }
        catch(Exception $e){
            return redirect('/user/productList')->with('failed',"Something went wrong");
        }
    }
}
