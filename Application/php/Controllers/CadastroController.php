<?php

/*
 ===================================================================
  @Arquivo: CadastroController                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   28/12/2017                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

class CadastroController{
    
    /**
     * Construtor 
     */
    public function __construct(){}//construtor
    
    /**
     * Método inicial do Controller
     */
    public function index(){ $this->carregaView(); }//index
    
    /**
     * Carrega a view do controller
     */
    private function carregaView(){ include_once 'Views/cadastro.php'; }//carregaView
    
}//class

