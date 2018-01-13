<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 ===================================================================
  @Arquivo: PessoaModel                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   03/01/2018                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

include_once 'application/objetos/Pessoa.php';

/**
 * Gerencia o relacionamento do objeto pessoa com o banco de dados
 */
class PessoaModel extends CI_Model{
    
    private $contador;
    private $pessoas;
    
    /**
     * Construtor da classe
     */
    public function __construct() {
        
        parent::__construct();
        
        $this->contador = 0;
        $this->pessoas = array();
        
        $this->load->database();
        
        log_message('info', 'Model Pessoa Criado com sucesso');
        
    }//construct
    
    /**
     * Insere uma pessoa no banco de dados LA_ROSE 
     * @param Pessoa $pessoa Objeto de pessoa
     * @return boolean [TRUE ou FALSE] Se conseguir inserir retorna TRUE caso contrario retorna FALSE 
     */
    public function insert(Pessoa $pessoa){
        
    $pessoaArray = [
        
        'ID' => $pessoa->getId(),
        'NOME' => $pessoa->getNome(),
        'EMAIL' => $pessoa->getEmail(),
        'TELEFONE' => $pessoa->getTelefone(),
        'SEXO' => $pessoa->getSexo(),
        'NASCIMENTO' => $pessoa->getNascimento(),
        'TIPO' => $pessoa->getTipo(),
        'FUNCAO' => $pessoa->getFuncao(),
        'DATA_CADASTRO' => $pessoa->getData_cadastro(),
        'STATUS' => $pessoa->getStatus(),
        'NOME_USUARIO' => $pessoa->getNome_usuario(),
        'SENHA' => $pessoa->getSenha()
        
    ];
        
        
     $retorno = $this->db->insert('PESSOA',$pessoaArray);
     
     if(!$retorno) log_message ('error', 'Erro ao inserir pessoa no banco de dados'.$pessoaArray);
     
     return $retorno;
        
    }//insert
    
    /**
     * Busca todas as pessoas registradas no banco de dados
     * @return type [PESSOA[] ou NULL] PESSOA[] no se ao menos um resultado for encontrado e NULL se nada for encontrado
     */
    public function getAll(){
        
        $resultados = $this->db->get('PESSOA');
        log_message('info', 'Buscando todas as pessoas no banco de dados');
        
        if ($resultados->num_rows() > 0):
            foreach ($resultados->result_array() as $pessoa):

                $this->pessoas[$this->contador] = new Pessoa($pessoa['nome'], $pessoa['email'], $pessoa['sexo'], $pessoa['tipo'], $pessoa['nome_usuario'], $pessoa['senha'], $pessoa['id'], $pessoa['telefone'], $pessoa['nascimento'], $pessoa['funcao'], $pessoa['data_cadastro'], $pessoa['status']);

                $this->contador++;
            endforeach;

            $this->contador = 0;
            return $this->pessoas;

        endif;

        return NULL;

    }//getAll
    
    
    
}//class


