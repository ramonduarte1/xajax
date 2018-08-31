<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PacienteController
 *
 * @author usuario
 */
class PacienteController {

    private $objResponse;

    function __construct() {
        $this->objResponse = new xajaxResponse(); //instancia o xajax
    }

    public function salvarPaciente($form) {
        $paciente = new Paciente();
        $paciente->setId($form['id']);
        $paciente->setNome($form['nome']);
        $paciente->setCpf($form['cpf']);
        $result = $paciente->salvar();
        
        $this->objResponse->alert($result);
        return $this->objResponse;
    }

}
//teste