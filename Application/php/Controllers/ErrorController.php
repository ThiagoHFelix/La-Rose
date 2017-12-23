<?php

/*
===================================
* Author: Thiago Henrique Felix   *
* Date: 2017/12/28                *
* Version: 0.1                    *
* Arquivo: Arquivo responsavel    *
* pelo controle de erros do       *  
* sistema                         *
================================= */

class ErrorController {
    
    
    
    public function __construct(){
        
    }//construct
    
    
    public function error_404(){
        include_once 'Views/error_404.php';
    }
    
    
}//controller