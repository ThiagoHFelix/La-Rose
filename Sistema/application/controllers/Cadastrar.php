<?php

defined('BASEPATH') OR exit('No direct script access allowed');
/*
 ===================================================================
  @Arquivo: Cadastrar                                 
  @Autor: Thiago Henrique Felix <thiagoacdc12@gmail.com>          
  @Data:   02/01/2018                      
  @Projeto: La-Rose                                
 ===================================================================   
 */

include_once 'application/objetos/Pessoa.php';
include_once 'application/objetos/Aviso.php';

/**
 * Classe responsavel pelo cadastro no sistema
 */
class Cadastrar extends CI_Controller {
    
    private $dados_formulario;
    
    /**
     * Construtor
     */
    public function __construct() {
       
        parent::__construct();
        
        $this->load->library(['form_validation']);
        $this->load->model(['PessoaModel']);
        
        
        
    }//construct
    
   
 
    /**
     * Cadastra um cliente no banco de dados
     */
    public function cliente(){
            
        $retorno = $this->valida();

        /*
         * Dados foram validados, então insira no banco de dados
         */
        if ($retorno):
            if ($this->insertPessoa()):
                
                
                /* Dados dos formularios 
                    Limpo se a pessoa for cadastrada com sucesso
                 *                  */
                $this->dados_formulario = [
                    'input_nome' => '',
                    'input_nome_usuario' => '',
                    'input_email' => '',
                    'input_telefone' => '',
                    'input_sexo' => '',
                    'input_nascimento' => '',
                    'input_senha' => '',
                    'input_conf_senha' => '',
                ];
            
            endif;
        else:
            
            /* Dados dos formularios 
                Carrego novamente os dados no formulario já que a pessoa não foi cadastrada
             *              */
            $this->dados_formulario = [
                'input_nome' => $this->input->post('nome'),
                'input_nome_usuario' => $this->input->post('nome_usuario'),
                'input_email' => $this->input->post('email'),
                'input_telefone' => $this->input->post('telefone'),
                'input_sexo' => $this->input->post('sexo'),
                'input_nascimento' => $this->input->post('nascimento'),
                'input_senha' => $this->input->post('senha'),
                'input_conf_senha' => $this->input->post('conf_senha'),
            ];
        endif;
        
        $this->load->view('cadastro', $this->dados_formulario);
        
    }//cadastro

    
    /**
     * Faz a validação dos dados inseridos no formulario da view cadastro
     * @return boolean [TRUE ou FAlSE] TRUE se os dados forem validados e FALSE se não forem
     */
    private function valida(){
        
        $input_nascimento = filter_input(INPUT_POST, 'nascimento');
       
        $this->form_validation->set_rules('nome_usuario','Nome de Usuário','required|max_length[30]|alpha|trim');
        $this->form_validation->set_rules('nome','Nome','required|max_length[60]');
        $this->form_validation->set_rules('email','E-mail','required|max_length[60]|valid_email|trim');
        $this->form_validation->set_rules('telefone','Telefone','max_length[20]|trim');
        $this->form_validation->set_rules('sexo','Sexo','required|max_length[1]|in_list[M,m,F,f]|trim');
        $this->form_validation->set_rules('senha','Senha','required|max_length[30]|trim|min_length[5]');
        $this->form_validation->set_rules('conf_senha','Confirmação da Senha','required|max_length[30]|matches[senha]|trim|min_length[5]');
        
        log_message('debug','Criando validação do formulário');
       
        
        if ($this->form_validation->run()):

            //Verifico se a data foi inserida no formulario
            if (strcmp($input_nascimento, '') > 0):
                if (!$this->validaData($input_nascimento)):
                    $this->session->set_flashdata('aviso_cadastro', 'A data inserida não é válida');
                    RETURN FALSE;
                endif;
            endif;
            
            //Verifico se a propriedade USER_NAME já existe no banco de dados
            if(!$this->validaUserName($this->input->post('nome_usuario'))):
                $this->session->set_flashdata('aviso_cadastro','Este nome de usuário não está disponivel');
                RETURN FALSE;
            endif;
            
            
            log_message('debug', 'Dados do formulario validados corretamente');
            
            RETURN TRUE;
            

        else:
            
            log_message('info', 'Dados inseridos são inválidos');
            
            $this->session->set_flashdata('aviso_cadastro', validation_errors());
            RETURN FALSE;

        endif;
    }//cadastro
    
