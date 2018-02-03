<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 ===================================================================
  @Arquivo: CadastroController                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   02/01/2017                      
  @Projeto: La-Rose                                
 ===================================================================   
 */


/**
 * Classe resposavel pelo conteudo inicio do projeto LA'ROSE
 */
class Inicio extends CI_Controller {
    
    /*
     * Construtor 
     */
    public function __construct(){
        
        parent::__construct();
        
    }//construtor
    
    /**
     * Carrega as principais propriedades
     */
    public function index(){
        
        $this->load->view('inicio');
        
    }//index
    
   
    
    
}//Class

