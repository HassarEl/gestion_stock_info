<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::id())
        {
            if(Auth::user()->role=='admin')
            {
                $produit_stock = Product::where('qte', '>', 0)->count();
                $count_demmande_en_coure = Requests::where('status', 'like', 'en coure')->count();
                $count_demmande = Requests::count();
                return view('home', compact('count_demmande', 'count_demmande_en_coure', 'produit_stock'));
            } else if(Auth::user()->role=='user')
            {
                $produit = Product::all();
                return view('front', compact('produit'));
            }
        } else {
            $produit = Product::all();
            return view('front', compact('produit'));
        }
    }
    
    public function about()
    {
        return view('about');
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
