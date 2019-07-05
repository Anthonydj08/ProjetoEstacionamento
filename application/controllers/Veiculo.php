<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Veiculo extends CI_Controller {
    public $veiculo;
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('veiculoModel');
        $this->veiculo = new veiculoModel;
        
    }
    public function index() {
        $data['data'] = $this->veiculo->get_veiculo();
        $this->load->view('layout/cabecalho');
        $this->load->view('veiculo/VeiculoListar', $data);
        $this->load->view('layout/rodape');
    }
    public function mostrar($id_veiculo) {
        $veiculo = $this->veiculo->pesquisar($id_veiculo);
        $this->load->view('layout/cabecalho');
        $this->load->view('veiculo/mostrar', array('veiculo' => $pessoa));
        $this->load->view('layout/rodape');
    }
    public function criar() {
        $data2['data2'] = $this->pessoa->get_pessoa();
        
        $this->load->view('layout/cabecalho');
        $this->load->view('veiculo/VeiculoInserir');
        $this->load->view('layout/rodape');
    }
    public function inserir() {

        $data2['data2'] = $this->pessoa->get_pessoa();

        $this->form_validation->set_rules('modelo', 'Modelo', 'required');
        $this->form_validation->set_rules('placa', 'Placa', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('inicio'));
        } else {
            $this->veiculo->inserir();
            redirect(base_url('VeiculoListar'));
        }
    }
    public function editar($id_veiculo) {
        $veiculo = $this->veiculo->pesquisar($id_veiculo);
        $this->load->view('layout/cabecalho');
        $this->load->view('veiculo/veiculoEditar', array('veiculo' => $veiculo));
        $this->load->view('layout/rodape');
    }
    public function atualizar($id_veiculo) {
        $this->form_validation->set_rules('modelo', 'Modelo', 'required');
        $this->form_validation->set_rules('placa', 'Placa', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('veiculo/atualizar/' . $id_veiculo));
        } else {
            $this->veiculo->atualizar($id_veiculo);
            redirect(base_url('VeiculoListar'));
        }
    }
    public function excluir($id_veiculo) {
        $veiculo = $this->veiculo->excluir($id_veiculo);
        redirect(base_url('VeiculoListar'));
    }

    public function todos(){
        $data['data'] = $this->veiculo->get_veiculo();
        $this->load->view('layout/cabecalho');
        $this->load->view('veiculo/VeiculoListar', $data);
        $this->load->view('layout/rodape');
    }  

}