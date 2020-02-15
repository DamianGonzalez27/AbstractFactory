<?php 
require __DIR__."/vendor/autoload.php";

use Factorys\Objeto;

class Client
{
    public $params;
    public $method;
    public $paramA;
    public $paramB;

    public function __construct($params)
    {
        $this->params = $params;
        $this->method = $params[1];
        $this->paramA = $params[2];
        if(isset($params[3]))
        {
            $this->paramB = $params[3];
        }
        
    }

    public function init()
    {
        switch($this->method)
        {
            case 'suma':
                return $this->calculadoraSuma($this->paramA, $this->paramB);
            break;

            case 'resta':
                return $this->calculadoraResta($this->paramA, $this->paramB);
            break;

            case 'hola':
                return $this->saludosHola($this->paramA);
            break;

            case 'adios':
                return $this->saludosAdios($this->paramA);
            break;

            case 'concatenar':
                return $this->concatenador($this->paramA, $this->paramB);
            break;
        }
    }
    private function calculadoraSuma($paramA, $paramB)
    {
        $objeto = new Objeto;
        $suma = $objeto->makeCalculadora();
        print($suma->suma($paramA, $paramB). PHP_EOL);
    }
    private function calculadoraResta($paramA, $paramB)
    {
        $objeto = new Objeto;
        $resta = $objeto->makeCalculadora();
        print($resta->resta($paramA, $paramB). PHP_EOL);
    }

    private function saludosHola($name)
    {
        $objeto = new Objeto;
        $hola = $objeto->makeSaludos();
        print($hola->saludar($name). PHP_EOL);
    }
    private function saludosAdios($name)
    {
        $objeto = new Objeto;
        $hola = $objeto->makeSaludos();
        print($hola->despedir($name). PHP_EOL);
    }
    private function concatenador($paramA, $paramB)
    {
        $objeto = new Objeto;
        $concatenaor = $objeto->makeConcatenador();
        print($concatenaor->concatenar($paramA, $paramB). PHP_EOL);
    }
}

$app = new Client($argv);

$app->init();