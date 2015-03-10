<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Interfaces
 *
 * @ORM\Table(name="interfaces", indexes={@ORM\Index(name="fk_interfaces_torre1", columns={"torre_idtorre"})})
 * @ORM\Entity
 */
class Interfaces
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idinterfaces", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idinterfaces;

    /**
     * @var string
     *
     * @ORM\Column(name="nomeInterface", type="string", length=50, nullable=true)
     */
    private $nomeinterface;

    /**
     * @var string
     *
     * @ORM\Column(name="ssd", type="string", length=50, nullable=true)
     */
    private $ssd;

    /**
     * @var string
     *
     * @ORM\Column(name="tecnologia", type="string", length=20, nullable=true)
     */
    private $tecnologia;

    /**
     * @var string
     *
     * @ORM\Column(name="ghz", type="string", length=10, nullable=true)
     */
    private $ghz;

    /**
     * @var string
     *
     * @ORM\Column(name="dbm", type="string", length=10, nullable=true)
     */
    private $dbm;

    /**
     * @var string
     *
     * @ORM\Column(name="freguencia", type="string", length=15, nullable=true)
     */
    private $freguencia;

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
     * @var \Routerboard
     *
     * @ORM\ManyToOne(targetEntity="Routerboard")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="torre_idtorre", referencedColumnName="idtorre")
     * })
     */
    private $torretorre;


}
