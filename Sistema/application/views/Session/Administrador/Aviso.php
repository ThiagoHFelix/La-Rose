<?php 
/*
 ===================================================================
  @Arquivo: Aviso
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>
  @Data:   19/01/2018
  @Projeto: La-Rose
 ===================================================================
*/
?>

<!DOCKTYPE html>
<html lang="pt-br">
	
	<head>
		
		<title>La'Rose | Aviso</title>

		<meta name="author" content="Thiago Henrique Felix <thiagoacdc12@gmail.com>">		
		<meta name="description" content="Página de gerenciamento de avisos">
		<meta name="keywords" content="Salão,Beleza,Agendamento">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width initial-scale=1">


		<!-- CSS -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(''); ?>css/style_session.css?v=9">

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

		<div class="main-content" >
			
			<!-- ===================== ARTICLE ========================== -->
						<div class="article">
							<div class="article-header font-site article-header-default">
								Links rápidos
							</div>
							<div class="article-body text-justify">

						<!-- ************ CADASTRO *************** -->		
							<a href="<?php echo base_url('/Cadastrar/Aviso'); ?>"	>
								<div id="option-cad-aviso" class="text-center">

									<span><i class="fa fa-exclamation-triangle"></i></span>
									<span>Cadastrar</span>
							
								</div>
							</a>
						<!-- ************ / CADASTRO ************* -->			

							</div>
						</div>
			<!-- ===================== ARTICLE ========================== -->			

			<!-- ===================== ARTICLE ========================== -->
						<div class="article">
							<div class="article-header article-header-default">
								Avisos
							</div>
							<div class="article-body text-justify">
								<table id="table-aviso">
									<tr>
										<th>Autor</th>
										<th>Titulo</th>
										<th>Destinatário</th>
										<th>Opções</th>
									</tr>
			<?php /*========================= PHP ============================*/ ?>
					<?php if(isset($objs_aviso)): ?>
					<?php  foreach($objs_aviso as $aviso): ?>			
									
									<?php

										/*Buscando nome da pessoa que criou o aviso*/
										$pessoa_autor = $this->PessoaModel->getPessoaById($aviso->getPessoa_id());

									?>	

									<tr>	
										<td> <?php  echo $pessoa_autor->getNome_usuario(); ?> </td>
										<td> <?php  echo $aviso->getTitulo(); ?> </td>
										<td> <?php  echo $aviso->getDestinatario(); ?></td>
										<td>
											<button id="btn-table-alter">Alterar</button>
											<button id="btn-table-del">Deletar</button>
										</td>
									</tr>

					<?php endforeach; ?>				
					<?php endif; ?>					
			<?php /*========================= PHP ============================*/ ?>						

								</table>
			<!-- ================== PAGINATION ========================-->
								
								<div id="table-pagination">
									
									<ul>
										
										<a href="#">
											<li>
												<span><i class="fa fa-arrow-left"></i></span>
												<span>Voltar</span>
											</li>
										</a>

										<a href="#">
											<li>
												<span>1</span>
											</li>
										</a>

										<a href="#">
											<li>
												<span>2</span>
											</li>
										</a>

										<a href="#">
											<li>
												<span>3</span>
											</li>
										</a>

										<a href="#">
											<li>
												<span>Proximo</span>
												<span><i class="fa fa-arrow-right"></i></span>
											</li>
										</a>

									</ul>

								</div>

		    <!-- ================== / PAGINATION ========================-->

							</div>
						</div>
			<!-- ===================== ARTICLE ========================== -->	
		

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