<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 ===================================================================
  @Arquivo: Aviso                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   20/01/2018                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

class Aviso {
    
    private $id;
    private $titulo;
    private $mensagem;
    private $pessoa_id;
    private $status;
    private $destinatario;
  
      /**
     * Construtor da classe
     * @param type $id Identificação no banco de dados
     * @param type $titulo Titulo da mensagem
     * @param type $mensagem Texto da mensagem
     * @param type $pessoa_id Identificação da pessoa que fez a mensagem
     * @param string $destinatario Pessoas que iram receber o aviso
     * @param boolean $status
     */
    function __construct(string $titulo,string $mensagem,int $pessoa_id,string $destinatario ,bool $status,int $id) {
    
        $this->id = $id;
        $this->titulo = $titulo;
        $this->mensagem = $mensagem;
        $this->pessoa_id = $pessoa_id;
        $this->status = $status;
        $this->destinatario = $destinatario;
    
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
                   '<br/><strong>Destinatario:</strong> '.$this->getDestinatario().
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

    function getDestinatario() {
        return $this->destinatario;
    }

    function getStatus() {
        return $this->status;
    }

    function setId(int $id) {
        $this->id = $id;
    }

    function setTitulo(string $titulo) {
        $this->titulo = $titulo;
    }

    function setMensagem(string $mensagem) {
        $this->mensagem = $mensagem;
    }

    function setPessoa_id(int $pessoa_id) {
        $this->pessoa_id = $pessoa_id;
    }

    function setStatus(bool $status) {
        $this->status = $status;
    }

    function setDestinatario(string $destinatario) {
        $this->destinario = $destinatario;
    }

    
    
    
}//class



