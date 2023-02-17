<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Persona;

class Argentino extends Persona //herencia
{
    public $copas;

    public function setCopas($copas){
        $this->copas = $copas;
    }

    public function getCopas(){
        return $this->copas;
    }

    public function setSexo($sexo){
        parent::setSexo($sexo); //extender una funcion
        $this->sexo =$this->sexo .  " (hombre)";
    }

    public function getSexo(){
        return $this->sexo;
    }

    

}
