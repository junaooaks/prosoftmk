<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Franquiascm
 *
 * @ORM\Table(name="franquiascm")
 * @ORM\Entity
 */
class Franquiascm
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idfranquiasScm", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfranquiasscm;

    /**
     * @var string
     *
     * @ORM\Column(name="nomeResponsavel", type="string", length=100, nullable=false)
     */
    private $nomeresponsavel;

    /**
     * @var string
     *
     * @ORM\Column(name="cpfCnpj", type="string", length=15, nullable=false)
     */
    private $cpfcnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="identidadeIE", type="string", length=15, nullable=false)
     */
    private $identidadeie;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=150, nullable=false)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=10, nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", length=45, nullable=true)
     */
    private $complemento;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=45, nullable=true)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=45, nullable=true)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="uf", type="string", length=3, nullable=true)
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


}
