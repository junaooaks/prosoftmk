<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Aparelhocliente
 *
 * @ORM\Table(name="aparelhocliente")
 * @ORM\Entity
 */
class Aparelhocliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idaparelhoCliente", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idaparelhocliente;

    /**
     * @var string
     *
     * @ORM\Column(name="marca", type="string", length=45, nullable=true)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="freguencia", type="string", length=20, nullable=true)
     */
    private $freguencia;

    /**
     * @var string
     *
     * @ORM\Column(name="potenciaHardware", type="string", length=10, nullable=true)
     */
    private $potenciahardware;

    /**
     * @var string
     *
     * @ORM\Column(name="mac", type="string", length=45, nullable=true)
     */
    private $mac;

    /**
     * @var string
     *
     * @ORM\Column(name="alimentacao", type="string", length=45, nullable=true)
     */
    private $alimentacao;

    /**
     * @var string
     *
     * @ORM\Column(name="dbi", type="string", length=10, nullable=true)
     */
    private $dbi;

    /**
     * @var string
     *
     * @ORM\Column(name="fonteAlimentacao", type="string", length=45, nullable=true)
     */
    private $fontealimentacao;

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


}
