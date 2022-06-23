<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $shoppingList = Purchase::all();
       return view('app', ['shoppingList' => $shoppingList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the item
        $request->validate([
            'item' => 'required|max:100',
            'quantity' => 'numeric'
        ]);

        // store the data
        Purchase::insert([
            'item' => $request->item,
            'quantity' => $request->quantity
        ]);

        // redirect
        return redirect('/')->with('status', 'Item added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function show(Purchase $purchase)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function edit(Purchase $purchase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

         // validate the item
         $request->validate([
            'item' => 'required|max:100',
            'quantity' => 'numeric'
        ]);

        // update the data
        Purchase::where('id', $id)->update([
            'item' => $request->item,
            'quantity' => $request->quantity
        ]);

        // redirect
        return redirect('/')->with('status', 'Item updated!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Purchase  $purchase
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        // delete the item
         Purchase::where('id', $id)->delete();

        // redirect
        return redirect('/')->with('status', 'item removed!');
    }
}
