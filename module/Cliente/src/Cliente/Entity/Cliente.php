<?php
namespace Cliente\Entity;


use Doctrine\ORM\Mapping as ORM;
use Zend\Stdlib\Hydrator;
use Zend\Stdlib\Hydrator\ClassMethods;

//
//* @ORM\Table(name="cliente", indexes={@ORM\Index(name="fk_clientes_permissaoSistemica1", columns={"permissaoSistemica_idpermissaoSistemica"})})
 
/**
 * Cliente
 * @ORM\Table(name="cliente")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Cliente\Entity\ClienteRepository")
 */
class Cliente
{
    
    
    /**
     * @var integer
     *
     * @ORM\Column(name="idclientes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idclientes;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=200, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="cpfcnpj", type="string", length=20, nullable=true)
     */
    private $cpfcnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="rg", type="string", length=20, nullable=true)
     */
    private $rg;

    /**
     * @var string
     *
     * @ORM\Column(name="ie", type="string", length=20, nullable=true)
     */
    private $ie;

    /**
     * @var string
     *
     * @ORM\Column(name="telefoner", type="string", length=20, nullable=true)
     */
    private $telefoner;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonec", type="string", length=20, nullable=true)
     */
    private $telefonec;

    /**
     * @var string
     *
     * @ORM\Column(name="celular1", type="string", length=20, nullable=true)
     */
    private $celular1;

    /**
     * @var string
     *
     * @ORM\Column(name="celular2", type="string", length=20, nullable=true)
     */
    private $celular2;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=150, nullable=true)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataNascimento", type="date", nullable=true)
     */
    private $datanascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="estadoCivil", type="string", length=50, nullable=true)
     */
    private $estadocivil;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", length=65535, nullable=true)
     */
    private $observacao;

       
    /*
     * @var \Permissaosistemica
     *
     * @ORM\ManyToOne(targetEntity="Permissaosistemica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permissaoSistemica_idpermissaoSistemica", referencedColumnName="idpermissaoSistemica")
     * })
     */
//    private $permissaosistemicapermissaosistemica;
    
    public function __construct($options = array()) {
        
        (new Hydrator\ClassMethods)->hydrate($options, $this);
        
    }
    
    function getIdclientes() {
        return $this->idclientes;
    }

    function getNome() {
        return $this->nome;
    }

    function getCpfcnpj() {
        return $this->cpfcnpj;
    }

    function getRg() {
        return $this->rg;
    }

    function getIe() {
        return $this->ie;
    }

    function getTelefoner() {
        return $this->telefoner;
    }

    function getTelefonec() {
        return $this->telefonec;
    }

    function getCelular1() {
        return $this->celular1;
    }

    function getCelular2() {
        return $this->celular2;
    }

    function getEmail() {
        return $this->email;
    }

    function getDatanascimento() {
        return $this->datanascimento;
    }

    function getEstadocivil() {
        return $this->estadocivil;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function getDatacadastro() {
        return $this->datacadastro;
    }

    function getDataupdate() {
        return $this->dataupdate;
    }

//    function getPermissaosistemicapermissaosistemica() {
//        return $this->permissaosistemicapermissaosistemica;
//    }

    function setIdclientes($idclientes) {
        $this->idclientes = $idclientes;
        return $this;
    }

    function setNome($nome) {
        $this->nome = $nome;
        return $this;
    }

    function setCpfcnpj($cpfcnpj) {
        $this->cpfcnpj = $cpfcnpj;
        return $this;
    }

    function setRg($rg) {
        $this->rg = $rg;
        return $this;
    }

    function setIe($ie) {
        $this->ie = $ie;
        return $this;
    }

    function setTelefoner($telefoner) {
        $this->telefoner = $telefoner;
        return $this;
    }

    function setTelefonec($telefonec) {
        $this->telefonec = $telefonec;
        return $this;
    }

    function setCelular1($celular1) {
        $this->celular1 = $celular1;
        return $this;
    }

    function setCelular2($celular2) {
        $this->celular2 = $celular2;
        return $this;
    }

    function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    
    /**
     * @ORM\PrePersist
     */
    function setDatanascimento($datanascimento) {
        $this->datanascimento = new \DateTime($datanascimento);
        return $this;
    }

    function setEstadocivil($estadocivil) {
        $this->estadocivil = $estadocivil;
        return $this;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
        return $this;
    }

    

//    function setPermissaosistemicapermissaosistemica(\Permissaosistemica $permissaosistemicapermissaosistemica) {
//        $this->permissaosistemicapermissaosistemica = $permissaosistemicapermissaosistemica;
//    }

    public function __toString() {
        return $this->nome;
    }
    
    public function toArray(){
        return (new ClassMethods())->extract($this);
    }



}
