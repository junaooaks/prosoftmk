<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Setor
 *
 * @ORM\Table(name="setor", indexes={@ORM\Index(name="fk_setor_permissaoSistemica1", columns={"permissaoSistemica_idpermissaoSistemica"})})
 * @ORM\Entity
 */
class Setor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idsetor", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsetor;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=50, nullable=true)
     */
    private $descricao;

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
