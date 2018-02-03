<?php 
/*
 ===================================================================
  @Arquivo: Aside
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>
  @Data:   20/01/2018
  @Projeto: La-Rose
 ===================================================================
*/
?>

<div class="nav-aside">
			<nav>
				<div class="header-menu">
					
					<span> <i class="fa fa-compass" ></i> </span>
					<span> Menu </span>
					

				</div>

				<ul id="itens-menu">
						
					<a href="<?php  echo base_url('/Administrador'); ?>">
						<li> 
						   
							<span> <i class="fa fa-home" ></i> </span>
							<span> Inicio </span>
							
						</li>
					</a>
					
					<a href="<?php  echo base_url('/Administrador/Aviso'); ?>">
						<li> 
						   
							<span> <i class="fa fa-exclamation-triangle" ></i> </span>
							<span> Aviso </span>
							
						</li>
					</a>

					<a href="#">
						<li> 
						   
							<span> <i class="fa fa-cog" ></i> </span>
							<span> Configurações </span>
							
						</li>
					</a>

					<a href="<?php  echo base_url('/Administrador/Sair'); ?>">
						<li class="sair"> 
						   
							<span> <i class="fa fa-times" ></i> </span>
							<span> Sair </span>
							
						</li>
					</a>

				</ul>

			</nav>
		</div>