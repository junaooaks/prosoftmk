<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Contrato
 *
 * @ORM\Table(name="contrato", indexes={@ORM\Index(name="fk_contrato_clientes1", columns={"clientes_idclientes"}), @ORM\Index(name="fk_contrato_aparelhoCliente1", columns={"aparelhoCliente_idaparelhoCliente"}), @ORM\Index(name="fk_contrato_listaIP1", columns={"listaIP_idlistaIP"})})
 * @ORM\Entity
 */
class Contrato
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcontrato", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontrato;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataContrato", type="datetime", nullable=false)
     */
    private $datacontrato;

    /**
     * @var string
     *
     * @ORM\Column(name="isentoCobranca", type="string", length=2, nullable=true)
     */
    private $isentocobranca;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=45, nullable=true)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=100, nullable=true)
     */
    private $senha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataVencimento", type="date", nullable=true)
     */
    private $datavencimento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataBloqueio", type="date", nullable=true)
     */
    private $databloqueio;

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
     * @var float
     *
     * @ORM\Column(name="valorCobrar", type="float", precision=18, scale=2, nullable=true)
     */
    private $valorcobrar;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=5, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", length=65535, nullable=true)
     */
    private $observacao;

    /**
     * @var \Aparelhocliente
     *
     * @ORM\ManyToOne(targetEntity="Aparelhocliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aparelhoCliente_idaparelhoCliente", referencedColumnName="idaparelhoCliente")
     * })
     */
    private $aparelhoclienteaparelhocliente;

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
     * @var \Listaip
     *
     * @ORM\ManyToOne(targetEntity="Listaip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="listaIP_idlistaIP", referencedColumnName="idlistaIP")
     * })
     */
    private $listaiplistaip;


}
