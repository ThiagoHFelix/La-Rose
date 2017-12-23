<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <title>La'Rose | Cadastro</title>
        <meta charset="utf-8">
        <meta name="description" content="Salão de cabeleireiros">
        <meta name="keywords" content="Beleza,Salão">
        <meta name="author" content="Thiago Henrique Felix">
        <meta name="viewport"content="width:device-width, initial-scale=1.">

        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="css/style_login.css?v=6">
        <link type="text/css" rel="stylesheet" href="css/style_index.css?v=6">
        <link type="text/css" rel="stylesheet" href="css/style_cadastro.css?v=3">


        <!-- Icons | site = Fonts Awesome -->
        <link rel="stylesheet" type="text/css" href="pacotes/fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.css">



    </head>

    <body>

        <?php /* Cabeçalho */ include_once 'Views/header.php'; ?>


        <div class="conteiner-app">

          <div class="logo-login">

              <h1 class="font-site">La'Rose</h1>
              <p>Insira seus dados para entrar no sistema</p>
          </div>

          <form >

                      <input class="caixa-texto" type="text" name="nome" maxlength="60" required placeholder="Nome Completo*" />
                      <input class="caixa-texto" type="email" name="email" maxlength="60"  required placeholder="E-mail*" />
                      <input class="caixa-texto" type="text" name="telefone" maxlength="20"  placeholder="Telefone" />
                      <select required name="sexo" class="caixa-texto" >
                          <option value="">Selecione seu sexo</option>
                          <option value="M">Masculino</option>
                          <option value="F">Feminino</option>
                      </select>
                      <input class="caixa-texto" type="date" name="nascimento" placeholder="Nascimento" />
                      <button class="btn">Enviar</button>

          </form>

        </div>


        <?php /* Rodapé */ include_once 'Views/footer.php'; ?>

        <!-- Scripts -->
        <!-- Jquery -->
        <script type="text/javascript" src="pacotes/jquery/jquery-3.2.1.js"></script>
        <!-- Menu -->
        <script type="text/javascript" src="js/javascript_menu.js"></script>

    </body>


</html>
