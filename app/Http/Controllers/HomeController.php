<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dolci;
use App\Models\Vetrina;

class HomeController extends Controller
{
    public function index(){
        $vetrina = Vetrina::all();
        
        $array = [
            'vetrina' => $vetrina,
        ];

        return view('welcome',$array);
    }
}
