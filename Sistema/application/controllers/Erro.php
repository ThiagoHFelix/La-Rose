<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 ===================================================================
  @Arquivo: Erro Library                       
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   28/12/2017                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

/**
 * Labrary responsavel pela notificação de erros do sistema ao usuário
 */
class Erro extends CI_Controller{
  
    private $titulo;
    private $mensagem;
    
    /**
     * Construtor
     */
    public function __construct(){
        parent::__construct();
    }//construct
    
    
    /**
     * A página solicitada não foi encontrada
     */
    public function erro404(){
        
        $this->load->view('erro',['titulo' => 'Erro 404', 'mensagem' => 'A pagina solicitada não pode ser encontrada']);
        
    }//erro404
   
    
    /**
     * Mensagem para o usuário quando ocorrer um erro interno no sistema
     */
    public function erroInterno(){
        
        $this->load->view('erro',['titulo' => 'Erro Interno', 'mensagem' => 'Ocorreu um erro interno, se o problema persistir entre em contato com o administrador do sistema']);
        
    }//erro404
   
    
   
    
}//controller