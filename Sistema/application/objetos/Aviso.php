<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 ===================================================================
  @Arquivo: Aviso                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   03/01/2018                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

class Aviso {
    
    private $id;
    private $titulo;
    private $mensagem;
    private $pessoa_id;
    private $status;
  
      
  
      /**
     * Construtor da classe
     * @param type $id Identificação no banco de dados
     * @param type $titulo Titulo da mensagem
     * @param type $mensagem Texto da mensagem
     * @param type $pessoa_id Identificação da pessoa que fez a mensagem
     * @param boolean $status
     */
    function __construct($id, $titulo, $mensagem, $pessoa_id, boolean $status) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->mensagem = $mensagem;
        $this->pessoa_id = $pessoa_id;
        $this->status = $status;
    }//construct
    
     /**
   * Transforma a classe em uma string formatado em HTML
   * @return string Classe em forma de uma string
   */
  public function __toString() {
     
      try{
           return  '===================================================================<br/>
                    @Arquivo: Aviso<br/>                                 
                    @Autor:   Thiago Henrique Felix <thiagoacdc12@gmail.com> <br/>         
                    @Data:    03/01/2017     <br/>                 
                    @Projeto: La-Rose <br/>                               
                    =================================================================== <br/>'.
                   '<strong>Id:</strong> '.$this->getId().
                   '<br/><strong>Titulo:</strong> '.$this->getTitulo().
                   '<br/><strong>Mensagem:</strong> '.$this->getMensagem().
                   '<br/><strong>Pessoa ID:</strong> '.$this->getPessoa_id().
                   '<br/><strong>Status:</strong> '.$this->getStatus().
                   '<br/>===================================================================';
 
      }//try
      catch(Exception $ex){
          log_message('error','Uma exeption foi lançada ao acessar a function __toString da class Aviso. Exeption Message: '.$ex->getMessage());
          return 'Ocorreu um erro';
      }//catch
      
  }//__toString
    
    
    function getId() {
        return $this->id;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getMensagem() {
        return $this->mensagem;
    }

    function getPessoa_id() {
        return $this->pessoa_id;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setMensagem($mensagem) {
        $this->mensagem = $mensagem;
    }

    function setPessoa_id($pessoa_id) {
        $this->pessoa_id = $pessoa_id;
    }

    function setStatus($status) {
        $this->status = $status;
    }


    
    
    
}//class



