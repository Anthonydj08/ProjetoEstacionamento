<?php
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity @Table(name="turma")
 * */
class Veiculo {
    /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;
    /** @Column(type="string") * */
    protected $modelo;
    /** @Column(type="string") * */
    protected $placa;
    
    /** @ManyToMany(targetEntity="Aluno", mappedBy="turmas") **/
    protected $pessoa;

    function __construct( $modelo = null, $placa = null, $id = null, $pessoa = null) {
        $this->pessoa = new ArrayCollection();        
        $this->id = $id;
        $this->modelo = $modelo;
        $this->placa = $placa;
        
        if ($pessoa == null){
            $this->pessoa = new ArrayCollection();
        } else {
            $this->pessoa = $pessoa;
        }
    }
    function getId() {
        return $this->id;
    }
    function getPlaca() {
        return $this->placa;
    }
    function getModelo() {
        return $this->modelo;
    }
    function getpessoa() {
        return $this->pessoa;
    }
    function setId($id) {
        $this->id = $id;
    }
    function setPlaca($placa) {
        $this->placa = $placa;
    }
    function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    function setpessoa($pessoa) {
        $this->pessoa = $pessoa;
    }
}