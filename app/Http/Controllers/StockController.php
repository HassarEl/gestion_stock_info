<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use App\Models\Product;
use App\Http\Requests\StoreStockRequest;
use App\Http\Requests\UpdateStockRequest;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Product::where('qte', '>', 0)->get();
        return view('layouts.stocks.index', compact('produits'));
    }

    public function materiel()
    {
        $produits = Product::where('qte', '>', 0)->where('type', 'materiel')->get();
        return view('layouts.stocks.index', compact('produits'));
    }

    public function fourniture()
    {
        $produits = Product::where('qte', '>', 0)->where('type', 'fourniture')->get();
        return view('layouts.stocks.index', compact('produits'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStockRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStockRequest $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stock $stock)
    {
        //
    }
}
