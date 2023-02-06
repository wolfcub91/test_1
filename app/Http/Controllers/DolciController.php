<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingredienti;
use App\Models\Dolci;
use App\Models\Ingredienti_dolci;

class DolciController extends Controller
{
    public function aggiungi_dolce(){

        $ingredienti = Ingredienti::all();
        $array = [
            'ingredienti' => $ingredienti,
        ];
    
        return view('admin.aggiungi_dolce',$array);
    }

    public function elimina_dolce($id){

        Dolci::find($id)->delete();

        return redirect()->route('dolci.visualizza');
    }



    public function update_dolce(Request $request){

        $dolce = Dolci::find($request->id_dolce);
        $dolce->nome = $request->nome;
        $dolce->save();

        Ingredienti_dolci::where('id_dolce', $request->id_dolce)->delete();

        foreach ($request->ingredienti as $ingrediente) {
            $ingredienti = new Ingredienti_dolci();
            $ingredienti->id_dolce = $dolce->id;
            $ingredienti->id_ingrediente = $ingrediente;
            $result = $ingredienti->save();
        }

        return redirect()->route('dolci.visualizza');
    }

    public function modifica_dolce($id){

        $dolce = Dolci::find($id);
        $ingredienti_all = Ingredienti::All();
        $lista_ingredienti = $dolce->ingredienti()->get();

        foreach ($lista_ingredienti as $value) {
            $lista_id_ingredienti[] = $value->id;
        }

        foreach ($ingredienti_all as $key => $value) {
                if (in_array($value->id,$lista_id_ingredienti)) {
                    $selected[] = 'selected';
                }else {
                    $selected[] = '';
                }
        }

        

        $array = [
            'dolce' => $dolce,
            'ingredienti' => $ingredienti_all,
            'selected' => $selected,
        ];
        return view('admin.modifica_dolce',$array);
    }


    public function salva_dolce(Request $request){

        $dolce = new Dolci();
        $dolce->nome = $request->nome;
        $result = $dolce->save();

        if ($result) {
            foreach ($request->ingredienti as $ingrediente) {
                $ingredienti = new Ingredienti_dolci();
                $ingredienti->id_dolce = $dolce->id;
                $ingredienti->id_ingrediente = $ingrediente;
                $result = $ingredienti->save();
            }
        }
        

        return redirect()->route('dolci.visualizza');
        
    }

    public function visualizza_dolci(){
        $lista_dolci = Dolci::all();
        
        foreach ($lista_dolci as $value) {
            $ingredienti[] = $value->ingredienti()->get();
        }

        $array = [
            'dolci' => $lista_dolci,
        ];
        return view('admin.visualizza_dolci',$array);
    }
    


}
