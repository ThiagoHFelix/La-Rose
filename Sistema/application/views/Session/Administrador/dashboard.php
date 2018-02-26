<?php 
/*
 ===================================================================
  @Arquivo: Dashboard
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>
  @Data:   19/01/2018
  @Projeto: La-Rose
 ===================================================================
*/
?>

<!DOCKTYPE html>
<html lang="pt-br">
	
      
    
	<head>
		
		<title>La'Rose | Dashboard</title>

		<meta name="author" content="Thiago Henrique Felix <thiagoacdc12@gmail.com>">		
		<meta name="description" content="Página inicial do administrador do sistema">
		<meta name="keywords" content="Salão,Beleza,Agendamento">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width initial-scale=1">


		<!-- CSS -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(''); ?>css/style_session.css?v=4">

        <!-- Icons | site = Fonts Awesome -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>pacotes/fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.css">

	</head>

	<body>
		
		<?php  /*  ============== HEADER ============= */ ?>

			<?php  $this->load->view('complementos/versionamento') ?>

		<?php  /*  ============== / HEADER ============= */ ?>

		
		<?php  /*  ============== HEADER ============= */ ?>

			<?php  $this->load->view('Session/header') ?>

		<?php  /*  ============== / HEADER ============= */ ?>

		<?php  /*  =============== ASIDE =============== */ ?>

			<?php $this->load->view('Session/aside'); ?>

		<?php  /*  =============== / ASIDE =============== */ ?>

		<div class="main-content" style="height:100vh">
			

			<div class="article">
				<div class="article-header article-header-default">
					Seja bem-vindo(a) ao sistema de gerencimento
				</div>
				<div class="article-body text-justify">
					<p>No sistema de gerencimento é possivel ver todo o histórico de ações do sistema, também é possivel cadastrar os dias disponiveis para o agendamento no salão.</p>
				</div>
			</div>



		</div>

		 <!-- Scripts -->
        <!-- Jquery -->
        <script type="text/javascript" src="<?php echo base_url(''); ?>pacotes/jquery/jquery-3.2.1.js"></script>

		<script>
			

			/*SCRIPT DO MENU [ MODO SMARTPHONE ]*/
			$('.btn-menu').click(function(){

				var is_visible = $('.nav-aside').is(':visible');

				if(is_visible){
					
					$('.nav-aside').hide(0);

				}//if
				else{

					$('.nav-aside').show(0);

				}//else

				

			});

		</script>



	</body>


</html>