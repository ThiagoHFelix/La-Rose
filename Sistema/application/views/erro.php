<?php

/*
 ===================================================================
  @Arquivo: Erro                                
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   28/12/2017                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

?>

<!DOCTYPE HTML>
<html lang="pt-br">
    
    <head>
        
         <title>La'Rose | <?php $titulo; ?> </title>
        <meta charset="utf-8">
        <meta name="description" content="Salão de cabeleireiros">
        <meta name="keywords" content="Beleza,Salão">
        <meta name="author" content="Thiago Henrique Felix">
        <meta name="viewport"content="width:device-width, initial-scale=1.">
        
        <!-- CSS -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('/'); ?>css/style_index.css?v=2">
        <link type="text/css" rel="stylesheet" href="<?php echo base_url('/'); ?>css/style_404.css?v=2">
        
        <!-- Icons | site = Fonts Awesome -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('/'); ?>pacotes/fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.css">

        
    </head>
    <body>
        
        <?php include_once 'header.php'; ?>


        <main class="main-content">
            
            <h1> <?php echo $titulo; ?> </h1>
            <p><?php echo $mensagem; ?></p>
            
        </main>
        

        <?php include_once 'footer.php'; ?>
        
    </body>
    
    <!-- Scripts -->
    <!-- Jquery -->
    <script type="text/javascript" src="<?php echo base_url('/'); ?>pacotes/jquery/jquery-3.2.1.js"></script>
    <!-- Menu -->
    <script type="text/javascript" src="<?php echo base_url('/'); ?>js/javascript_menu.js"></script>
    
</html>



