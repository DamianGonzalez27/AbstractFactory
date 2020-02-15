<?php 
require __DIR__."/vendor/autoload.php";

use Factorys\Objeto;

class Client
{
    private $params;

    public function __construct($params)
    {
        $this->params = $params;
    }

    public function getParams()
    {
        print_r($this->params);
    }

    public function calculadoraSuma()
    {
        $objeto = new Objeto;
        $suma = $objeto->makeCalculadora();
        print($suma->suma($this->params[1], $this->params[2]). PHP_EOL);
    }

    public function getPath()
    {
        print(__DIR__);
    }
}

$app = new Client($argv);

$app->calculadoraSuma();