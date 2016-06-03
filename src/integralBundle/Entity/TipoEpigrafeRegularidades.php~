<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoEpigrafeRegularidades
 *
 * @ORM\Table(name="Tipo_Epigrafe_Regularidades", indexes={@ORM\Index(name="Ix1_Tipo_Epi", columns={"Documento"})})
 * @ORM\Entity
 */
class TipoEpigrafeRegularidades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Tipo_Epigrafe", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoEpigrafe;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Epigrafe", type="string", length=50, nullable=false)
     */
    private $tipoEpigrafe;

    /**
     * @var string
     *
     * @ORM\Column(name="Documento", type="string", length=10, nullable=false)
     */
    private $documento;

    /**
     * @var boolean
     *
     * @ORM\Column(name="EsDe_MC", type="boolean", nullable=false)
     */
    private $esdeMc;



    /**
     * Get idTipoEpigrafe
     *
     * @return integer 
     */
    public function getIdTipoEpigrafe()
    {
        return $this->idTipoEpigrafe;
    }

    /**
     * Set tipoEpigrafe
     *
     * @param string $tipoEpigrafe
     * @return TipoEpigrafeRegularidades
     */
    public function setTipoEpigrafe($tipoEpigrafe)
    {
        $this->tipoEpigrafe = $tipoEpigrafe;

        return $this;
    }

    /**
     * Get tipoEpigrafe
     *
     * @return string 
     */
    public function getTipoEpigrafe()
    {
        return $this->tipoEpigrafe;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return TipoEpigrafeRegularidades
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set esdeMc
     *
     * @param boolean $esdeMc
     * @return TipoEpigrafeRegularidades
     */
    public function setEsdeMc($esdeMc)
    {
        $this->esdeMc = $esdeMc;

        return $this;
    }

    /**
     * Get esdeMc
     *
     * @return boolean 
     */
    public function getEsdeMc()
    {
        return $this->esdeMc;
    }
}
