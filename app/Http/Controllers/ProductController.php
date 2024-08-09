<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Product::all();
        return view('layouts.product.index', compact('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $produit = new Product();
        $produit->name = $request->name;
        $produit->designation = $request->designation;
        $produit->type = $request->type;
        $produit->price = $request->price;
        $produit->qte = $request->qte;

        $produit->save();

        return redirect()->route('produit')->with('message', 'Product has beed added Seccessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $produit = Product::find($id);
        return view('layouts.product.show', compact('produit'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $produit = Product::find($id);
        return view('layouts.product.update', compact('produit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Product::destroy($id);
        return redirect()->route('produit')->with('message', 'Product has been deleted');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $produits = Product::where('name', 'like', '%' . $query . '%')
            ->orWhere('designation', 'like', '%' . $query . '%')
            ->orWhere('type', 'like', '%' . $query . '%')
            ->get();
        return view('layouts.product.index', compact('produits'))->with('search_results', true);
    }

}
