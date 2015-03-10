<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Solucao
 *
 * @ORM\Table(name="solucao", indexes={@ORM\Index(name="fk_solucao_torre1", columns={"torre_idtorre"})})
 * @ORM\Entity
 */
class Solucao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsolucao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsolucao;

    /**
     * @var string
     *
     * @ORM\Column(name="nomeSolucao", type="string", length=50, nullable=false)
     */
    private $nomesolucao;

    /**
     * @var string
     *
     * @ORM\Column(name="ipAcesso", type="string", length=20, nullable=false)
     */
    private $ipacesso;

    /**
     * @var string
     *
     * @ORM\Column(name="redeInterna", type="string", length=20, nullable=true)
     */
    private $redeinterna;

    /**
     * @var string
     *
     * @ORM\Column(name="dbm", type="string", length=10, nullable=true)
     */
    private $dbm;

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
