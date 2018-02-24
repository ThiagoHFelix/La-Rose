<?php

/*
 ===================================================================
  @Arquivo: Versionamento                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   22/02/2018                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

?>


<style type="text/css">
    
    .content-versionamento { box-sizing: border-box; width:300px; height:100px;  position:fixed; background: rgba(0,0,0,1); bottom:5px; left:5px; display:none; }
    #icon-versionamento { float:left; width: 100px; height: 100%;  }
    #icon-versionamento i {color:#b6c609; font-size: 4em; padding:15px;}
    #text-versionamento { float:right; width:195px; padding-top:10px;}
    #text-versionamento span { color:#fff; font-family: 'Sacramento' , cursive; font-size: 1.8em; text-align:center; }
    #fechar { width:300px; height:100%; position:fixed; text-align: center; padding-top:15px; transition: 0.2s;}
    #fechar span {font-family: 'Sacramento',cursive; font-size: 3em; }
    #fechar:hover { cursor: pointer;}
    
</style>

<div id="janela-versionamento" class="content-versionamento">
    
    <div id="fechar"> <span id="text-fechar">Fechar</span> </div> 
        <div id="icon-versionamento"> <i class="fa fa-exclamation-triangle"></i> </div>
        <div id="text-versionamento"> <span>Versão de Desenvolvimento</span> </div>    
       
</div>

<script type="text/javascript">
   
    //Variaveis
    var janelaVersionamento = document.getElementById('janela-versionamento');
    var fecharJanela = document.getElementById('fechar');
    var fecharJanelaTexto = document.getElementById('text-fechar');
   
    //Mostra o aviso de versionamento na view
    function exibir(){ $('.content-versionamento').show('slow');  }
    //Retira o aviso de versionamento na view
    function fechar(){ $('.content-versionamento').hide('fast');  }
    
    //Mostra a opção de fechar para o usuário
    function optionFechar(){  fecharJanela.style.background = "rgba(0,0,0,1)"; fecharJanelaTexto.innerHTML = 'Fechar'; }
    //Retira a opção de fechar para o usuário
    function optionFecharOut(){  fecharJanela.style.background = "none";fecharJanelaTexto.innerHTML = '';  }
    
    optionFecharOut();
    
    janelaVersionamento.onmouseover = optionFechar;
    janelaVersionamento.onmouseout = optionFecharOut;
    janelaVersionamento.onmousedown = fechar;
    
    window.onpageshow = exibir;

</script>
