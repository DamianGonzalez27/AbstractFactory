<?php namespace Factorys;

use Interfaces\Principal;
use Implement\Calculadora;
use Implement\Concatenador;
use Implement\Saludos;

class Objeto implements Principal
{
    public function makeCalculadora()
    {
        return new Calculadora();
    }
    public function makeSaludos()
    {
        return new Saludos();
    }
    public function makeConcatenador()
    {
        return new Concatenador();
    }
}