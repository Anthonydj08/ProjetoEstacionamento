    
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
    public function atualizar($id_pessoa){
        $data=array(
            'nome' => $this->input->post('nome'),
            'telefone' => $this->input->post('telefone'),
            'email' => $this->input->post('email')
        );
        $this->db->where('id_pessoa',$id_pessoa);
        return $this->db->update('pessoa',$data);     
    }
    public function pesquisar($id_pessoa){
        return $this->db->get_where('pessoa', array('id_pessoa' => $id_pessoa))->row();
    }
    public function excluir($id_pessoa){
        return $this->db->delete('pessoa', array('id_pessoa' => $id_pessoa));
    }

    function pessoaListar() {
	    $query=$this->db->query("select * from pessoa");
	    return $query->result();
    }

}
?>