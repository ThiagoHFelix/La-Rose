/*
 ===================================================================
  @Arquivo: LoadPage                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   23/02/2018                      
  @Projeto: La-Rose                                
 ===================================================================   
 */


function getId(id){ return document.getElementById(id); }
function hide(element) { element.style.display = "none"; }
function show(element) { element.style.display = "block"; }

function showPage(){  

   var divCarregamento = getId('carregamento');
   var conteudo = getId('content-all');
   
   //Escondendo div de carregando da página
   hide(divCarregamento);
   console.log('Escondendo a div de carregamento da página.');
   
   //Mostrando conteúdo da página
   show(conteudo);
   console.log('Mostrando conteúdo da página.');
   
}//showPage

window.onload = showPage;

