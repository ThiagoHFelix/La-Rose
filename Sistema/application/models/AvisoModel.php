<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 ===================================================================
  @Arquivo: AvisoModel                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   20/01/2018                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

include_once 'application/objetos/Aviso.php';

/**
* Classe Resposavel pelo contato com o banco de dados do objeto Aviso
*/
class AvisoModel extends CI_Model {

	private $contador = 0;
	private $objs_aviso = NULL;

	public function __construct(){

		parent::__construct();

		$this->load->database();

		log_message('debug','Model Aviso criado com sucesso');

	}//construct


	/**
	* Insere um objeto de aviso no banco de dados
	* @param Aviso $aviso Objeto de aviso a ser inserido no banco de dados
	* @return boolean [TRUE ou FALSE] TRUE se o objeto for inserido com sucesso e FALSE  se o objeto não for inserido com sucesso
	*/
	public function insert(Aviso $aviso){

		$aviso_array = [

		'titulo' => $aviso->getTitulo(),
		'mensagem' => $aviso->getMensagem(),
		'status' => $aviso->getStatus(),
		'pessoa_id' => $aviso->getPessoa_id(),
		'destinatario' => $aviso->getDestinatario(),

		];

	 $retorno = $this->db->insert('AVISO',$aviso_array);
     
     if(!$retorno) log_message ('error', 'Erro ao inserir aviso no banco de dados'.$aviso_array);
     
     return $retorno;

	}//insert

	/**
	* Busca todos os avisos no banco de dados
	* @param int $limit Quantidade de resultados que devem ser retornados
	* @param int $offset A partir de qual resultado deve começar
	* @return type [(Aviso)Array ou NULL] (Aviso)Array de avisos em caso de sucesso e NULL em caso de falha 
	*/
	public function getAll(int $limit = 0, int $offset = 0){

		$avisos = $this->db->get('AVISO',$limit,$offset);
		log_message('debug','Buscando avisos do banco de dados');

		if($avisos->num_rows() > 0):

			foreach($avisos->result_array() as $aviso):

				$titulo = $aviso['titulo'];
				$texto = $aviso['mensagem'];
				$pessoa_id = $aviso['pessoa_id'];
				$destinatario = $aviso['destinatario'];
				$id = $aviso['id'];

				/*Criando nova instancia do objeto de aviso*/
				$this->objs_aviso[$this->contador] = new Aviso($titulo,$texto,(int)$pessoa_id,$destinatario,TRUE,$id);

				$this->contador++;

			endforeach;


		else:

			log_message('debug','Nenhum aviso foi encontado no banco de dados');
			return NULL;

		endif;


		return $this->objs_aviso;

	}//getAll


	/**
	* Retorna a quantidade de resultados de avisos no banco de dados
	* @return int [INT] Retorna a quantidade de itens de aviso no banco de dados
	*/
	public function getAllNum(){

		$avisos = $this->db->get('AVISO');
		log_message('debug','Buscando avisos no banco de dados');

		return $avisos->num_rows();

	}//getAllNum


}//class