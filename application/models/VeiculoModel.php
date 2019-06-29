    
<?php
class VeiculoModel extends CI_Model{
    public function get_veiculo(){
        if(!empty($this->input->get("search"))){
          $this->db->like('placa', $this->input->get("search"));
        }
        $query = $this->db->get("veiculo");
        return $query->result();
    }

    public function get_pessoa(){
        if(!empty($this->input->get("search"))){
          $this->db->like('nome', $this->input->get("search"));
        }
        $query = $this->db->get("pessoa");
        return $query->result();
    }

    public function inserir(){    
        $data = array(
            'modelo' => $this->input->post('modelo'),
            'placa' => $this->input->post('placa')
        );
        return $this->db->insert('veiculo', $data);
    }
    public function atualizar($id){
        $data=array(
            'modelo' => $this->input->post('modelo'),
            'placa' => $this->input->post('placa')
        );
        if($id==0){
            return $this->db->insert('veiculo',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('veiculo',$data);
        }        
    }
    public function pesquisar($id){
        return $this->db->get_where('veiculo', array('id' => $id))->row();
    }
    public function excluir($id){
        return $this->db->delete('veiculo', array('id' => $id));
    }
    function veiculoListar() {
	    $query=$this->db->query("select * from veiculo");
	    return $query->result();
	}

}
?>