<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pessoa extends CI_Controller {
    public $pessoa;
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('PessoaModel');
        $this->pessoa = new PessoaModel;
    }
    public function index() {
        $data['data'] = $this->pessoa->get_Pessoa();
        $this->load->view('layout/cabecalho');
        $this->load->view('pessoa/PessoaListar', $data);
        $this->load->view('layout/rodape');
    }
    public function mostrar($id_pessoa) {
        $pessoa = $this->pessoa->pesquisar($id_pessoa);
        $this->load->view('layout/cabecalho');
        $this->load->view('pessoa/mostrar', array('pessoa' => $pessoa));
        $this->load->view('layout/rodape');
    }
    public function criar() {
        $this->load->view('layout/cabecalho');
        $this->load->view('pessoa/PessoaInserir');
        $this->load->view('layout/rodape');
    }
    public function inserir() {
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('inicio'));
        } else {
            $this->pessoa->inserir();
            redirect(base_url('criarveiculo'));
        }
    }

    public function editar($id_pessoa) {
        $pessoa = $this->pessoa->pesquisar($id_pessoa);
        $this->load->view('layout/cabecalho');
        $this->load->view('pessoa/pessoaEditar', array('pessoa' => $pessoa));
        $this->load->view('layout/rodape');
    }
    public function atualizar($id_pessoa) {
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('pessoa/atualizar/' . $id_pessoa));
        } else {
            $this->pessoa->atualizar($id_pessoa);
            redirect(base_url('PessoaListar'));
        }
    }
    public function excluir($id_pessoa) {
        $pessoa = $this->pessoa->excluir($id_pessoa);
        redirect(base_url('PessoaListar'));
    }

    public function todos(){
        $data['data'] = $this->pessoa->get_Pessoa();
        $this->load->view('layout/cabecalho');
        $this->load->view('pessoa/PessoaListar', $data);
        $this->load->view('layout/rodape');
    } 
    
   
}