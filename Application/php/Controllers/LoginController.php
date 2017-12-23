<?php

/*
 ===================================================================
  @Arquivo: LoginController                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   28/12/2017                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

class LoginController {
    
    /**
     * Construtor padrão
     */
    public function __construct(){}//construtor
    
    /**
     * Método inicial do contoller
     */
    public function index(){
        $this->carregaView();
    }//index
    
    private function carregaView(){
        include_once 'Views/login.php';
    }//carregaView
    
    
}//Class


