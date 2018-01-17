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
    
    private $pessoa = NULL;
    
    /**
     * Construtor padrão
     */
    public function __construct(){
        
      parent::__construct();
  
       
      if(isset($_SESSION['USUARIO'])):
             $this->redirecionamento();    
      endif;
     
      
      $this->load->library('form_validation');
        
    }//construtor
    
    /**
     * funcao padrao da classe
     */
    public function index(){ $this->pessoa(); }//index
    
    /**
     * Responsavel pelo login de pessoas no sistema
     */
    private function pessoa(){
        
        if($this->validaFormulario()):
            
            if($this->validaUsuario()):
                
                $this->iniciaSessao();
            
                $this->redirecionamento();
               
            endif;
            
        endif;
        
        $this->load->view('login');
        
    }//pessoa
    
    
    /**
     * Verifica o tipo do usuário e o redireciona para sua sessão
     */
    private function redirecionamento(){
        
         switch (strtoupper($this->session->userdata('TIPO'))):

            case 'CLIENTE':redirect(base_url('/Cliente'));
                break;
            case 'ADM':redirect(base_url('/Administrador'));
                break;
            default: $this->erro->erro('Erro interno', 'Ocorreu um erro interno, informações importantes sobre sua conta não foram encontradas. Entre em contato com o administrador');

        endswitch;
        
    }//redirecionamento
    
    
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
     * Faz a validação do usuário e senha do usuário
     * @return boolean [TRUE o FALSE] True se os dados forem validados e FALSE caso contrario
     */
    private function validaUsuario(){
        
        
        $this->load->model('PessoaModel');
        
        
        $pessoas = $this->PessoaModel->getAll();
    
        foreach($pessoas as $pessoa):
           
            if(strcmp(strtoupper($pessoa->getNome_usuario()), strtoupper($this->input->post('usuario'))) === 0):
               
                if(strcmp(strtoupper($pessoa->getSenha()),strtoupper($this->input->post('senha'))) === 0):
                   
                    log_message("info", 'Usuário validado com sucesso. Usuário: '.$pessoa);
               
                    $this->pessoa = $pessoa;
                    RETURN TRUE;
                    
                endif;
                
            endif;
            
        endforeach;
        
        log_message("info", 'Usuário não foi validado.');
        $this->session->set_flashdata('aviso_login','Dado(s) incorreto(s), verifique seu Usuário ou Senha');
        RETURN FALSE;
        
    }//ValidaUsuário
    
    
   /**
    * Cria uma nova sessão
    */
   private function iniciaSessao(){
       
       if($this->pessoa === NULL):
           log_message('error', 'Erro interno, objeto de pessoa está nulo');
           $this->erro->erro('Erro interno','Ocorreu um erro interno,o objeto de pessoa não pode ser encontrado Entre em contato com o administrador');
       endif;
       
       /* Criando dados de sessão */
       $_SESSION['TIPO'] = $this->pessoa->getTipo();
       $_SESSION['NOME'] = $this->pessoa->getNome();
       $_SESSION['USUARIO'] = $this->pessoa->getNome_usuario();
       $_SESSION['EMAIL'] = $this->pessoa->getEmail();
       $_SESSION['ID'] = $this->pessoa->getId();
     
       
   }//iniciaSessao
    
}//Class


