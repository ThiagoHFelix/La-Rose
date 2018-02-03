<?php 
/*
 ===================================================================
  @Arquivo: Header
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>
  @Data:   20/01/2018
  @Projeto: La-Rose
 ===================================================================
*/
?>

<div class="header">
			<header>
				<div class="logo-header">La'Rose</div>
				<div class="btn-menu"><i class="fa fa-bars"></i></div>

				<div class="user-name">
					<span> <i class="fa fa-user" ></i> </span>
					<span> <?php  echo $this->session->userdata('USUARIO') ?> </span>
				</div>
			</header>
</div>
