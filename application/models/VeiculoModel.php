    
<?php
class VeiculoModel extends CI_Model{
    public function get_veiculo(){
        if(!empty($this->input->get("search"))){
          $this->db->like('placa', $this->input->get("search"));
        }
        $query = $this->db->get("veiculo");
        return $query->result();
    }

    public function inserir(){    
        $data = array(
            'modelo' => $this->input->post('modelo'),
            'placa' => $this->input->post('placa'),
            'id_pessoa' => $this->input->post('id_pessoa')
        );
        return $this->db->insert('veiculo', $data);
    }
    public function atualizar($id_veiculo){
        $data=array(
            'modelo' => $this->input->post('modelo'),
            'placa' => $this->input->post('placa'),
            'id_pessoa' => $this->input->post('id_pessoa')
        );
        $this->db->where('id_veiculo',$id_veiculo);
        return $this->db->update('veiculo',$data);   
    }
    public function pesquisar($id_veiculo){
        return $this->db->get_where('veiculo', array('id_veiculo' => $id_veiculo))->row();
    }
    public function excluir($id_veiculo){
        return $this->db->delete('veiculo', array('id_veiculo' => $id_veiculo));
    }
    function veiculoListar() {
	    $query=$this->db->query("select * from veiculo");
	    return $query->result();
	}

    function pessoaListar() {
	    $query=$this->db->query("select * from pessoa");
	    return $query->result();
    }
}
?>