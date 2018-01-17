<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 ===================================================================
  @Arquivo: Administrador                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   15/01/2018                      
  @Projeto: La-Rose                                
 ===================================================================   
 */


/**
 * Classe responsavel pelas funções do administrador na sessão
 */
class Administrador  extends CI_Controller{
    
    
    public function __construct() {
        parent::__construct();
        
        if(strcmp(strtoupper($this->session->userdata('TIPO')),'ADM') !== 0):
            redirect(base_url('/erro404'));
        endif;
        
    }//construct
    
    /**
     * Função default, carrega a pagina inicial da sessão do administrador
     */
    public function index(){
        $this->load->view('Session/Administrador/Session');
    }//index
    
    
    /**
     * Gerenciamento de avisos do sistema
     */
    public function aviso(){
        $this->load->view('Session/Administrador/Aviso');
    }
    
}//class

