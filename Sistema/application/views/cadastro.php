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
        <link type="text/css" rel="stylesheet" href="../css/style_login.css?v=2">
        <link type="text/css" rel="stylesheet" href="../css/style_index.css?v=2">
        <link type="text/css" rel="stylesheet" href="../css/style_cadastro.css?v=5">


        <!-- Icons | site = Fonts Awesome -->
        <link rel="stylesheet" type="text/css" href="../pacotes/fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.css">



    </head>

    <body>

        <?php /* Cabeçalho */ include_once 'header.php'; ?>


        <div class="conteiner-app">

            <div class="logo-login">

                <div class="alerta"><i class="fa fa-exclamation-triangle fa-lg"></i><p> Todos os campos com os caracter (*) são obrigatórios</p></div>
                <div class="alerta"><i class="fa fa-exclamation-triangle fa-lg"></i> <p> A data maxíma de nascimento aceita é de no minimo cinco anos atrás </p>  </div>
                <div class="alerta"><i class="fa fa-exclamation-triangle fa-lg"></i> <p> A senha deve ter ao menos cinco caracteres </p>  </div>
            </div>

            <form method="POST" action="<?php echo base_url('/Cadastrar/Cliente'); ?>">

                <input value="<?php echo $input_nome_usuario; ?>"  class="caixa-texto" type="text" name="nome_usuario" maxlength="20" required placeholder="Nome de Usuário*" />
                <input value="<?php echo $input_nome; ?>" class="caixa-texto" type="text" name="nome" maxlength="60" required placeholder="Nome Completo*" />
                <input value="<?php echo $input_email; ?>" class="caixa-texto" type="email" name="email" maxlength="60"  required placeholder="E-mail*" />
                <input value="<?php echo $input_telefone; ?>" class="caixa-texto" type="text" name="telefone" maxlength="20"  placeholder="Telefone" />
                <select required name="sexo" class="caixa-texto" style="text-indent: 30%;" >
                    <option value="">Selecione seu sexo*</option>
                    <option  <?php
                    if (strcmp($input_sexo, 'M') == 0): echo 'selected';
                    endif;
                    ?>  value="M">Masculino</option>
                    <option  <?php
                    if (strcmp($input_sexo, 'F') == 0): echo 'selected';
                    endif;
                    ?>  value="F">Feminino</option>
                </select>
                <input value="<?php echo $input_nascimento; ?>"  class="caixa-texto" type="date"  style="text-indent: 5%; font-family: tomoha;" name="nascimento" placeholder="Nascimento" />
                <input value="<?php echo $input_senha; ?>" class="caixa-texto" type="password" name="senha" minlength="5" maxlength="30" required placeholder="Senha*" />
                <input value="<?php echo $input_conf_senha; ?>" class="caixa-texto" type="password" name="conf_senha" minlength="5" maxlength="30" required placeholder="Confirmação de Senha*" />


<?php if (strcmp($this->session->flashdata('aviso_cadastro'), '') !== 0): ?>

                    <div class="alerta" id="aviso_usuario"><i class="fa fa-exclamation-triangle fa-lg"></i>  <?php echo $this->session->flashdata('aviso_cadastro'); ?>   </div>

<?php endif; ?>


                <button class="btn">Enviar</button>

            </form>

        </div>


<?php /* Rodapé */ include_once 'footer.php'; ?>

        <!-- Scripts -->
        <!-- Jquery -->
        <script type="text/javascript" src="../pacotes/jquery/jquery-3.2.1.js"></script>
        <!-- Menu -->
        <script type="text/javascript" src="../js/javascript_menu.js"></script>

        <script type="text/javascript" >

            $("document").ready(function () {

               
                    var ancora = $("#aviso_usuario").offset().top;
                    $("html, body").animate({scrollTop: ancora}, 1600);
              

            });


        </script>


    </body>


</html>
