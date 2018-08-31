<?php
ini_set('display_errors', true);
require './util/autoload.php';
require './lib/xajax_core/xajax.inc.php';
require './view/login.php';
require './view/menu_paciente.php';
require './util/XajaxUtil.php';

session_start();
$_SESSION['paciente'][1]['id'] = 1;
$_SESSION['paciente'][1]['nome'] = 'ramon';
$_SESSION['paciente'][1]['cpf'] = '0124545';

//var_dump($_SESSION);
$xajaxUtilitario = new XajaxUtil();
$xajax_js = $xajaxUtilitario->getXajax_js();

?>
<html>
    <head>
        <?php
        echo $xajax_js;
        ?>
    </head>
    <body onload="xajax_menuPaciente();">
        <div id="pagina">
            <div id="conteudo">
                <noscript>
                <?php
                echo
                '<fieldset>
                    <h3>Seu navegador está com o JavaScript desativado, por favor ative para o melhor funcionamento do sistema.</h3>
                    Depois de ativar o JavaScript clique <a href=\'index.php\'>aqui</a>.
                </fieldset>';
                ?>
                </noscript>
            </div>
        </div>
    </body>
</html>

