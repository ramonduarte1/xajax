<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoginController
 *
 * @author usuario
 */
class LoginController {

    public function logar($form) {
        $xajax_response = new xajaxResponse();

        if ($form['login'] == 'master' && $form['senha'] == 'master') {
            //$xajax_response->alert('login com sucesso!');
            $xajax_response->call('xajax_menuPaciente');
        }else{
            $xajax_response->alert('usuario ou senha invalido');
        }


        return $xajax_response;
    }

}
