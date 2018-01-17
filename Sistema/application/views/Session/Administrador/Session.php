<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
  ===================================================================
  @Arquivo: Session
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>
  @Data:   13/01/2018
  @Projeto: La-Rose
  ===================================================================
 */
?>

<!DOCTYPE HTML>

<html lang="pt-br">


    <head>

        <title>La'Rose | Session</title>
        <meta name="author" content="Thiago Henrique Felix" >
        <meta name="keywords" content="agendamento,salão de beleza,salão,beleza">
        <meta charset="utf-8">
        <meta name="description" content="Sessão de funções para clientes">
        <meta name="viewport"content="width:device-width, initial-scale=1.">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style_session.css?v=11" >
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>/css/style_index.css?v=5">


        <!-- Icons | site = Fonts Awesome -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/pacotes/fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.css">



    </head>
    <body style="background: #fff; font-family: arial;">

        <div class="conteiner">


            <div class="conteiner-header">

                <?php $this->load->view('header'); ?>



            </div>
            <div class="conteiner-aside">

                <button id="button-menu" >Menu</button>

                <aside>
                    <nav id="nav-aside" class="nav-aside hide-aside" >

                        <ul>
                            <a href="<?php echo base_url('/Administrador'); ?>"><li class="selecionado"><i class="fa fa-home"></i><span>Inicio</span></li></a>
                            <a href="<?php echo base_url('/Administrador/Aviso'); ?>"><li><i class="fa fa-exclamation-triangle"></i><span>Aviso</span></li></a>
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
                            <h1>Seja Bem-Vindo(a)</h1>
                        </div>

                        <div class="body-article">
                            <p>Aqui na àrea do cliente, você pode escolher o melhor horario para marcar seu antendimento e se tiver alguma duvida entre em contato conosco.</p>
                        </div>

                    </div>


                </article>
                <!--==================================== / ARTICLE =============================================== -->
               
             

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
        
    </script>


</html>


