<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Formacaoacademica
 *
 * @ORM\Table(name="formacaoacademica", indexes={@ORM\Index(name="fk_formacaoAcademica_funcionario1", columns={"funcionario_idfuncionario"})})
 * @ORM\Entity
 */
class Formacaoacademica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idformacaoAcademica", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformacaoacademica;

    /**
     * @var string
     *
     * @ORM\Column(name="curso", type="string", length=100, nullable=true)
     */
    private $curso;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", length=65535, nullable=true)
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
     * @var \Funcionario
     *
     * @ORM\ManyToOne(targetEntity="Funcionario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="funcionario_idfuncionario", referencedColumnName="idfuncionario")
     * })
     */
    private $funcionariofuncionario;


}
