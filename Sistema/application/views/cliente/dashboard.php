<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
  ===================================================================
  @Arquivo: dashboard
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>
  @Data:   07/01/2018
  @Projeto: La-Rose
  ===================================================================
 */
?>



<!DOCTYPE HTML>
<html lang="pt-br" >
    <head>

        <title>La'Rose | Cliente</title>

        <meta charset="utf-8">
        <meta name="description" content="Pagina de controle do cliente">
        <meta name="keywords" content="Beleza,Salão">
        <meta name="author" content="Thiago Henrique Felix">
        <meta name="viewport" content="width:device-width initial-scale=1">


        <!-- CSS -->
        <link type="text/css"  rel="stylesheet"  href="css/style_cliente.css?v=8" >
        <link type="text/css"  rel="stylesheet"  href="css/style_index.css" >


        <!-- Icons | site = Fonts Awesome -->
        <link rel="stylesheet" type="text/css" href="pacotes/fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.css">

    </head> 
    <body>




        <div class="content">

            <div class="menu-content">

                <!------------- ASIDE --------------->

                <aside>


                    <div class="conteiner" style="height:70px">
                        <div class="logo" text-align: center;"><a href="<?php echo base_url('/Inicio'); ?>"><h1>La'Rose</h1></a></div>
                    </div>
                
                    <div class="conteiner">
                         <ul>

                             <a href="#" ><li><i class="fa fa-home"></i>Inicio</li></a>

                        </ul>
                    </div>


                       



                </aside>


                <!------------- / ASIDE --------------->

                <!------------- FOOTER --------------->

                <footer class="rodape" style="bottom:0; left:0; position: absolute;">

                    <div class="redes-sociais">

                        <a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>

                    </div>

                    <div class="direitos-autorais" style="color:lightgray">
                        <p>Copyright © 2017, La'Rose. Todos os direitos reservados.</p>
                    </div>


                </footer>

                <!------------- / FOOTER --------------->

            </div>

            <div class="central-content">

                <!--------------------------- HEDER --------------------------->


                <div id="header" class="header-cliente">


                    <button class="btn-menu"><i class="fa fa-bars fa-lg" ></i></button>

                    <nav  class="menu hidde-menu" style=" border-bottom-right-radius: 4px;">

                        <div class="hidde-item-menu" id="itens-menu">
                            <a class="fechar" href="#"><i class="fa fa-times fa-lg"></i></a> 
                            <ul>
                                <a href="<?php echo base_url('/Cliente/Sair'); ?>" class="header-menu "><li>Sair<i class="fa fa-sign-out-alt"> </i></li> </a>

                            </ul>
                        </div>

                    </nav>


                </div> 

              

                <!--------------------------- / HEDER --------------------------->


                <main class="main-content">


                    <?php $this->load->view('cliente/artigos/dashboard'); ?>

                </main>


            </div>




        </div>    





        <!-- Scripts -->
        <!-- Jquery -->
        <script type="text/javascript" src="pacotes/jquery/jquery-3.2.1.js"></script>
        <!-- Menu -->
        <script type="text/javascript" src="js/javascript_menu.js"></script>


        <script type="text/javascript">



            $("#usuario").mouseleave(function () {

                $("#dropdown-usuario").addClass("hide");
                $("#dropdown-usuario").removeClass("show");


            });



            $("#usuario").mouseover(function () {

                $("#dropdown-usuario").addClass("show");
                $("#dropdown-usuario").removeClass("hide");


            });
            $("#dropdown-usuario").mouseleave(function () {

                $("#dropdown-usuario").addClass("hide");
                $("#dropdown-usuario").removeClass("show");


            });



            $("#dropdown-usuario").mouseover(function () {

                $("#dropdown-usuario").addClass("show");
                $("#dropdown-usuario").removeClass("hide");


            });





        </script>

    </body>



</html>









