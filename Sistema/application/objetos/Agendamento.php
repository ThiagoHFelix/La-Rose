<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 ===================================================================
  @Arquivo: Agendamento                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   03/01/2018                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

class Agendamento {
    
    private $id;
    private $pessoa_id;
    private $data;
    private $hora;
    private $status;
   
    /**
     * Construtor da classe
     * @param type $id Identicação do agendamento
     * @param type $pessoa_id Identificação da pessoa que fez o agendamento
     * @param type $data Data do agendamento
     * @param type $hora Hora do agendamento
     * @param boolean $status Status do agendamento
     */
    function __construct($id, $pessoa_id, $data = '', $hora = '', boolean $status = true) {
        $this->id = $id;
        $this->pessoa_id = $pessoa_id;
        $this->data = $data;
        $this->hora = $hora;
        $this->status = $status;
    }//construct

    
     /**
   * Transforma a classe em uma string formatado em HTML
   * @return string Classe em forma de uma string
   */
  public function __toString() {
     
      try{
           return  '===================================================================<br/>
                    @Arquivo: Agendamento<br/>                                 
                    @Autor:   Thiago Henrique Felix <thiagoacdc12@gmail.com> <br/>         
                    @Data:    03/01/2017     <br/>                 
                    @Projeto: La-Rose <br/>                               
                    =================================================================== <br/>'.
                   '<strong>Id:</strong> '.$this->getId().
                   '<strong>Pessoa Id:</strong> '.$this->getPessoa_id().
                   '<strong>Data:</strong> '.$this->getData().
                   '<strong>Hora:</strong> '.$this->getHora().
                   '<strong>Status:</strong> '.$this->getStatus().
                   '<br/>===================================================================';
 
      }//try
      catch(Exception $ex){
          log_message('error','Uma exeption foi lançada ao acessar a function __toString da class Agendamento. Exeption Message: '.$ex->getMessage());
          return 'Ocorreu um erro';
      }//catch
      
  }//__toString
    
    function getId() {
        return $this->id;
    }

    function getPessoa_id() {
        return $this->pessoa_id;
    }

    function getData() {
        return $this->data;
    }

    function getHora() {
        return $this->hora;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setPessoa_id($pessoa_id) {
        $this->pessoa_id = $pessoa_id;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }

    function setStatus($status) {
        $this->status = $status;
    }


    
    
}//class


