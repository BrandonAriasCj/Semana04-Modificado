<?php

require_once('Persona.php');

class Docente extends Persona
{
    //Atributos
    private $_tarifa;
    private $_horas;

    //Metodos:
    private function calcularSueldo()
    {
        return $this->_tarifa * $this->_horas;
    }

    public function imprimirSueldo()
    {
        $this->imprimirDatos();
        echo 'Mi sueldo es '.$this->calcularSueldo().'<br>';
        echo '<br>';
        echo '<br>';
    }

    //GETTERS Y SETTERS
    public function getTarifa() { return $this->_tarifa;
    }
    
    public function setTarifa($tarifa) {
        $this->_tarifa = $tarifa;
    }
    
    public function getHoras() { return $this->_horas;
    }
    
    public function setHoras($horas) {
    $this->_horas = $horas;
    }
}

?>