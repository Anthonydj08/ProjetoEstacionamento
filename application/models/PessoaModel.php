    
<?php
class PessoaModel extends CI_Model{
    public function get_pessoa(){
        if(!empty($this->input->get("search"))){
          $this->db->like('nome', $this->input->get("search"));
        }
        $query = $this->db->get("pessoa");
        return $query->result();
    }
    public function inserir(){    
        $data = array(
            'nome' => $this->input->post('nome'),
            'telefone' => $this->input->post('telefone'),
            'email' => $this->input->post('email')
        );
        return $this->db->insert('pessoa', $data);
    }
    public function atualizar($id){
        $data=array(
            'nome' => $this->input->post('nome'),
            'telefone' => $this->input->post('telefone'),
            'email' => $this->input->post('email')
        );
        if($id==0){
            return $this->db->insert('pessoa',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('pessoa',$data);
        }        
    }
    public function pesquisar($id){
        return $this->db->get_where('pessoa', array('id' => $id))->row();
    }
    public function excluir($id){
        return $this->db->delete('pessoa', array('id' => $id));
    }

    function pessoaListar() {
	    $query=$this->db->query("select * from pessoa");
	    return $query->result();
    }
    
    function deleterecords($id_pessoa){
        $this->db->query("delete  from pessoa where id_pessoa='".$id_pessoa."'");
    } 
}
?>