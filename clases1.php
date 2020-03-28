<?php

class Persona{

    //ATRIBUTOS

    public $nombre;
    public $apellido;
    public $ciudad;
    public $nacimiento;

    //CONSTRUCTOR
    public function __construct(){

        $this->ciudad= "Medellin";

    }

    //METODOS

    public function calcularEdad($nacimiento){

        $edad=2020-$nacimiento;
        return($edad);
    }

}


?>