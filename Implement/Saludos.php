<?php namespace Implement;

class Saludos
{
    public function saludar($name)
    {
        return 'Hola ' . $name;
    }

    public function despedir($name)
    {
        return 'Adios ' . $name;
    }
}