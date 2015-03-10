<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity
 */
class Empresa
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idempresa", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idempresa;

    /**
     * @var string
     *
     * @ORM\Column(name="ie", type="string", length=20, nullable=false)
     */
    private $ie;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=20, nullable=false)
     */
    private $cnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="empresa", type="string", length=50, nullable=false)
     */
    private $empresa;

    /**
     * @var string
     *
     * @ORM\Column(name="fantasia", type="string", length=50, nullable=true)
     */
    private $fantasia;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=100, nullable=false)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=100, nullable=true)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=100, nullable=false)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=20, nullable=true)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="uf", type="string", length=2, nullable=false)
     */
    private $uf;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=10, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=15, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="celular", type="string", length=15, nullable=true)
     */
    private $celular;

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


}
