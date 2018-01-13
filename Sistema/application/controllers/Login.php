<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 ===================================================================
  @Arquivo: LoginController                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   10/01/2017                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

/**
 * Controller responsavel pelas funções do cliente no sistema
 */
class Login extends CI_Controller{
    
    private $model;
    private $cliente = NULL;
    
    /**
     * Construtor padrão
     */
    public function __construct(){
        
      parent::__construct();
  
       
      if(isset($_SESSION['USUARIO'])):
          redirect(base_url('/Cliente'));
      endif;
     
      
      
      $this->load->library('form_validation');
        
    }//construtor
    
    /**
     * funcao padrao da classe
     */
    public function index(){ $this->cliente(); }//index
    
    /**
     * Responsavel pelo login do cliente no sistema
     */
    public function cliente (){
        
        if($this->validaFormulario()):
            
            if($this->validaCliente()):
                
                $this->iniciaSessao();
                redirect(base_url('/Cliente'));
                
            endif;
            
        endif;
        
        $this->load->view('login');
        
    }//cliente
    
    
    /**
     * Faz a validação dos dados de login
     */
    private function validaFormulario(){
        
        
        $this->form_validation->set_rules('usuario','Nome de usuário','required|trim');
        $this->form_validation->set_rules('senha','Senha','required|trim');
        
        if($this->form_validation->run()):
            log_message('info','Os dados de login foram validados com sucesso');
            RETURN TRUE;
        else:
            log_message('info','Os dados de login não foram validados');
            $this->session->set_flashdata('aviso_login', validation_errors());
            RETURN FALSE;
        endif;
        
        
        
    }//validaFormulario
    
    
    /**
     * Faz a validação do usuário e senha do cliente
     * @return boolean [TRUE o FALSE] True se os dados forem validados e FALSE caso contrario
     */
    private function validaCliente(){
        
        
        $this->load->model('PessoaModel');
        
        
        $pessoas = $this->PessoaModel->getAll();
    
        foreach($pessoas as $pessoa):
           
            if(strcmp(strtoupper($pessoa->getNome_usuario()), strtoupper($this->input->post('usuario'))) === 0):
               
                if(strcmp(strtoupper($pessoa->getSenha()),strtoupper($this->input->post('senha'))) === 0):
                    
                    log_message("info", 'Usuário validado com sucesso. Usuário: '.$pessoa);
               
                    $this->cliente = $pessoa;
                    RETURN TRUE;
                    
                endif;
                
            endif;
            
        endforeach;
        
        log_message("info", 'Usuário não foi validado.');
        $this->session->set_flashdata('aviso_login','Dado(s) incorreto(s), verifique seu Usuário ou Senha');
        RETURN FALSE;
        
    }//validaCliente
    
    
   /**
    * Cria uma nova sessão
    */
   private function iniciaSessao(){
       
       if($this->cliente === NULL):
           log_message('error', 'Erro interno, objeto de cliente está nulo');
           die('Ocorreu um erro interno');
       endif;
       
       /* Criando dados de sessão */
       $_SESSION['TIPO'] = $this->cliente->getTipo();
       $_SESSION['NOME'] = $this->cliente->getNome();
       $_SESSION['USUARIO'] = $this->cliente->getNome_usuario();
       $_SESSION['EMAIL'] = $this->cliente->getEmail();
       $_SESSION['ID'] = $this->cliente->getId();
     
       
   }//iniciaSessao
    
}//Class


