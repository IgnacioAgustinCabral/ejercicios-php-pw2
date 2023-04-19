<?php

class Saludar
{
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludoFormal($horario)
    {
        if ($horario >= 5 && $horario < 13) {
            return "Buenos días " . $this->nombre . " " . $this->apellido;
        } else if ($horario >= 13 && $horario < 21) {
            return "Buenas tardes " . $this->nombre . " " . $this->apellido;
        } else {
            return "Buenas noches " . $this->nombre . " " . $this->apellido;
        }
    }

    public function saludoInformal($horario)
    {
        if ($horario >= 5 && $horario < 13) {
            return "¡Hola " . $this->nombre . "! " . "que tengas un " . "buen día";
        } else if ($horario >= 13 && $horario < 21) {
            return "¡Hola " . $this->nombre . "! " . "que tengas una " . "buena tarde";
        } else {
            return "¡Hola " . $this->nombre . "! " . "que tengas una " . "buena noche";
        }
    }
}