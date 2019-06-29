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
        $this->load->view('veiculo/VeiculoInserir', $data);
        $this->load->view('layout/rodape');
    }
    public function mostrar($id) {
        $item = $this->veiculo->pesquisar($id);
        $this->load->view('layout/cabecalho');
        $this->load->view('veiculo/mostrar', array('veiculo' => $item));
        $this->load->view('layout/rodape');
    }
    public function criar() {
        $this->load->view('layout/cabecalho');
        $this->load->view('veiculo/VeiculoInserir');
        $this->load->view('layout/rodape');
    }
    public function inserir() {
        $this->form_validation->set_rules('modelo', 'Modelo', 'required');
        $this->form_validation->set_rules('placa', 'Placa', 'required');
        $this->form_validation->set_rules('placa', 'Placa', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('inicio'));
        } else {
            $this->veiculo->inserir();
            redirect(base_url('inicio'));
        }
    }
    public function editar($id) {
        $item = $this->veiculo->pesquisar($id);
        $this->load->view('layout/cabecalho');
        $this->load->view('veiculo/editar', array('veiculo' => $item));
        $this->load->view('layout/rodape');
    }
    public function atualizar($id) {
        $this->form_validation->set_rules('modelo', 'Modelo', 'required');
        $this->form_validation->set_rules('placa', 'Placa', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('veiculo/edit/' . $id));
        } else {
            $this->veiculo->atualizar($id);
            redirect(base_url('veiculo'));
        }
    }
    public function excluir($id) {
        $item = $this->veiculo->excluir($id);
        redirect(base_url('veiculo'));
    }

    public function todos(){
        $result['data']=$this->VeiculoModel->veiculoListar();
        $this->load->view('layout/cabecalho');
        $this->load->view('veiculo/VeiculoListar',$result);
        $this->load->view('layout/rodape');
        }

  


}