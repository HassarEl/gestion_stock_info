<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Inventory;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inventorys = Inventory::all();
        return view('layouts.inventory.index', compact('inventorys'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('layouts.inventory.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $inventory = new Inventory();
        $product = Product::find($request->product);
    
        $inventory->num_marche = $request->num;
        $inventory->date_enrg = now();
        $inventory->qte = $request->qte;
        $product->qte = $request->qte;
        $inventory->designation = $request->designation;
        $inventory->product_id = $request->product;
        $inventory->save();
        $product->save();

        return redirect()->route('inventory')->with('message', 'Inventory has been added Seccessfuly');

    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $inventory = Inventory::find($id);
        return view('layouts.inventory.show', compact('inventory'));
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $inventory = Inventory::find($id);
        $products = Product::all();
        return view('layouts.inventory.edit', compact('inventory', 'products'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
    {
        $inventory = Inventory::find($id);
        $product = Product::find($inventory->product_id);
        $inventory->num_marche = $request->num;
        $inventory->updated_at = now();
        $inventory->date_enrg = now();
        $product->qte =  $product->qte - $inventory->qte;
        $product->qte =  $product->qte + $request->qte;
        $inventory->qte = $request->qte;
        $inventory->designation = $request->designation;
        $inventory->product_id = $request->product;
        $inventory->save();
        $product->save();
        return redirect()->route('inventory')->with('message', 'Inventory has been updated Seccessfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        //
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $inventorys = Inventory::where('num_marche', 'like', '%' . $query . '%')
            ->orWhere('designation', 'like', '%' . $query . '%')
            ->orWhere('date_enrg', 'like', '%' . $query . '%')
            ->get();
        return view('layouts.inventory.index', compact('inventorys'))->with('search_results', true);
    }
}
