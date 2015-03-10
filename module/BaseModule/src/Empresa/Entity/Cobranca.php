<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Cobranca
 *
 * @ORM\Table(name="cobranca", indexes={@ORM\Index(name="fk_cobranca_clientes1", columns={"clientes_idclientes"}), @ORM\Index(name="fk_cobranca_contrato1", columns={"contrato_idcontrato"}), @ORM\Index(name="fk_cobranca_contaBancaria1", columns={"contaBancaria_idcontaBancaria"})})
 * @ORM\Entity
 */
class Cobranca
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcobranca", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcobranca;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataCadastro", type="datetime", nullable=true)
     */
    private $datacadastro;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataUpdate", type="datetime", nullable=true)
     */
    private $dataupdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataVencimento", type="date", nullable=true)
     */
    private $datavencimento;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=18, scale=2, nullable=true)
     */
    private $valor;

    /**
     * @var integer
     *
     * @ORM\Column(name="nossoNumero", type="integer", nullable=true)
     */
    private $nossonumero;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="numeroDocumento", type="string", length=20, nullable=true)
     */
    private $numerodocumento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataPagamento", type="date", nullable=true)
     */
    private $datapagamento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="valorPago", type="date", nullable=true)
     */
    private $valorpago;

    /**
     * @var \Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clientes_idclientes", referencedColumnName="idclientes")
     * })
     */
    private $clientesclientes;

    /**
     * @var \Contabancaria
     *
     * @ORM\ManyToOne(targetEntity="Contabancaria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contaBancaria_idcontaBancaria", referencedColumnName="idcontaBancaria")
     * })
     */
    private $contabancariacontabancaria;

    /**
     * @var \Contrato
     *
     * @ORM\ManyToOne(targetEntity="Contrato")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contrato_idcontrato", referencedColumnName="idcontrato")
     * })
     */
    private $contratocontrato;


}
