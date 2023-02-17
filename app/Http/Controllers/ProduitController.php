<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Produit;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     *  Response
    {
     */
    public function index(){

    
        $produits = Produit::all();
        return view('produits.index', ['produits' => $produits]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->validate([
            'nom_produit' => 'required | string | max:45 | min:3',
            'description' => 'max:255'
        ])){
            
            Produit::create($request->all());
        } else {
            return redirect()->back();
        }
        return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produit = Produit::find($id);
        return view('produits.show', [
            'id' => $id,
            'produit' => $produit
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * return Response
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
