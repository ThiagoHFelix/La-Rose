
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
        <link type="text/css" rel="stylesheet" href="css/style.css?v=2">

        <!-- Javascript -->
        <link type="text/javascript" href="js/javascript.js">

        <!-- Icons | site = Fonts Awesome -->
        <link rel="stylesheet" type="text/css" href="pacotes/fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.css">




    </head>
    <body>

        <div class="cabeçalho" >

            <div class="logo"><a href="index.php"><h1>La'Rose</h1></a></div>
            <button class="btn-menu"><i class="fa fa-bars fa-lg" ></i></button>

            <nav class="menu">

                <a class="fechar" href="#"><i class="fa fa-times fa-lg"></i></a> 
                <ul>
                    <a href="#"><li> Inicio<i class="fa fa-home"> </i></li> </a> 
                    <a href="#"><li> Quem somos<i class="fa fa-users"> </i></li> </a> 
                    <a href="#"><li> Contato<i class="fa fa-user"> </i></li> </a> 
                </ul>

            </nav>


        </div> 

        <div class="banner">

            <h2>Seja Bem-Vindo</h2>
            <p> <i class="logo-sm">La'Rose</i>é um salão de cabeleireiro que atende tanto homens quanto mulheres <br/>Venha nos Conhecer</p>

        </div>

        <main class="conteiner-equipe">

            <div class="texto">
                <h3>Nossa Equipe</h3>
                <p>A nossa equipe é composta por 3 pessoas muito talentosas, temos a missão de embelezar o dia de todas as pessoas</p>
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

        <section class="contato">

            <form>
                <h3>Entre em contato conosco</h3>
                <input class="caixa-texto" type="text" maxlength="20" name="titulo" placeholder="Titulo..." > 
                <input class="caixa-texto" type="email" maxlength="30" name="email" placeholder="Seu e-mail..." > 
                <textarea class="caixa-texto textarea" type="texto" maxlength="500" name="texto" placeholder="Escreva o texto..." ></textarea> 
                <button class="btn-contato" >Enviar</button>

            </form>

        </section>

        <footer class="rodape">

            <div class="redes-sociais">
                <ul>

                    <li ><a href="#"></a><i class="fa fa-facebook" aria-hidden="true"></i></li>
                    <li ><a href="#"></a><i class="fa fa-twitter" aria-hidden="true"></i></li>
                    <li ><a href="#"></a><i class="fa fa-google" aria-hidden="true"></i></li>
                    <li ><a href="#"></a><i class="fa fa-instagram" aria-hidden="true"></i></li>
                </ul>
            </div>

            <div class="direitos-autorais">
                <p>Copyright © 2017, La'Rose. Todos os direitos reservados.</p>
            </div>


        </footer>



    </body>


    <!-- Scripts -->
    <script type="text/javascript" src="pacotes/jquery/jquery-3.2.1.js"></script>


    <script type="text/javascript">

        $(".btn-menu").click(function () {
            $(".menu").show("fast");
            $(".btn-menu").hide("fast");
            $(".fechar").show("fast");
        });

        $(".fechar").click(function () {
            $(".menu").hide("fast");
            $(".btn-menu").show("fast");
            $(".fechar").hide("fast");
        });


    </script>

</html>
