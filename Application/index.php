<?php
/*
===================================
* Author: Thiago Henrique Felix   *
* Date: 2017/12/28                *
* Version: 0.2                    *
* Arquivo: Arquivo responsavel    *
* pelo gerenciamento do           *
* paginas do sistema              *
================================= */

$url_sistema = 'localhost/La-Rose/Aplicação';
$pagina = strtoupper(filter_input(INPUT_GET,'p'));


/*===== Gerenciamento do Sistema =====*/

if($pagina === null):
    
    include_once './php/Controllers/InicioController.php';

    $inicio = new InicioController();
    
    $inicio->index();
    
    
    elseif(strcmp($pagina,'LOGIN') === 0):
    
        include_once 'php/Controllers/LoginController.php';

        $login = new LoginController();

        $login->index();

    elseif(strcmp($pagina,'CADASTRO') === 0):
    
        include_once 'php/Controllers/CadastroController.php';
        
        $cadastro = new CadastroController();
        
        $cadastro->index();
    
else:
    
    //Página não encontrada
    include_once 'php/Controllers/ErrorController.php';
    
    $error = new ErrorController();
    
    $error->error_404();

endif;
