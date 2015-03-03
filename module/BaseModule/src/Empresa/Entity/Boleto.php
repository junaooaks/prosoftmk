<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Boleto
 *
 * @ORM\Table(name="boleto", indexes={@ORM\Index(name="fk_boleto_contaBancaria1", columns={"contaBancaria_idcontaBancaria"})})
 * @ORM\Entity
 */
class Boleto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idboleto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idboleto;

    /**
     * @var string
     *
     * @ORM\Column(name="juros", type="string", length=5, nullable=true)
     */
    private $juros;

    /**
     * @var string
     *
     * @ORM\Column(name="mora", type="string", length=5, nullable=true)
     */
    private $mora;

    /**
     * @var string
     *
     * @ORM\Column(name="instrucao1", type="string", length=100, nullable=true)
     */
    private $instrucao1;

    /**
     * @var string
     *
     * @ORM\Column(name="instrucao2", type="string", length=100, nullable=true)
     */
    private $instrucao2;

    /**
     * @var string
     *
     * @ORM\Column(name="instrucao3", type="string", length=100, nullable=true)
     */
    private $instrucao3;

    /**
     * @var string
     *
     * @ORM\Column(name="instrucao4", type="string", length=100, nullable=true)
     */
    private $instrucao4;

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
     * @var \Contabancaria
     *
     * @ORM\ManyToOne(targetEntity="Contabancaria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contaBancaria_idcontaBancaria", referencedColumnName="idcontaBancaria")
     * })
     */
    private $contabancariacontabancaria;


}
