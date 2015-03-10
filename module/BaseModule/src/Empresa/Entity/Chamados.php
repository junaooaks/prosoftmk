<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Chamados
 *
 * @ORM\Table(name="chamados", indexes={@ORM\Index(name="fk_chamados_ticket1", columns={"ticket_idticket"}), @ORM\Index(name="fk_chamados_clientes1", columns={"clientes_idclientes"}), @ORM\Index(name="fk_chamados_login1", columns={"login_idlogin"})})
 * @ORM\Entity
 */
class Chamados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idchamados", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idchamados;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=50, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="mensagem", type="text", length=65535, nullable=true)
     */
    private $mensagem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataRegsitro", type="datetime", nullable=true)
     */
    private $dataregsitro;

    /**
     * @var string
     *
     * @ORM\Column(name="laudo", type="text", length=65535, nullable=true)
     */
    private $laudo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataLaudo", type="datetime", nullable=true)
     */
    private $datalaudo;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataPrevisao", type="date", nullable=true)
     */
    private $dataprevisao;

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
     * @var \Clientes
     *
     * @ORM\ManyToOne(targetEntity="Clientes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="clientes_idclientes", referencedColumnName="idclientes")
     * })
     */
    private $clientesclientes;

    /**
     * @var \Login
     *
     * @ORM\ManyToOne(targetEntity="Login")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="login_idlogin", referencedColumnName="idlogin")
     * })
     */
    private $loginlogin;

    /**
     * @var \Ticket
     *
     * @ORM\ManyToOne(targetEntity="Ticket")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ticket_idticket", referencedColumnName="idticket")
     * })
     */
    private $ticketticket;


}
