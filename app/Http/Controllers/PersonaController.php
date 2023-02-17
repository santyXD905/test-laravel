<?php

//php artisan make:controller nombreController

namespace App\Http\Controllers;

use App\Models\Persona; //importar clase

use Illuminate\Http\Request;

use App\Models\Argentino;

class PersonaController extends Controller
{
    public function primera(){

        $persona = new Persona("jorge","masculino",19); //instanciar objeto

        $argen = new Argentino("messi","masculino",40);
        $argen->setCopas(3);

        $argen->setSexo("marsc");
        
        return "el nombre de la persona es: ". $argen->getNombre() . " y es :" . $argen->getSexo() . " y tiene " . $argen->getCopas() . " copas";
    }

    public function segunda(){
        return "nouuu";
    }
    
}
