<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Alimentacao
 *
 * @ORM\Table(name="alimentacao", indexes={@ORM\Index(name="fk_alimentacao_torre1", columns={"torre_idtorre"})})
 * @ORM\Entity
 */
class Alimentacao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idalimentacao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idalimentacao;

    /**
     * @var string
     *
     * @ORM\Column(name="volt", type="string", length=45, nullable=true)
     */
    private $volt;

    /**
     * @var string
     *
     * @ORM\Column(name="amp", type="string", length=45, nullable=true)
     */
    private $amp;

    /**
     * @var string
     *
     * @ORM\Column(name="alimentacao", type="string", length=45, nullable=true)
     */
    private $alimentacao;

    /**
     * @var integer
     *
     * @ORM\Column(name="qtdBateria", type="integer", nullable=true)
     */
    private $qtdbateria;

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
