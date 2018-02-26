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
				<a style="color:#000000" href="<?php echo base_url('Inicio'); ?>" ><div class="logo-header"> La'Rose</div></a>
				<div class="btn-menu"><i class="fa fa-bars"></i></div>

				<div class="user-name">
					<span> <i class="fa fa-user" ></i> </span>
					<span> <?php  echo $this->session->userdata('USUARIO') ?> </span>
				</div>
			</header>
</div>
