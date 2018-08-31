<?php

function mostrarLogin() {
    $obj_response = new xajaxResponse();
    
    $html = '
        <h3>Login</h3>
        <form id="form" name="form">
        Nome<input type="text" id="login" name="login" /><br>
        Senha<input type="password" id="senha" name="senha" /><br>
        <input type="button" onclick="xajax_logar(xajax.getFormValues(\'form\'))" value="logar"/><br>
        </form>';
    $obj_response->assign("conteudo", "innerHTML", $html);
    return $obj_response;
}
