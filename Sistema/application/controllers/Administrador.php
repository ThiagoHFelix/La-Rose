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
        $this->load->view('Session/Administrador/dashboard');
    }//index
    
    
    /**
     * Gerenciamento de avisos do sistema
     */
    public function aviso(int $offset = 0, int $limit = 3){

        $this->load->model(['AvisoModel','PessoaModel']);

        $objs_aviso =  $this->AvisoModel->getAll($limit,$offset);

        $quant_aviso = $this->AvisoModel->getAllNum();

        $num_pag = $quant_aviso / 3;

        $this->load->view('Session/Administrador/Aviso',compact('objs_aviso','num_pag'));
    
    }//aviso

       /**
     * Desloga o administrador do sistema
     */
    public function sair(){
        
        
       if (isset($_SESSION['TIPO']) && isset($_SESSION['NOME']) && isset($_SESSION['USUARIO']) && isset($_SESSION['EMAIL']) && isset($_SESSION['ID'])):

            unset($_SESSION['TIPO']);
            unset($_SESSION['NOME']);
            unset($_SESSION['USUARIO']);
            unset($_SESSION['EMAIL']);
            unset($_SESSION['ID']);
            redirect(base_url('/Inicio'));

        endif;
    }//sair
    
}//class

