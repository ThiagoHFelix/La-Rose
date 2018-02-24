<?php

/*
 ===================================================================
  @Arquivo: Carregamento                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   23/02/2018                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

?>

<style>
    
    #carregamento{ width: 100%; height:100vh; }
    #content-gif { margin:auto; width:150px; height: 150px; padding-top:30vh;}
    #content-textoCarregamento {margin:auto; width:auto; height: 50px;padding-top:30vh; text-align: center;  font-family: 'Sacramento',cursive; font-size: 3em; }
    
</style>

<div id="carregamento">
    
    <div id="content-gif">
        <img src="<?php echo base_url(); ?>/img/carregamento/SVG-Loaders-master/svg-loaders/bars.svg" alt="git de carregamento da pagina">
    </div>
    <div id="content-textoCarregamento">
         <span>Aguarde. Carregando a página</span>
    </div>
    
</div>