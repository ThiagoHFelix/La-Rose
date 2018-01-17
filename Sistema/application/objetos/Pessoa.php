<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 ===================================================================
  @Arquivo: Pessoa                                 
  @Autor:   Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:    02/01/2017                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

/**
 * Objeto de pessoa do banco de dados LA'ROSE
 */
 class Pessoa {

  private $id;
  private $nome;
  private $email;
  private $telefone;
  /**
   * Propriedade SEXO deve ser M ou F
   * @var type 
   */
  private $sexo;
  private $nascimento;
  /**
   *Propriedade tipo deve ser Administrador ou Cliente  
   */
  private $tipo;
  private $funcao;
  private $data_cadastro;
  private $status;
  private $nome_usuario;
  private $senha;
  
/**
 * Construtor da classe
 * @param string $nome Nome completo da pessoa
 * @param string $email Email para contato
 * @param string $sexo Sexo da pessoa 
 * @param string $tipo Tipo de pessoa
 * @param string $nome_usuario Nome de usuário, utilizado para fazer login no sistema
 * @param string $senha Senha do usuário, utilizado para fazer login no sistema
 * @param int $id Identificação da pessoa
 * @param int $telefone Telefone para contato
 * @param string $nascimento Data de nascimento da pessoa
 * @param string $funcao Função da pessoa na empresa [Somente para pessoas com a propriedade do tipo Administrador]
 * @param string $data_cadastro Data do cadastro no banco de dados
 * @param bool $status Status da pessoa [TRUE ou FALSE]
 */
  function __construct(string $nome, string $email, string $sexo, string $tipo, string $nome_usuario, string $senha, int $id = NULL, int $telefone = NULL, string $nascimento = '', string $funcao = '', string $data_cadastro = '',bool $status = true) {
      
      $this->verificaSexo($sexo);
      $this->verificaTipo($tipo);
      
      $this->id = $id;
      $this->nome = $nome;
      $this->email = $email;
      $this->telefone = $telefone;
      $this->sexo = $sexo;
      $this->nascimento = $nascimento;
      $this->tipo = $tipo;
      $this->funcao = $funcao;
      $this->data_cadastro = $data_cadastro;
      $this->status = $status;
      $this->nome_usuario = $nome_usuario;
      $this->senha = $senha;
  }//construtct
  
  /**
   * Transforma a classe em uma string formatado em HTML
   * @return string Classe em forma de uma string
   */
  public function __toString() {
     
      try{
           return  '===================================================================<br/>
                    @Arquivo: Pessoa<br/>                                 
                    @Autor:   Thiago Henrique Felix <thiagoacdc12@gmail.com> <br/>         
                    @Data:    02/01/2017     <br/>                 
                    @Projeto: La-Rose <br/>                               
                    =================================================================== <br/>'.
                   '<strong>Id:</strong> '.$this->getId().
                   '<br/><strong>Nome:</strong> '.$this->getNome().
                   '<br/><strong>E-mail</strong>: '.$this->getEmail().
                   '<br/><strong>Telefone</strong>: '.$this->getTelefone().
                   '<br/><strong>Sexo</strong>: '.$this->getSexo().
                   '<br/><strong>Nascimento</strong>: '.$this->getNascimento().
                   '<br/><strong>Tipo</strong>: '.$this->getTipo().
                   '<br/><strong>Função</strong>: '.$this->getFuncao().
                   '<br/><strong>Data de Cadastro</strong>: '.$this->getData_cadastro().
                   '<br/><strong>Status</strong>: '.(string)$this->getStatus(). 
                   '<br/><strong>Nome de Usuário</strong>: '.$this->getNome_usuario().
                   '<br/><strong>Senha</strong>: '.$this->getSenha().
                   '<br/>===================================================================';
 
      }//try
      catch(Exception $ex){
          log_message('error','Uma exeption foi lançada ao acessar a function __toString da class Pessoa. Exeption Message: '.$ex->getMessage());
          return 'Ocorreu um erro';
      }//catch
      
  }//__toString
  
  function getId() {
      return $this->id;
  }

  function getNome() {
      return $this->nome;
  }

  function getEmail() {
      return $this->email;
  }

  function getTelefone() {
      return $this->telefone;
  }

  function getSexo() {
      return $this->sexo;
  }

  function getNascimento() {
      return $this->nascimento;
  }

  function getTipo() {
      return $this->tipo;
  }

  function getFuncao() {
      return $this->funcao;
  }

  function getData_cadastro() {
      return $this->data_cadastro;
  }

  function getStatus() {
      return $this->status;
  }

  function getNome_usuario() {
      return $this->nome_usuario;
  }

  function getSenha() {
      return $this->senha;
  }

  function setId($id) {
      $this->id = $id;
  }

  function setNome($nome) {
      $this->nome = $nome;
  }

  function setEmail($email) {
      $this->email = $email;
  }

  function setTelefone($telefone) {
      $this->telefone = $telefone;
  }

  function setSexo($sexo) {
      $this->verificaSexo($sexo);
      $this->sexo = $sexo;
  }

  function setNascimento($nascimento) {
      $this->nascimento = $nascimento;
  }

  function setTipo($tipo) {
      $this->verificaTipo($tipo);
      $this->tipo = $tipo;
  }

  function setFuncao($funcao) {
      $this->funcao = $funcao;
  }

  function setData_cadastro($data_cadastro) {
      $this->data_cadastro = $data_cadastro;
  }

  function setStatus($status) {
      $this->status = $status;
  }

  function setNome_usuario($nome_usuario) {
      $this->nome_usuario = $nome_usuario;
  }

  function setSenha($senha) {
      $this->senha = $senha;
  }


 /**
   * Verifica se o parametro tipo inserido está correto
   * @param string $tipo Propriedade tipo deve ser Administrador ou Cliente
   */
  private function verificaTipo(string $tipo){
      
      switch(strtoupper($tipo)):
          
        case 'ADM':
        case 'CLIENTE':break;
        default:die('A propriedade [TIPO] de pessoa está inválida');    
          
      endswitch;
      
  }//verificaTipo
  
  /**
   * Verifica se o parametro SEXO inserido está correto
   * @param string $sexo Propriedade SEXO deve ser F ou M
   */
  private function verificaSexo(string $sexo){
      
      switch(strtoupper($sexo)):
          
          case 'F':
          case 'M':break;
          default:die('A propriedade [SEXO] inserida está incorreta');
          
      endswitch;
      
  }//verificaSexo



}//pessoa
