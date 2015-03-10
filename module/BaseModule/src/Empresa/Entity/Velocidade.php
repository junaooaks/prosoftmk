<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Velocidade
 *
 * @ORM\Table(name="velocidade", indexes={@ORM\Index(name="fk_velocidade_permissaoSistemica1", columns={"permissaoSistemica_idpermissaoSistemica"})})
 * @ORM\Entity
 */
class Velocidade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idvelocidade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idvelocidade;

    /**
     * @var string
     *
     * @ORM\Column(name="nomePlano", type="string", length=50, nullable=false)
     */
    private $nomeplano;

    /**
     * @var string
     *
     * @ORM\Column(name="txkbps", type="string", length=10, nullable=true)
     */
    private $txkbps;

    /**
     * @var string
     *
     * @ORM\Column(name="rxkbps", type="string", length=10, nullable=true)
     */
    private $rxkbps;

    /**
     * @var string
     *
     * @ORM\Column(name="txmaximo", type="string", length=10, nullable=true)
     */
    private $txmaximo;

    /**
     * @var string
     *
     * @ORM\Column(name="rxmaximo", type="string", length=10, nullable=true)
     */
    private $rxmaximo;

    /**
     * @var string
     *
     * @ORM\Column(name="txlimiar", type="string", length=10, nullable=true)
     */
    private $txlimiar;

    /**
     * @var string
     *
     * @ORM\Column(name="rxlimiar", type="string", length=10, nullable=true)
     */
    private $rxlimiar;

    /**
     * @var string
     *
     * @ORM\Column(name="tempo", type="string", length=10, nullable=true)
     */
    private $tempo;

    /**
     * @var string
     *
     * @ORM\Column(name="prioridade", type="string", length=10, nullable=true)
     */
    private $prioridade;

    /**
     * @var string
     *
     * @ORM\Column(name="txminimo", type="string", length=10, nullable=true)
     */
    private $txminimo;

    /**
     * @var string
     *
     * @ORM\Column(name="rxminimo", type="string", length=10, nullable=true)
     */
    private $rxminimo;

    /**
     * @var float
     *
     * @ORM\Column(name="valor", type="float", precision=18, scale=2, nullable=true)
     */
    private $valor;

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
