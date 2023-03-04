<?php

namespace Curso\DesignPattern;

use Curso\DesignPattern\Descontos\DescontoMais500Reais;
use Curso\DesignPattern\Descontos\DescontoMaisDe5Itens;
use Curso\DesignPattern\Descontos\SemDesconto;

class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDescontos = new DescontoMaisDe5Itens(
            new DescontoMais500Reais(
                new SemDesconto()
            )
        );

        return $cadeiaDescontos->calculaDesconto($orcamento);
    }
}

