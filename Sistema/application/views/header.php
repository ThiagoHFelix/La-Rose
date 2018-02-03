<div id="header" class="cabeçalho" >

    <div class="logo"><a href="<?php echo base_url('/Inicio'); ?>"><h1>La'Rose</h1></a></div>
    <button class="btn-menu"><i class="fa fa-bars fa-lg" ></i></button>

    
    <nav  class="menu hidde-menu" >

        <div class="hidde-item-menu" id="itens-menu">
            <a class="fechar" href="#"><i class="fa fa-times fa-lg"></i></a> 
            <ul>
                
                <a href="<?php echo base_url('/Inicio'); ?>"><li> Inicio<i class="fa fa-home"> </i></li> </a> 

                <?php /*SOMENTE MOSTRAR ESTES ITENS DE MENU NA PAGINA INICIAL*/ ?>     
                <?php if (strcmp(strtoupper($this->uri->segment(1)), 'LOGIN') !== 0): ?>     
                    <a href="#" id="quem-somos"><li> Quem somos<i class="fa fa-users"> </i></li> </a> 
                    <a id="contato" href="#"><li> Contato<i class="fa fa-user"> </i></li> </a> 
                <?php endif; ?>


                <a href="<?php echo base_url('/Login'); ?>" ><li id="logar"> Logar <i class="fa fa-sign-in-alt "> </i></li> </a> 
            </ul>
        </div>

    </nav>
    


   
    
</div> 
