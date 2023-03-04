<?php

namespace Curso\DesignPattern\Impostos;

use Curso\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;

}