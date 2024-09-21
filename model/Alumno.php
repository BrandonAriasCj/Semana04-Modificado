<?php

require_once('Persona.php');

class Alumno extends Persona
{
    //Atributo
    private $_nota1;
    private $_nota2;

    //Metodos
    private function calcularPromedio()
    {
        return($this->_nota1 + $this->_nota2) / 2;
    }

    public function imprimirPromedio()
    {
        $this->imprimirDatos();
        echo 'Mi promedio es '.$this->calcularPromedio().'<br>';
        echo '<br>';
        echo '<br>';
    }

    //GETTERS Y SETTERS
    public function getNota1()
    {
        return $this->_nota1;
    }

    public function setNota1($nota1)
    {
        $this->_nota1 = $nota1;
    }

    public function getNota2()
    {
        return $this->_nota2;
    }

    public function setNota2($nota2)
    {
        $this->_nota2 = $nota2;
    }
}

?>