    /**
     * Verifica se uma data é válida
     * @param string $data Data a ser validada
     */
    private function validaData(string $data = ''){
        
        
        $data_array = explode('-', $data);
        
        //A data de nascimento é maior do que a data atual 
        if($data_array[0]>(date('Y')-5)):
            RETURN FALSE;
        endif;
        
        //O ano deve ser maior que 1950
        if($data_array[0]<1950):
            RETURN FALSE;
        endif;
        
        return checkdate($data_array[1], $data_array[2], $data_array[0]);
        
    }//validaData
    
    /**
     * Verifica se o user name inserido já não existe no banco de dados
     * @param string $userName Nome de Usuário a ser verificado
     * @return boolean [TRUE ou FALSE] TRUE se o nome não for encontrado e FALSE  se o nome for encontrado
     */
    public function validaUserName(string $userName){
        
        $pessoas = $this->PessoaModel->getAll();
        
        foreach($pessoas as $pessoa):
            
            if(strcmp(strtoupper($pessoa->getNome_usuario()),strtoupper($userName)) === 0):
                
                RETURN FALSE;
                
            endif;
            
        endforeach;
            
        RETURN TRUE;    
        
    }//validaUserName
    
    /**
     * Insere uma pessoa no banco de dados
     * @return boolean [TRUE ou FALSE] TRUE no sucesso e FALSE no fracasso
     */
    private function insertPessoa(string $funcao = '',string $tipo = 'CLIENTE'){
        
        $nome = $this->input->post('nome');
        $nome_usuario = $this->input->post('nome_usuario');
        $email = $this->input->post('email');
        $telefone = (int) $this->input->post('telefone');
        $sexo = $this->input->post('sexo');
        $nascimento = $this->input->post('nascimento');
        $senha = $this->input->post('senha');
        
        $pessoa = new Pessoa($nome, $email, $sexo, 'Cliente', $nome_usuario, $senha, NULL, $telefone, $nascimento);
        $pessoa->setFuncao($funcao);
        
        log_message('debug', 'Criado a Pessoa: ' . $pessoa);

        //Inserindo pessoa no banco de dados
        if ($this->PessoaModel->insert($pessoa)):
            $this->session->set_flashdata('aviso_cadastro', 'O usuário foi cadastrado com sucesso');
            log_message('debug', 'Pessoa cadastrada com sucesso no banco de dados');
            return TRUE;
            
        else:
            $this->session->set_flashdata('aviso_cadastro', 'Ocorreu um erro ao cadastrar o usuário, tente novamente mais tarde');
            log_message('error', 'Ocorreu um erro ao cadastrar o usuário, tente novamente mais tarde');
        endif;
        
        return FALSE;
        
    }//insertPessoa


    /**
    * Cadastra um novo aviso no sistema
    */
    public function aviso(){

      if($this->verificaAviso()):

            if($this->insertAviso()):

                $this->session->set_flashdata('aviso_cadastro','O aviso foi registrado com sucesso');

            endif;

        endif;

        $this->load->view('Session/Administrador/cadastro-aviso');
        
    }//Aviso

    /**
    * Faz a validação de dados do formulario
    * @return boolean [TRUE ou FALSE] TRUE quando os dados forem validados FALSE quando não forem validados
    */
    private function verificaAviso(){

        $this->form_validation->set_rules('titulo','Titulo','trim|required|max_length[45]');
        $this->form_validation->set_rules('texto','Texto','trim|required|max_length[350]');
        $this->form_validation->set_rules('destinatario','Destinatario','trim|required');

        if($this->form_validation->run()):

            return TRUE;

        else:

            $this->session->set_flashdata('aviso_cadastro',validation_errors());
            return FALSE;

        endif;    


    }//verificaAviso


    /**
    * Insere um objeto de aviso no banco de dados
    * @return boolean [TRUE ou FALSE] TRUE em caso de sucesso e FALSE na falha
    */
    private function insertAviso(){

        $this->load->model('AvisoModel');

        $titulo = $this->input->post('titulo');
        $texto = $this->input->post('texto');
        $destinatario = $this->input->post('destinatario');
        $pessoa_id = $this->session->userdata('ID');

        $aviso = new Aviso($titulo,$texto,(int)$pessoa_id,$destinatario,TRUE,0);

        $retorno = $this->AvisoModel->insert($aviso);

        if(!$retorno) $this->session->set_flashdata('usuario_aviso','Não foi possivel registrar o aviso. Se o problema persistir entre em contato com o administrador');

        return $retorno;

    }//insertAviso
    
}//class

