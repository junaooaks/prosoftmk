<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Permissao
 *
 * @ORM\Table(name="permissao", indexes={@ORM\Index(name="fk_permissao_login1", columns={"login_idlogin"})})
 * @ORM\Entity
 */
class Permissao
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpermissao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpermissao;

    /**
     * @var string
     *
     * @ORM\Column(name="nivel", type="string", length=20, nullable=true)
     */
    private $nivel;

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
     * @var \Login
     *
     * @ORM\ManyToOne(targetEntity="Login")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="login_idlogin", referencedColumnName="idlogin")
     * })
     */
    private $loginlogin;


}
