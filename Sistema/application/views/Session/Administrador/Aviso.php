<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
  ===================================================================
  @Arquivo: Aviso
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>
  @Data:   13/01/2018
  @Projeto: La-Rose
  ===================================================================
 */
?>

<!DOCTYPE HTML>

<html lang="pt-br">


    <head>

        <title>La'Rose | Aviso</title>
        <meta name="author" content="Thiago Henrique Felix" >
        <meta name="keywords" content="agendamento,salão de beleza,salão,beleza">
        <meta charset="utf-8">
        <meta name="description" content="Sessão de funções para clientes">
        <meta name="viewport"content="width:device-width, initial-scale=1.">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style_session.css?v=18" >
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/css/style_index.css?v=5">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/css/style_cadastro.css?v=5">

        <!-- Icons | site = Fonts Awesome -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/pacotes/fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.css">



    </head>


    <body style="background: #fff; font-family: arial;">


        <div class="conteiner-display">
<!--====================================== DIALOG OPTIONS ===========================================-->
            <div class="conteiner-dialog" id="dialog-options" >

                <div class="dialog-header">
                      <div class="dialog-title font-site"><h1>Opções</h1></div>
                <div class="dialog-close"><i class="fa fa-times fa-lg"></i></div>
                </div>

                <div class="dialog-options">

                    <div class="dialog-item">
                        <ul>
                            <li id='titulo-aviso' style="color:#000000;" >A vida é uma festa</li>
                            <br/>
                          <li id="a-alterar" class="azul shadow-black"><i class="fa fa-pencil-alt"></i>Alterar</li>
                          <li id="a-remover" class="vermelho shadow-black"><i class="fa fa-trash-alt"></i>Deletar</li>

                        </ul>
                    </div>


                </div>
            </div>
<!--====================================== DIALOG OPTIONS ===========================================-->
<!--====================================== DIALOG CONFIRMATION ===========================================-->
            <div class="conteiner-dialog" id="dialog-confirmation" hidden="true" >

                <div class="dialog-header">
                      <div class="dialog-title font-site"><h1>Confirmação</h1></div>
                <div class="dialog-close"><i class="fa fa-times fa-lg"></i></div>
                </div>

                <div class="dialog-options">

                    <div class="dialog-item">
                        <ul>
                            <li style="color:#000000;">Tem certeza que deseja fazer isso ?</li>
                            <br/>
                            <li class="azul shadow-black"><i class="fa fa-pencil-alt"></i>Sim</li>
                            <li class="preto shadow-black"><i class="fa fa-trash-alt"></i>Não</li>

                        </ul>
                    </div>


                </div>
            </div>
