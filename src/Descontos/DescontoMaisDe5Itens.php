<?php

namespace Curso\DesignPattern\Descontos;

use Curso\DesignPattern\Orcamento;

class DescontoMaisDe5Itens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->qtdItens > 5)
            return $orcamento->valor * 0.1;

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}