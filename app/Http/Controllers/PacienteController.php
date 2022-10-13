<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{

    public function calcularIMC($peso, $altura){


        if(is_numeric($peso)){
            if(is_numeric($altura)){
                $calculoIMC = round($peso / ($altura * $altura), 2);
            } else {
            return "Informe valor válido";
        }

        return view ('clinica', [
            'calculoIMC' => $calculoIMC
        ]);
    }
}

}
