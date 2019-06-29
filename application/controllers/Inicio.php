<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Inicio extends CI_Controller
{
    public function index()
    {
        $this->load->view('Layout/cabecalho');
        $this->load->view('inicio/inicio');
        $this->load->view('Layout/rodape');
    }
    public function dbtest(){

        $this->load->database();
    
        $feeds = $this->db->get('vts_feeds');
        echo $feeds;die();
    }
}
