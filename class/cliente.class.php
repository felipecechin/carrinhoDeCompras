<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cliente
 *
 * @author Alunos
 */
class cliente {
    private $nome,$endereco,$cpf;
    
    function __construct($nome, $endereco, $cpf) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cpf = $cpf;
    }
    function getNome() {
        return $this->nome;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCpf() {
        return $this->cpf;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }


}
