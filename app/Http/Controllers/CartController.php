<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cart.index');
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
        
       $duplicata= Cart::search(function ($cartItem, $rowId) use ($request) {
            return $cartItem->id == $request->Produits_id;
        });
        // si le panier n'est pas vide
        if ($duplicata->isNotEmpty()){
            //return redirect()->route('acceuil')->with('success', 'le produit à déjà été ajouter.'); //pour nous rediriger sur la page acceuil avec un message
            return redirect()->route('cart.index')->with('success', 'le produit à déjà été ajouter.');
        }

        $Produit= Produits::find($request->Produits_id);
      Cart::add($Produit->id,$Produit->titre,1,$Produit->prix)->associate('App\Produits');
      return redirect()->route('cart.index')->with('success', 'produits ajouter avec succès.');    
      
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
    public function destroy(string $rowId)
    {
        Cart::remove($rowId);
        return back()->with('succes','le produit à été supprimer.');
    }
}
