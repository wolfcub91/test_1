<?php

namespace App\Http\Controllers;

use App\Models\Vetrina;
use App\Models\Dolci;
use Illuminate\Http\Request;

class VetrinaController extends Controller
{
    public function visualizza_vetrina(){

        $dolci_vetrina = Vetrina::all();

        $array = [
            'dolci_vetrina' => $dolci_vetrina,
        ];

        return view('admin.visualizza_vetrina',$array);

    }


    public function aggiungi_vetrina($id){
        $dolce = Dolci::find($id);

        
        $array = [
            'dolce' => $dolce,
        ];

        return view('admin.aggiungi_vetrina',$array);
    }

    public function salva_vetrina(Request $request){

        $vetrina = new Vetrina();

        $vetrina->id_dolce = $request->id_dolce;
        $vetrina->prezzo = $request->prezzo;
        $vetrina->prezzo_nuovo = $request->prezzo;
        $vetrina->quantita = $request->quantita;

        $vetrina->save();

        return redirect()->route('vetrina.visualizza');
    }



}
