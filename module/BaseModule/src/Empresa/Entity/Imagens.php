<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Imagens
 *
 * @ORM\Table(name="imagens", indexes={@ORM\Index(name="fk_imagens_permissaoSistemica1", columns={"permissaoSistemica_idpermissaoSistemica"})})
 * @ORM\Entity
 */
class Imagens
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idimagens", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idimagens;

    /**
     * @var string
     *
     * @ORM\Column(name="imagenGrande", type="string", length=100, nullable=true)
     */
    private $imagengrande;

    /**
     * @var string
     *
     * @ORM\Column(name="imagenMiniatura", type="string", length=100, nullable=true)
     */
    private $imagenminiatura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataCadastro", type="datetime", nullable=true)
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
