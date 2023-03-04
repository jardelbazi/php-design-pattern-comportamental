<?php

use Curso\DesignPattern\CalculadoraDeDescontos;
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

# --------------------------------
## CHAIN OF RENSPONSIBILITY // CADEIA DE RESPONSABILIDADES
## --------------------------------

$orcamento = new Orcamento();
$orcamento->valor = 2;
$orcamento->qtdItens = 5;

$calculadora = new CalculadoraDeDescontos();
echo $calculadora->calculaDescontos($orcamento);