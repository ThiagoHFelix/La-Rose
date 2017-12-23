<?php

/*
 ===================================================================
  @Arquivo: Model                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   28/12/2017                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

abstract class Model {
    
    private $mysql;

    /**
     * Irá criar uma conexão com o banco de dados, se nenhum parâmetro for indicada irá criar uma conexão básica 
     */
    public function __construct(){
      
        $this->mysql = new mysqli();
        $this->mysql->connect('localhost', 'root', '', 'la-rose');
        
    }//construtor
    
    /**
     * Roda a query no banco de dados com o objeto da classe MYSQLI
     * @param string $query
     */
    protected function query(string $query){
       return $this->mysql->query($query);
    }
    
}//class



