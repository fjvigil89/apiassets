<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoSubcuentasRegularidades
 *
 * @ORM\Table(name="Tipo_SubCuentas_Regularidades", indexes={@ORM\Index(name="Ix1_Tipo_SubCta", columns={"Documento"})})
 * @ORM\Entity
 */
class TipoSubcuentasRegularidades
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Tipo_Subcuenta", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoSubcuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Subcuenta", type="string", length=50, nullable=false)
     */
    private $tipoSubcuenta;

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
     * Get idTipoSubcuenta
     *
     * @return integer 
     */
    public function getIdTipoSubcuenta()
    {
        return $this->idTipoSubcuenta;
    }

    /**
     * Set tipoSubcuenta
     *
     * @param string $tipoSubcuenta
     * @return TipoSubcuentasRegularidades
     */
    public function setTipoSubcuenta($tipoSubcuenta)
    {
        $this->tipoSubcuenta = $tipoSubcuenta;

        return $this;
    }

    /**
     * Get tipoSubcuenta
     *
     * @return string 
     */
    public function getTipoSubcuenta()
    {
        return $this->tipoSubcuenta;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return TipoSubcuentasRegularidades
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
     * @return TipoSubcuentasRegularidades
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
