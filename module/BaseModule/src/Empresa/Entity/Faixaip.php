<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Faixaip
 *
 * @ORM\Table(name="faixaip", indexes={@ORM\Index(name="fk_faixaIp_permissaoSistemica1", columns={"permissaoSistemica_idpermissaoSistemica"})})
 * @ORM\Entity
 */
class Faixaip
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idfaixaIp", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfaixaip;

    /**
     * @var string
     *
     * @ORM\Column(name="network", type="string", length=45, nullable=true)
     */
    private $network;

    /**
     * @var string
     *
     * @ORM\Column(name="broadcast", type="string", length=45, nullable=true)
     */
    private $broadcast;

    /**
     * @var string
     *
     * @ORM\Column(name="netmask", type="string", length=45, nullable=true)
     */
    private $netmask;

    /**
     * @var string
     *
     * @ORM\Column(name="geteway", type="string", length=45, nullable=true)
     */
    private $geteway;

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
