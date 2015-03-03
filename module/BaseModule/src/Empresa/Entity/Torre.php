<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Torre
 *
 * @ORM\Table(name="torre", indexes={@ORM\Index(name="fk_torre_permissaoSistemica1", columns={"permissaoSistemica_idpermissaoSistemica"})})
 * @ORM\Entity
 */
class Torre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idtorre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtorre;

    /**
     * @var string
     *
     * @ORM\Column(name="apelidoTorre", type="string", length=50, nullable=true)
     */
    private $apelidotorre;

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
