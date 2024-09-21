<?php

class Persona 
{
    //Atributos
    private $_nombre;
    private $_apellidos;

    //Metodos
    protected function imprimirDatos() 
    {
        echo 'Mi nombre es '.$this->_nombre.''.$this->_apellidos.'<br>';
        echo '<br>';
        echo '<br>';
    }

    //GETTERS Y SETTERS
    public function getNombre() {
        return $this->_nombre;
    }

    public function setNombre($nombre) {
        $this->_nombre = $nombre;
    }
        
    public function getApellidos() 
    {
        return $this->_apellidos;
    }
        
    public function setApellidos($apellidos)
    {
        return $this->_apellidos = $apellidos;
    }       


}

?>