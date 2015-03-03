<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Antena
 *
 * @ORM\Table(name="antena", indexes={@ORM\Index(name="fk_antena_interfaces1", columns={"interfaces_idinterfaces"})})
 * @ORM\Entity
 */
class Antena
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idantena", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idantena;

    /**
     * @var string
     *
     * @ORM\Column(name="marcaAntena", type="string", length=50, nullable=true)
     */
    private $marcaantena;

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
     * @var \Interfaces
     *
     * @ORM\ManyToOne(targetEntity="Interfaces")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="interfaces_idinterfaces", referencedColumnName="idinterfaces")
     * })
     */
    private $interfacesinterfaces;


}
