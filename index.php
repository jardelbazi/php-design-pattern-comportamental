<?php

use Curso\DesignPattern\CalculadoraDeImpostos;
use Curso\DesignPattern\Impostos\Iss;
use Curso\DesignPattern\Orcamento;

require 'vendor/autoload.php';

## --------------------------------
## STRATEGY 
## --------------------------------
$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

$calculadora->calcula($orcamento, new Iss());