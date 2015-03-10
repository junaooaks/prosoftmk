<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Bairro
 *
 * @ORM\Table(name="bairro", indexes={@ORM\Index(name="fk_endereco_cidade", columns={"cidade_idcidade"})})
 * @ORM\Entity
 */
class Bairro
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idbairro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idbairro;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=100, nullable=false)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=15, nullable=true)
     */
    private $cep;

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
     * @var \Cidade
     *
     * @ORM\ManyToOne(targetEntity="Cidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cidade_idcidade", referencedColumnName="idcidade")
     * })
     */
    private $cidadecidade;


}
