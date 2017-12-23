<?php

 class pessoa {

  protected $id = null;
  protected $nome = null;
  protected $email = null;
  protected $telefone = null;
  protected $sexo =  null;
  protected $nascimento = null;
  protected $tipo = null;
  protected $funcao = null;
  protected $data_cadastro = null;

  public function __construct(int $id,string $nome,string $email,string $telefone,string $sexo,string $nascimento,string $tipo,string $funcao,string $data_cadastro){

      $this->id = $id;
      $this->nome = $nome;
      $this->email = $email;
      $this->telefone = $telefone;
      $this->sexo = $sexo;
      $this->nascimento = $nascimento;
      $this->tipo = $tipo;
      $this->funcao = $funcao;
      $this->data_cadastro = $data_cadastro;
  
  }//Construtor
  
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
        $this->sexo = $sexo;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setFuncao($funcao) {
        $this->funcao = $funcao;
    }

    function setData_cadastro($data_cadastro) {
        $this->data_cadastro = $data_cadastro;
    }




}//pessoa
