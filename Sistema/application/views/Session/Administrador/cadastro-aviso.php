<?php 
/*
 ===================================================================
  @Arquivo: Cadastro-Aviso
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>
  @Data:   19/01/2018
  @Projeto: La-Rose
 ===================================================================
*/
?>

<!DOCKTYPE html>
<html lang="pt-br">
	
	<head>
		
		<title>La'Rose | Cadastro Aviso</title>

		<meta name="author" content="Thiago Henrique Felix <thiagoacdc12@gmail.com>">		
		<meta name="description" content="Página de cadastro de aviso">
		<meta name="keywords" content="Salão,Beleza,Agendamento">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width initial-scale=1">

		<!-- CSS -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(''); ?>css/style_session.css?v=7">

        <!-- Icons | site = Fonts Awesome -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(''); ?>pacotes/fontawesome-free-5.0.2/web-fonts-with-css/css/fontawesome-all.css">

	</head>

	<body>
		
		<?php  /*  ============== HEADER ============= */ ?>

			<?php  $this->load->view('Session/Header') ?>

		<?php  /*  ============== / HEADER ============= */ ?>

		<?php  /*  =============== ASIDE =============== */ ?>

			<?php $this->load->view('Session/Aside'); ?>

		<?php  /*  =============== / ASIDE =============== */ ?>

		<div class="main-content" style="height:100vh">
				

			<!-- ===================== ARTICLE ========================== -->
						<div class="article">
							<div class="article-header article-header-blue" >
								Cadastro de aviso
							</div>
							<div class="article-body" id="form-aviso">

								 <div class="alerta"><i class="fa fa-exclamation-triangle fa-lg"></i><p> Todos os campos com os caracter (*) são obrigatórios</p></div>

								<form action="" method="POST" >
									
									<input  class="text-center" type="text" placeholder="Titulo" name="titulo" id="titulo-aviso" required="">
									<textarea id="texto-aviso" name="texto" class="text-center" placeholder="Texto" required ></textarea>
									<select name="destinatario" id="select-aviso" required>
										<option value="">Selecione o destinatario</option>	
										<option value="Cliente">Cliente</option>
										<option value="ADM">Administrador</option>
										<option value="Todos">Todos</option>
									</select>

									<?php if (strcmp($this->session->flashdata('aviso_cadastro'), '') !== 0): ?>

                    					<div class="alerta"	><i class="fa fa-exclamation-triangle fa-lg"></i>  <?php echo $this->session->flashdata('aviso_cadastro'); ?>   </div>

									<?php endif; ?>

									<button id="btn-aviso" type="input" >Registar</button>
									

								</form>

							</div>
						</div>
			<!-- ===================== ARTICLE ========================== -->

		</div>

		 <!-- Scripts -->
        <!-- Jquery -->
        <script type="text/javascript" src="<?php echo base_url(''); ?>pacotes/jquery/jquery-3.2.1.js"></script>

        <!-- CKEDITOR -->
        <script type="text/javascript" src="<?php echo base_url(''); ?>pacotes/ckeditor_4.8.0_basic/ckeditor/ckeditor.js"></script>

		<script>
			
			CKEDITOR.replace('texto-aviso');

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