<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Ticket
 *
 * @ORM\Table(name="ticket", indexes={@ORM\Index(name="fk_ticket_permissaoSistemica1", columns={"permissaoSistemica_idpermissaoSistemica"})})
 * @ORM\Entity
 */
class Ticket
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idticket", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idticket;

    /**
     * @var string
     *
     * @ORM\Column(name="prioridade", type="string", length=45, nullable=true)
     */
    private $prioridade;

    /**
     * @var string
     *
     * @ORM\Column(name="departamento", type="string", length=50, nullable=true)
     */
    private $departamento;

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
