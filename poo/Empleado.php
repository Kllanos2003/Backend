<?php

require_once "Persona.php";
require_once "Info.php";

class Empleado extends Persona implements Info{
    private $numeroEmpleado;
    private $salario;

    public function __construct($nombre,$edad,$genero,$numeroEmpleado,$salario){
        
        parent:: __construct($nombre,$edad,$genero);
        $this->numeroEmpleado = $numeroEmpleado;
        $this ->salario = $salario;
    }


   
    public function getNumeroEmpleado()
    {
        return $this->numeroEmpleado;
    }

    
    public function setNumeroEmpleado($numeroEmpleado)
    {
        $this->numeroEmpleado = $numeroEmpleado;

        return $this;
    }

    
    public function getSalario()
    {
        return $this->salario;
    }

   
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    public function getInformacion(){
        return "Empleado : ".$this->getNombre()."<br>". "Numero empleado: ".$this->getNumeroEmpleado();

    }
    public function mostrarInformacion(){
        echo $this->getInformacion;

    }
}

    
?>
