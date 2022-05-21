<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vending;

class VendingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vending = Vending::latest()->paginate(5);
        return view('livewire.user.vending-list-component', compact('vending'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('livewire.user.vending-component');
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
            'vending_id' => 'required',
            'name' => 'required',
            'location' => 'required'
        ]);

        $data = $request->input();

        try{
            $vending = new Vending();
            $vending->vending_id = $data['vending_id'];
            $vending->name = $data['name'];
            $vending->location = $data['location'];

            $vending->save();
            return redirect('/user/vending')->with('status',"Vending added successfully");
        }
        catch(Exception $e){
            return redirect('/user/vending')->with('failed',"Something went wrong");
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vending = Vending::find($id);
        return view('livewire.user.edit-vending-component', compact('vending'))->layout('layouts.base');
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
            $vending = Vending::find($id);
            $vending->vending_id = $data['vending_id'];
            $vending->name = $data['name'];
            $vending->location = $data['location'];

            $vending->update();
            return redirect('/user/vendingList')->with('status',"Vending updated successfully");
        }
        catch(Exception $e){
            return redirect('/user/vendingList')->with('failed',"Something went wrong");
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
            $vending = Vending::find($id);
            $vending->delete();
            return redirect('/user/vendingList')->with('status',"Vending deleted successfully");
        }
        catch(Exception $e){
            return redirect('/user/vendingList')->with('failed',"Something went wrong");
        }
    }
}
