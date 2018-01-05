<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 ===================================================================
  @Arquivo: ErroController                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   28/12/2017                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

/**
 * Controlador responsavel pela notificação de erros do sistema ao usuário
 */
class Erro extends CI_Controller{
  
    
    /**
     * Construtor
     */
    public function __construct(){
        parent::__construct();
    }//construct
    
    
   
    public function erro404(){
        
        $this->load->view('erro',['titulo' => 'Erro 404', 'mensagem' => 'A pagina solicitada não pode ser encontrada']);
        
    }
   
    
}//controller