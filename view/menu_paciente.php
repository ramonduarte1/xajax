<?php

function menuPaciente() {
    $html = '<h3>Menu Paciente</h3> 
            pesquisa por nome:<input id="nome" name="nome" type="text" size="10"> <br>
            <input type="submit" value="buscar" onclick="xajax_mostrarPacientes()">
            <input type="submit" value="novo" onclick = "xajax_novoPaciente()">
            <input type="submit" value="apagar" onclick = "xajax_apagarPaciente()">
             <div id="opcao_paciente"></div>';

    $obj_response = new xajaxResponse();

    $obj_response->assign("conteudo", "innerHTML", $html);

    return $obj_response;
}

function mostrarPacientes() {
    $p = new Paciente();
    $pacientes = $p->retornaPacientes();
    // var_dump($pacientes);


    $html .= " <h3>lista Paciente</h3>
                  <table>
                  <tr>
                        <th>id</th>
                        <th>nome</th>
                        <th>cpf</th>
                  </tr>";
    foreach ($pacientes as $paciente) {
        $html .= "<tr>
                      <td>" . $paciente['id'] . "</td>
                      <td>" . $paciente['nome'] . "</td>
                      <td>" . $paciente['cpf'] . "</td>
                  </tr>";
    }
    $html .= "</table>";

    $obj_response = new xajaxResponse();

    $obj_response->assign("opcao_paciente", "innerHTML", $html);

    return $obj_response;
}

function novoPaciente() {
    $html = <<<HTML
           <h3>novo paciente</h3>
             <form id="formularioPaciente">
               <table>
                    <tr>
                        <td>Id</td>
                        <td><input type="text" name="id" id="id" size="5" ></td>
                    </tr>
                    <tr>
                        <td>Nome</td>
                        <td><input type="text" name="nome" id="nome" size="15"></td>
                    </tr>
                    <tr>
                        <td>Cpf</td>
                        <td><input type="text" name="cpf" id="cpf" size="15"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="button" value="salvar" onclick="xajax_salvarPaciente(xajax.getFormValues('formularioPaciente'))"></td>
                    </tr>
               </table>
             </form>
HTML;

    $obj_response = new xajaxResponse();

    $obj_response->assign("opcao_paciente", "innerHTML", $html);

    return $obj_response;
}

function apagarPaciente($form) {
        $p = new Paciente();
    $pacientes = $p->retornaPacientes();
    // var_dump($pacientes);


    $html .= " <h3>lista Paciente</h3>
                  <table>
                  <tr>
                        <th>id</th>
                        <th>nome</th>
                        <th>cpf</th>
                  </tr>";
    foreach ($pacientes as $paciente) {
        $html .= "<tr>
                      <td>" . $paciente['id'] . "</td>
                      <td>" . $paciente['nome'] . "</td>
                      <td>" . $paciente['cpf'] . "</td>
                      <td><input type='checkbox' name='pacientes[]' value=" . $paciente['id'] . "></td>
                  </tr>";
    }
    $html .= "<tr> <td><input type='button' value='apagar'></td></tr></table>";

    $obj_response = new xajaxResponse();

    $obj_response->assign("opcao_paciente", "innerHTML", $html);

    return $obj_response;
}
