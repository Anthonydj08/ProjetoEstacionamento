<?php
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="pessoa")
 */
class Pessoa{
    
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;
   
    /** @Column(type="string") **/
    protected $nome;
    
    /** @Column(type="string") **/
    protected $telefone;
    
    /** @ManyToMany(targetEntity="Turma", inversedBy="alunos") **/
    protected $veiculo;
    
    function __construct($nome = null, $matricula = null, $veiculo = null, $id = null) {
        
        $this->id = $id;
        $this->nome = $nome;
        $this->telefone = $telefone;
        
        if ($veiculo == null){
            $this->veiculo  = new ArrayCollection();
        } else {
            $this->veiculo = $veiculo;
        }
    }
    
    function getId() {
        return $this->id;
    }
    function getNome() {
        return $this->nome;
    }
    function getTelefone() {
        return $this->telefone;
    }
    function getVeiculos() {
        return $this->veiculo;
    }
    function setId($id) {
        $this->id = $id;
    }
    function setNome($nome) {
        $this->nome = $nome;
    }
    function setTelefone($telefone) {
        $this->telefone = $telefone;
    }
    function setVeiculos($veiculo) {
        $this->veiculo = $veiculo;
    }
}