<!--====================================== DIALOG CONFIRMATION ===========================================-->

        </div>




        <div class="conteiner">


            <div class="conteiner-header">

                <?php $this->load->view('header'); ?>



            </div>
            <div class="conteiner-aside">

                <button id="button-menu" >Menu</button>

                <aside>
                    <nav id="nav-aside" class="nav-aside hide-aside" >

                        <ul>
                            <a href="<?php echo base_url('/Administrador'); ?>"><li><i class="fa fa-home"></i><span>Inicio</span></li></a>
                            <a href="<?php echo base_url('/Administrador/Aviso'); ?>"><li class="selecionado"><i class="fa fa-exclamation-triangle"></i><span>Aviso</span></li></a>
                            <a href="#"><li><i class="fa fa-calendar-plus"></i><span>Agendar</span></li></a>
                            <a href="#"><li><i class="fa fa-history"></i><span>Histórico</span></li></a>
                            <a href="#"><li><i class="fa fa-cog"></i><span>Configurações</span></li></a>

                        </ul>

                    </nav>
                </aside>

            </div>
            <div class="conteiner-article">

                <!--==================================== ARTICLE =============================================== -->
                <article>

                    <div class="article">

                        <div class="header-article font-site" >
                            <h1  style="font-size: 1.4em;">Avisos</h1>
                        </div>

                        <div class="body-article">

                            <div id="conteiner-avisos">
                                <ul>
                                    <li onclick="avisoOpicoes('Aloha','www.google.com','www.yahoo.com')" >titulo do aviso ficará aquulo do aviso ficará aquulo do aviso ficará aqui</li>
                                    <li onclick="avisoOpicoes('Aloha','www.google.com','www.yahoo.com')" >titulo do aviso ficará aquulo do aviso ficará aquulo do aviso ficará aqui</li>
                                    <li onclick="avisoOpicoes('Aloha','www.google.com','www.yahoo.com')" >titulo do aviso ficará aquulo do aviso ficará aquulo do aviso ficará aqui</li>
                                    <li onclick="avisoOpicoes('Aloha','www.google.com','www.yahoo.com')" >titulo do aviso ficará aquulo do aviso ficará aquulo do aviso ficará aqui</li>
                                </ul>
                            </div>

                            <div id="conteiner-paginacao">
                                <ul>
                                    <a  href="#" ><li>1</li></a>
                                    <a  href="#" ><li>2</li></a>
                                    <a  href="#" ><li>3</li></a>
                                </ul>
                            </div>

                        </div>

                    </div>


                </article>
                <!--==================================== / ARTICLE =============================================== -->

                <!--==================================== CADASTRO =============================================== -->
                <article>

                    <div class="article">


                        <div class="header-article font-site" >
                            <h1  style="font-size: 1.4em;">Cadastro</h1>
                        </div>

                        <div class="body-article" id="cadastro-aviso">

                            <form action="" method="POST">
                            <div class="alerta" style="background:#000000;color:#fff;" ><i class="fa fa-exclamation-triangle fa-lg"></i><p> Todos os campos com o caracter (*) são obrigatórios</p></div>
                            <input class="textbox-aviso" type="text" placeholder="Titulo*">

                            <textarea class="textarea-aviso" placeholder="Mensagem*"></textarea>

                            <select name="destinario" class="select-aviso">
                              <option value="">Destinatario*</option>
                              <option value="Todos">Todos</option>
                              <option value="Cliente">Clientes</option>
                              <<option value="ADM">Administradores</option>
                            </select>

                            <div class="alerta" style="background:red;color:#fff;" ><i class="fa fa-exclamation-triangle fa-lg"></i><p>Aloha muchacho</p></div>

                            <button class="btn-aviso">Enviar</button>

                            </form>

                        </div>

                    </div>


                </article>
                <!--==================================== / CADASTRO =============================================== -->

            </div>

        </div>

        <div class="conteiner-footer">
            <?php $this->load->view('footer'); ?>
        </div>



        <!-- Scripts -->
        <!-- Jquery -->
        <script type="text/javascript" src="<?php echo base_url(); ?>/pacotes/jquery/jquery-3.2.1.js"></script>
        <!-- Menu -->
        <script type="text/javascript" src="<?php echo base_url(); ?>/js/javascript_menu.js"></script>


    </body>

    <script type="text/javascript">

        $("#button-menu").click(function () {

            var visibilidade = $(".nav-aside").is(":visible");

            if(visibilidade){ $(".nav-aside").addClass("hide-aside"); $(".nav-aside").removeClass("show-aside"); }//if
            else { $(".nav-aside").addClass("show-aside"); $(".nav-aside").removeClass("hide-aside"); }//else


        });

        function avisoOpicoes(titulo,linkAlterar,linkRemover){

            document.getElementById('titulo-aviso').innerHTML = titulo;
            document.getElementById('a-alterar').href = linkAlterar;
            document.getElementById('a-remover').href = linkRemover;

            $(".conteiner-display").show('slow');

        }//avisoOpcoes

        /* ---- DIALOG ----- */
        $(".dialog-close").click(function(){

            $(".conteiner-display").hide('slow');

        });

        $('#a-alterar').click(function(){

          $('#dialog-options').hide('slow');
          $('#dialog-confirmation').show('slow');

        });


    </script>


</html>
