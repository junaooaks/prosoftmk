<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Cidade
 *
 * @ORM\Table(name="cidade", indexes={@ORM\Index(name="fk_cidade_permissaoSistemica1", columns={"permissaoSistemica_idpermissaoSistemica"})})
 * @ORM\Entity
 */
class Cidade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcidade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcidade;

    /**
     * @var string
     *
     * @ORM\Column(name="nomeCidade", type="string", length=100, nullable=false)
     */
    private $nomecidade;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=15, nullable=false)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="uf", type="string", length=2, nullable=false)
     */
    private $uf;

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
