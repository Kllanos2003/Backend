<?php

class Persona
{
    private $nombre;
    private $edad;
    private $genero;

    public function __construct($nombre,$edad,$genero){
        $this ->nombre = $nombre;
        $this ->edad = $edad;
        $this -> genero = $genero;
    }

    
    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    
    public function getEdad()
    {
        return $this->edad;
    }

    
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

   
    public function getGenero()
    {
        return $this->genero;
    }

    
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }
}