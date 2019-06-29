<?php
include 'application/models/Pessoa.php';
class BD_Test_Controller extends CI_Controller {
    
    public function index(){
        $lista = $this->db->get('pessoa')->result();
        $pessoas = array();
        
        foreach($lista as $item){
            $pessoa = new Pessoa($item->nome, $item->telefone, $item->id);
            array_push($pessoas, $pessoa);
        }
        
        $data['pessoas'] = $pessoas;
        $this->load->view('telaPessoas',$data);
    }
    
    public function todos(){
        $lista = $this->db->get('pessoa')->result();
        $pessoas = array();
        
        foreach($lista as $item){
            $pessoa = new Aluno($item->nome, $item->telefone, $item->id);
            array_push($pessoas, $pessoa);
        }
        
        $data['pessoas'] = $pessoas;
        $this->load->view('telaPessoas',$data);    
    }
    
    public function porId(){
        $lista = $this->db->get('pessoa')->result();
        $pessoas = array();
        
        foreach($lista('Pessoa') as $item){
            $pessoa = new Pessoa($item->nome, $item->telefone, $item->id);
            array_push($pessoas, $pessoa);
        }
        
        $data['pessoas'] = $pessoas;
        $this->load->view('telaPessoas',$data);
    }
}