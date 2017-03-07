<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoSubanalisisRegularidades
 *
 * @ORM\Table(name="Tipo_SubAnalisis_Regularidades", indexes={@ORM\Index(name="Ix1_Tipo_SubAna", columns={"Documento"})})
 * @ORM\Entity
 */
class TipoSubanalisisRegularidades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Tipo_SubAnalisis", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoSubanalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_SubAnalisis", type="string", length=50, nullable=false)
     */
    private $tipoSubanalisis;

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
     * Get idTipoSubanalisis
     *
     * @return integer 
     */
    public function getIdTipoSubanalisis()
    {
        return $this->idTipoSubanalisis;
    }

    /**
     * Set tipoSubanalisis
     *
     * @param string $tipoSubanalisis
     * @return TipoSubanalisisRegularidades
     */
    public function setTipoSubanalisis($tipoSubanalisis)
    {
        $this->tipoSubanalisis = $tipoSubanalisis;

        return $this;
    }

    /**
     * Get tipoSubanalisis
     *
     * @return string 
     */
    public function getTipoSubanalisis()
    {
        return $this->tipoSubanalisis;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return TipoSubanalisisRegularidades
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
     * @return TipoSubanalisisRegularidades
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
