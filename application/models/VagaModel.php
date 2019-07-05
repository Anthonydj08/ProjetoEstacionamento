    
<?php
class VagaModel extends CI_Model{
    public function get_vaga(){
        if(!empty($this->input->get("search"))){
          $this->db->like('numero', $this->input->get("search"));
        }
        $query = $this->db->get("vaga");
        return $query->result();
    }
    public function inserir(){    
        $data = array(
            'numero' => $this->input->post('numero'),
            'id_veiculo' => $this->input->post('id_veiculo'),
        );
        return $this->db->insert('vaga', $data);
    }
    public function atualizar($id_vaga){
        $data=array(
            
            'id_veiculo' => $this->input->post('id_veiculo'),           
        );
        $this->db->where('id_vaga',$id_vaga);
        return $this->db->update('vaga',$data);     
    }
    public function pesquisar($id_vaga){
        return $this->db->get_where('vaga', array('id_vaga' => $id_vaga))->row();
    }
    public function excluir($id_vaga){
        return $this->db->delete('vaga', array('id_vaga' => $id_vaga));
    }

    function vagaListar() {
	    $query=$this->db->query("select * from vaga");
	    return $query->result();
    }

}
?>