<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vaga extends CI_Controller {
    public $vaga;
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('VagaModel');
        $this->vaga = new VagaModel;
    }
    public function index() {
        $data['data'] = $this->vaga->get_Vaga();
        $this->load->view('layout/cabecalho');
        $this->load->view('vaga/VagaListar', $data);
        $this->load->view('layout/rodape');
    }
    public function mostrar($id_vaga) {
        $vaga = $this->vaga->pesquisar($id_vaga);
        $this->load->view('layout/cabecalho');
        $this->load->view('vaga/VagaMostrar', array('vaga' => $vaga));
        $this->load->view('layout/rodape');
    }
    public function criar() {
        $this->load->view('layout/cabecalho');
        $this->load->view('vaga/VagaInserir');
        $this->load->view('layout/rodape');
    }
    public function inserir() {
        $this->form_validation->set_rules('numero', 'Numero', 'required');    
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('inicio'));
        } else {
            $this->vaga->inserir();
            redirect(base_url('inicio'));
        }
    }

    public function editar($id_vaga) {
        $vaga = $this->vaga->pesquisar($id_vaga);
        $this->load->view('layout/cabecalho');
        $this->load->view('vaga/vagaEditar', array('vaga' => $vaga));
        $this->load->view('layout/rodape');
    }
    public function atualizar($id_vaga) {
        $this->form_validation->set_rules('id_veiculo', 'id_veiculo', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('vaga/atualizar/' . $id_vaga));
        } else {
            $this->vaga->atualizar($id_vaga);
            redirect(base_url('inicio'));
        }
    }
    public function excluir($id_vaga) {
        $vaga = $this->vaga->excluir($id_vaga);
        redirect(base_url('VagaListar'));
    }

    public function todos(){
        $data['data'] = $this->vaga->get_Vaga();
        $this->load->view('layout/cabecalho');
        $this->load->view('vaga/VagaListar', $data);
        $this->load->view('layout/rodape');

    }  
}