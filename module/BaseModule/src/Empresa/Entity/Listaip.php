<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Listaip
 *
 * @ORM\Table(name="listaip", indexes={@ORM\Index(name="fk_listaIP_faixaIp1", columns={"faixaIp_idfaixaIp"})})
 * @ORM\Entity
 */
class Listaip
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idlistaIP", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlistaip;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=20, nullable=true)
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=20, nullable=true)
     */
    private $status;

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
     * @var \Faixaip
     *
     * @ORM\ManyToOne(targetEntity="Faixaip")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="faixaIp_idfaixaIp", referencedColumnName="idfaixaIp")
     * })
     */
    private $faixaipfaixaip;


}
