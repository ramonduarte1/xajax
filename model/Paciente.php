<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Paciente
 *
 * @author usuario
 */
class Paciente {

    private $id;
    private $nome;
    private $cpf;

    function __construct() {
        if (isset($_SESSION)) {
            session_start();
        }
    }

    function getId() {
        return $this->id;
    }

    function setId($id) {
        $this->id = $id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpf() {
        return $this->cpf;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function salvar() {
        $_SESSION['paciente'][$this->getId()]['id'] = $this->getId();
        $_SESSION['paciente'][$this->getId()]['nome'] = $this->getNome();
        $_SESSION['paciente'][$this->getId()]['cpf'] = $this->getCpf();

        return "Paciente registrado com sucesso";
    }

    function retornaPacientes() {
        $dados = array();

        foreach ($_SESSION['paciente'] as $key => $value) {
            array_push($dados, $value);
        }

        return $dados;
    }

}
