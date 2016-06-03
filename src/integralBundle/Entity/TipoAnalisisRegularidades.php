<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoAnalisisRegularidades
 *
 * @ORM\Table(name="Tipo_Analisis_Regularidades", indexes={@ORM\Index(name="Ix_Tipo_Ana", columns={"Documento"})})
 * @ORM\Entity
 */
class TipoAnalisisRegularidades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Tipo_Analisis", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoAnalisis;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Analisis", type="string", length=50, nullable=false)
     */
    private $tipoAnalisis;

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
     * Get idTipoAnalisis
     *
     * @return integer 
     */
    public function getIdTipoAnalisis()
    {
        return $this->idTipoAnalisis;
    }

    /**
     * Set tipoAnalisis
     *
     * @param string $tipoAnalisis
     * @return TipoAnalisisRegularidades
     */
    public function setTipoAnalisis($tipoAnalisis)
    {
        $this->tipoAnalisis = $tipoAnalisis;

        return $this;
    }

    /**
     * Get tipoAnalisis
     *
     * @return string 
     */
    public function getTipoAnalisis()
    {
        return $this->tipoAnalisis;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return TipoAnalisisRegularidades
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
     * @return TipoAnalisisRegularidades
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
