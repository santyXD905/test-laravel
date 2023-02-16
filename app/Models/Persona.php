<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    public $nombre,$sexo,$edad;

    //metodo constructor

    public function __construct(string $nombre,$sexo,$edad){

        $this->nombre = strtolower($nombre);
        $this->sexo = strtolower($sexo);

    }
    

    public function setNombre($nombre){
        $this->nombre= strtolower($nombre);
    }

    public function getNombre(){
        return ucwords($this->nombre);
    }

    public function getSexo(){
        return ucwords($this->sexo);
    }

    public function setSexo($sexo){
        $this->sexo = strtolower($sexo);
    }



}

