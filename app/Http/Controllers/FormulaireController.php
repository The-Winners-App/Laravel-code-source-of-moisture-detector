<?php

namespace App\Http\Controllers;

use App\Models\Formulaire;
use Illuminate\Http\Request;

class FormulaireController extends Controller
{
    public function modify(){
        $produits = Formulaire::first();
        return view('formulaire-modification.modifier_produit', compact('produits'));
    }

    public function update_traitement(Request $request){
        $request->validate([
            'photo' => 'required',
            'title' => 'required',
            'mini_description' => 'required',
            'description' => 'required',
            'adv_and_carac' => 'required',
            'manual' => 'required',
        ]);

        $product = Formulaire::first();

        $product->photo = $request->photo;
        $product->title = $request->title;
        $product->mini_description = $product->mini_description;
        $product->description = $request->description;
        $product->adv_and_carac = $request->adv_and_carac;
        $product->manual = $request->manual;

        $product->update();

        return redirect('/produit')->with('status', 'la page a ete modifier avec success veillez actualise merci');
    }
}
