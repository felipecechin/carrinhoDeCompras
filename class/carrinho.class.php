<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of carrinho
 *
 * @author Alunos
 */
class carrinho {

    private $carrinho;

    function adicionarNoCarrinho($produto) {
        $this->carrinho[] = (object) $produto;
    }

    function removerNoCarrinho($produto) {
        foreach ($this->carrinho as $chave => $valor) {
            if ($valor == $produto) {
                unset($this->carrinho[$chave]);
            }
        }
    }

    function calcularTotal() {
        $soma = 0;
        foreach ($this->carrinho as $valor) {
            $soma += $valor->getPreco();
        }
        echo 'O valor total é: R$ ' . number_format($soma, 2, ',', '.');
    }

}
