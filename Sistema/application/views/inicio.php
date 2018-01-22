
<!DOCTYPE HTML>
<html lang="pt-br">
    <head>

        <title>La'Rose | Salão de Beleza</title>
        <meta charset="utf-8">
        <meta name="description" content="Salão de cabeleireiros">
        <meta name="keywords" content="Beleza,Salão">
        <meta name="author" content="Thiago Henrique Felix">
        <meta name="viewport"content="width:device-width, initial-scale=1.">

        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="css/style_index.css?v=4">

        <!-- Icons | site = Fonts Awesome -->
        <link rel="stylesheet" type="text/css" href="pacotes/fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.css">


    </head>
    <body>

        <?php 
            
            /*Cabeçalho*/
            include_once 'header.php';
            
        ?>

        <div class="banner">

            <h2>Seja Bem-Vindo</h2>
            <p> <i class="logo-sm">La'Rose</i>é um salão de cabeleireiro que atende tanto homens quanto mulheres. Venha nos Conhecer</p>
            <p id="funcionamento" >Estamos abertos de Segunda a Sabado das 08:00am até 09:00pm</p>

        </div>

        <main class="conteiner-equipe" id="equipe">

            <div class="texto" >
                <h3>Nossa Equipe</h3>
                <p>A nossa equipe da  <i class="logo-sm">La'Rose</i>é composta por três pessoas muito talentosas, temos a missão de embelezar o dia das pessoas</p>
            </div>

            <div class="conteiner-perfils">

                <div class="conteiner-perfil">
                    <article class="perfil" >
                        <div class="foto">
                            <img alt="Foto da Angelica da Silva Benegathi" src="img/mulher-perfil.jpg?v=2">
                        </div>
                        <div class="nome">Angelica da Silva Benegathi</div>
                        <div class="funcao">Cabeleireira</div>
                    </article>
                </div>
                <div class="conteiner-perfil">
                    <article class="perfil" >
                        <div class="foto">
                            <img alt="Foto da Beatriz Ferreira Bertoli" src="img/mulher-perfil_2.jpg">
                        </div>
                        <div class="nome">Beatriz Ferreira Bertoli</div>
                        <div class="funcao">Sócia</div>
                    </article>
                </div>

                <div class="conteiner-perfil">
                    <article class="perfil" >
                        <div class="foto">
                            <img alt="Foto do Reginaldo da Cruz Mancin" src="img/homem-perfil.jpg">
                        </div>
                        <div class="nome">Reginaldo da Cruz Mancin</div>
                        <div class="funcao">Escritório</div>
                    </article>
                </div>

            </div>

        </main>

        <section class="contato" id="formulario-contato">

            <form>
                <h3>Entre em contato conosco</h3>
                <input class="caixa-texto" type="text" maxlength="20" name="titulo" placeholder="Titulo..." > 
                <input class="caixa-texto" type="email" maxlength="30" name="email" placeholder="Seu e-mail..." > 
                <textarea class="caixa-texto textarea" type="texto" maxlength="500" name="texto" placeholder="Escreva o texto..." ></textarea> 
                <button class="btn" >Enviar</button>

            </form>

        </section>

        <?php
            
            /*Rodapé*/
            include_once 'footer.php'
        
        ?>

        <div class="mover-para-inicio" hidden="true" >
            <i  class="fa fa-angle-up fa-fw fa-4x" aria-hidden="true" ></i>
        </div>

    </body>


    <!-- Scripts -->
    <!-- Jquery -->
    <script type="text/javascript" src="pacotes/jquery/jquery-3.2.1.js"></script>
    <!-- Menu -->
    <script type="text/javascript" src="js/javascript_menu.js?v=3"></script>




   

</html>
