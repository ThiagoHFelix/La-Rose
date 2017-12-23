<?php

class InicioController {
    
    
    public function __construct(){
        
    }//construtor
    
    
    public function index(){
        $this->carregaView();
    }//index
    
    
    private function carregaView(){
        require_once "Views/inicio.php";
    }//carregaView  
    
    
}//Class

