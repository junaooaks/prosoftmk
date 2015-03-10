<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Endereco
 *
 * @ORM\Table(name="endereco", indexes={@ORM\Index(name="fk_endereco_bairro1", columns={"bairro_idbairro"})})
 * @ORM\Entity
 */
class Endereco
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idendereco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idendereco;

    /**
     * @var string
     *
     * @ORM\Column(name="rua", type="string", length=200, nullable=true)
     */
    private $rua;

    /**
     * @var string
     *
     * @ORM\Column(name="av", type="string", length=200, nullable=true)
     */
    private $av;

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
     * @var \Bairro
     *
     * @ORM\ManyToOne(targetEntity="Bairro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bairro_idbairro", referencedColumnName="idbairro")
     * })
     */
    private $bairrobairro;


}
