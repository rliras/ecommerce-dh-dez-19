<?php

class ItemCarrinho
{
    private $livro;
    private $quantidade;

    pulblic function __construct( Livro $xLivro, int $xQuantidade)
    {
        $this->livro = $xLivro;
        $this->quantidade = $xQuantidade;
    }

    public function calcularSubtotal(): float
    {
        return $this->quantidade * $this->livro->getValor();
    }
}