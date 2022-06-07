<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ads;
use App\Models\Vending;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ads::latest()->paginate(5);
        $vending = Vending::all();
        return view('livewire.user.ads-list-component', compact('ads','vending'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vending = Vending::all();
        return view('livewire.user.ads-component', compact('vending'));
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
            'ads_name' => 'required',
            'image' => 'required',
            'vending_id' => 'required',
        ]);

        $data = $request->input();

        try{
            $ads = new Ads();
            $ads->ads_name = $data['ads_name'];
            $ads->vending_id = $data['vending_id'];

            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $image_name = $file->getClientOriginalName();
                $filename = time().".".$image_name;
                $path = $file->store('uploads/ads', 'public');
                $ads->image = $path;
            }

            $ads->save();
            return redirect('/user/ads')->with('status',"Ads added successfully");
        }
        catch(Exception $e){
            return redirect('/user/ads')->with('failed',"Something went wrong");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $ads = Ads::find($vending_id);
        // return view('livewire.user.ads-component', compact('ads'))->layout('layouts.base');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ads = Ads::find($id);
        $vending = Vending::all();
        return view('livewire.user.edit-ads-component', compact('ads','vending'))->layout('layouts.base');
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
            $ads = Ads::find($id);
            $ads->ads_name = $data['ads_name'];
            $ads->vending_id = $data['vending_id'];

            if ($request->hasfile('image')) {
                $file = $request->file('image');
                $image_name = $file->getClientOriginalName();
                $filename = time().".".$image_name;
                $path = $file->store('uploads/ads', 'public');
                $ads->image = $path;
            }

            $product->update();
            return redirect('/user/adsList')->with('status',"Ads updated successfully");
        }
        catch(Exception $e){
            return redirect('/user/adsList')->with('failed',"Something went wrong");
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
            $ads = Ads::find($id);
            $ads->delete();
            return redirect('/user/adsList')->with('status',"Ads deleted successfully");
        }
        catch(Exception $e){
            return redirect('/user/adsList')->with('failed',"Something went wrong");
        }
    }
}
