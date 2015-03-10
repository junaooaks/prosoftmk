<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Permissaosistemica
 *
 * @ORM\Table(name="permissaosistemica", indexes={@ORM\Index(name="fk_permissaoSistemica_franquiaScm1", columns={"franquiaScm_idfranquiasScm"}), @ORM\Index(name="fk_permissaoSistemica_empresa1", columns={"empresa_idempresa"})})
 * @ORM\Entity
 */
class Permissaosistemica
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpermissaoSistemica", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpermissaosistemica;

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
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresa_idempresa", referencedColumnName="idempresa")
     * })
     */
    private $empresaempresa;

    /**
     * @var \Franquiascm
     *
     * @ORM\ManyToOne(targetEntity="Franquiascm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="franquiaScm_idfranquiasScm", referencedColumnName="idfranquiasScm")
     * })
     */
    private $franquiascmfranquiasscm;


}
