<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class XajaxUtil {

    private $xajax;
    private $xajax_js;

    function __construct() {
        $this->xajax = new xajax();
        $this->xajax->configureMany(array("debug" => false, "javascript URI" => "/lib", "statusMessages" => true, "waitCursor" => true, "errorHandler" => true));
        //registra funcoes
        $this->xajax->register(XAJAX_FUNCTION, 'mostrarLogin');
        $this->xajax->register(XAJAX_FUNCTION, 'menuPaciente');
        $this->xajax->register(XAJAX_FUNCTION, 'mostrarPacientes');
        $this->xajax->register(XAJAX_FUNCTION, 'novoPaciente');
        $this->xajax->register(XAJAX_FUNCTION, 'apagarPaciente');
        //registra metodos
        $login = new LoginController();
        $this->xajax->register(XAJAX_FUNCTION, array("logar", $login, "logar"));//metodo
        
        $paciente = new PacienteController();
        $this->xajax->register(XAJAX_FUNCTION, array("salvarPaciente", $paciente, "salvarPaciente"));//metodo

        $this->xajax->processRequest();
        $this->xajax_js = $this->xajax->getJavascript("./lib");
    }

    function getXajax_js() {
        return $this->xajax_js;
    }

    function setXajax_js($xajax_js) {
        $this->xajax_js = $xajax_js;
    }

}
