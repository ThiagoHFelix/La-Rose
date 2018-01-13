<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 ===================================================================
  @Arquivo: Cliente Controller                                
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   07/01/2018                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

include_once 'application/objetos/Pessoa.php';

/**
 * Controlador responsavel pelas funções do cliente no sistema
 */
class Cliente extends CI_Controller{
    
    //Objeto da classe pessoa 
    private $cliente;
    
    /**
     * Construtor 
     */
    public function __construct() {
        parent::__construct();
        
      
      if(!isset($_SESSION['USUARIO'])):
          redirect(base_url('/Erro'));
      endif;
      
        
    }//construct
    
    /**
     * Carrega a dashboard do sistema
     */
    public function index(){ $this->dashboard(); }//index
    
    
    /**
     * Funções da tela inicial do cliente
     */
    public function dashboard(){
        
        $this->load->view('cliente/dashboard');
        
    }//dashboard
    
     /**
     * Desloga o cliente do sistema
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
    
    
    
}//Class



