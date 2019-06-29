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
        $this->load->view('pessoa/inserir', $data);
        $this->load->view('layout/rodape');
    }
    public function mostrar($id) {
        $pessoa = $this->pessoa->pesquisar($id);
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


    public function editar($id) {
        $pessoa = $this->pessoa->pesquisar($id);
        $this->load->view('layout/cabecalho');
        $this->load->view('pessoa/editar', array('pessoa' => $pessoa));
        $this->load->view('layout/rodape');
    }
    public function atualizar($id) {
        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('telefone', 'Telefone', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('pessoa/edit/' . $id));
        } else {
            $this->pessoa->atualizar($id);
            redirect(base_url('pessoa'));
        }
    }
    public function excluir($id) {
        $pessoa = $this->pessoa->excluir($id);
        redirect(base_url('pessoa'));
    }

    public function todos(){
        $result['data']=$this->PessoaModel->pessoaListar();
        $this->load->view('layout/cabecalho');
        $this->load->view('pessoa/PessoaListar',$result);
        $this->load->view('layout/rodape');
    }

    public function deletedata(){
        $id_pessoa=$this->input->get('id_pessoa');
        $this->PessoaModel->deleterecords($id_pessoa);
        redirect(base_url('PessoaListar'));
       // redirect("PessoaListar");
    }
    
}