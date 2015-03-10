<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Contabancaria
 *
 * @ORM\Table(name="contabancaria", indexes={@ORM\Index(name="fk_contaBancaria_permissaoSistemica1", columns={"permissaoSistemica_idpermissaoSistemica"})})
 * @ORM\Entity
 */
class Contabancaria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcontaBancaria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontabancaria;

    /**
     * @var string
     *
     * @ORM\Column(name="banco", type="string", length=45, nullable=true)
     */
    private $banco;

    /**
     * @var string
     *
     * @ORM\Column(name="digitoAgencia", type="string", length=45, nullable=true)
     */
    private $digitoagencia;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroConta", type="string", length=45, nullable=true)
     */
    private $numeroconta;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroBanco", type="string", length=5, nullable=true)
     */
    private $numerobanco;

    /**
     * @var string
     *
     * @ORM\Column(name="moeda", type="string", length=5, nullable=true)
     */
    private $moeda;

    /**
     * @var string
     *
     * @ORM\Column(name="carteira", type="string", length=5, nullable=true)
     */
    private $carteira;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=100, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=100, nullable=true)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=20, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="convenio", type="string", length=15, nullable=true)
     */
    private $convenio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataCadastro", type="datetime", nullable=false)
     */
    private $datacadastro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataUpdate", type="datetime", nullable=true)
     */
    private $dataupdate;

    /**
     * @var \Permissaosistemica
     *
     * @ORM\ManyToOne(targetEntity="Permissaosistemica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="permissaoSistemica_idpermissaoSistemica", referencedColumnName="idpermissaoSistemica")
     * })
     */
    private $permissaosistemicapermissaosistemica;


}
