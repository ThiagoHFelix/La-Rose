<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 ===================================================================
  @Arquivo: LoginController                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   02/01/2017                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

/**
 * Classe responsavel pelo login do sistema
 */
class Login extends CI_Controller{
    
    private $model;
    
    /**
     * Construtor padrão
     */
    public function __construct(){
        
      parent::__construct();
        
    }//construtor
    
    /**
     * funcao padrao da classe
     */
    public function index(){
        $this->load->view('login');
    }
    
}//Class


