<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequestsRequest;
use App\Http\Requests\UpdateRequestsRequest;

class RequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demmandes = Requests::all();
        return view('layouts.demmande.index', compact('demmandes'));
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

        $requests = new Requests();
        $requests->full_name = $request->fullname;
        $requests->entite = $request->entite;
        $requests->qte = $request->qte;
        $requests->date = $request->date;
        $requests->product_id = $request->produit;
        $requests->status = "en coure";

        $requests->save();

        return redirect()->route('home')->with('message', 'Request Has Been Added Seccessfuly');

    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $demmande = Requests::find($id);
        return view('layouts.demmande.show', compact('demmande'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Requests $requests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequestsRequest $request, Requests $requests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Requests $requests)
    {
        //
    }

    /**
     * La Modification da la qte
     */

     public function acc_dmd()
     {
         $demmandes = Requests::where('status', 'like', 'accepté')->get();
         return view('layouts.demmande.acc_dmd', compact('demmandes'));
     }

     public function accepte(Request $request, String $id)
     {
        $requests = Requests::find($id);
        $requests->status = "accepté";
        $id_prod = $requests->product_id;
        $produit = Product::find($id_prod);
        if($produit->qte == 0){
            return redirect()->route('demmande')->with('message_danger', 'Le Produit nexiste pas dans le stock');
        }else{
            $produit->qte = $produit->qte - $requests->qte;
            $requests->save();
            $produit->save();
            return redirect()->route('demmande')->with('message', 'La Demmande à ete accepter');
        }
     }

     public function refu_dmd()
     {
         $demmandes = Requests::where('status', 'like', 'refusé')->get();
         return view('layouts.demmande.acc_dmd', compact('demmandes'));
     }

     public function refu($id)
     {
        $requests = Requests::find($id);
        $requests->status = "refusé";
        $requests->save();
        return redirect()->route('demmande')->with('message_danger', 'La demmande à ete refusé');
     }

     public function search(Request $request)
    {
        $query = $request->input('query');
        $demmandes = Requests::where('full_name', 'like', '%' . $query . '%')
            ->orWhere('status', 'like', '%' . $query . '%')
            ->orWhere('entite', 'like', '%' . $query . '%')
            ->get();
        return view('layouts.demmande.index', compact('demmandes'))->with('search_results', true);
    }
}
