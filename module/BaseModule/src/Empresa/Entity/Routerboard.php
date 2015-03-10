<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Routerboard
 *
 * @ORM\Table(name="routerboard", indexes={@ORM\Index(name="fk_routerBoard_torre1", columns={"torre_idtorre"})})
 * @ORM\Entity
 */
class Routerboard
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtorre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtorre;

    /**
     * @var string
     *
     * @ORM\Column(name="routerBoard", type="string", length=100, nullable=false)
     */
    private $routerboard;

    /**
     * @var string
     *
     * @ORM\Column(name="ipAcesso", type="string", length=30, nullable=true)
     */
    private $ipacesso;

    /**
     * @var string
     *
     * @ORM\Column(name="ipInterno", type="string", length=30, nullable=true)
     */
    private $ipinterno;

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
     * @var \Torre
     *
     * @ORM\ManyToOne(targetEntity="Torre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="torre_idtorre", referencedColumnName="idtorre")
     * })
     */
    private $torretorre;


}
