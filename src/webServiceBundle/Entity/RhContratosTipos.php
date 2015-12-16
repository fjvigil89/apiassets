<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhContratosTipos
 *
 * @ORM\Table(name="RH_Contratos_Tipos")
 * @ORM\Entity
 */
class RhContratosTipos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Tipo_Contrato", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTipoContrato;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Tipo_Contrato", type="string", length=25, nullable=false)
     */
    private $descTipoContrato;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Plantilla", type="boolean", nullable=false)
     */
    private $plantilla;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LiquidarVacaciones", type="boolean", nullable=false)
     */
    private $liquidarvacaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSPagoMS", type="boolean", nullable=false)
     */
    private $mspagoms;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSEstim", type="boolean", nullable=false)
     */
    private $msestim;

    /**
     * @var boolean
     *
     * @ORM\Column(name="MSEstimEcon", type="boolean", nullable=false)
     */
    private $msestimecon;

    /**
     * @var string
     *
     * @ORM\Column(name="Identificacion", type="string", length=2, nullable=false)
     */
    private $identificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Grupo_Contable_Tipo_Contrato", type="smallint", nullable=false)
     */
    private $grupoContableTipoContrato;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NoPagoFinContrato", type="boolean", nullable=false)
     */
    private $nopagofincontrato;



    /**
     * Get idTipoContrato
     *
     * @return string 
     */
    public function getIdTipoContrato()
    {
        return $this->idTipoContrato;
    }

    /**
     * Set descTipoContrato
     *
     * @param string $descTipoContrato
     * @return RhContratosTipos
     */
    public function setDescTipoContrato($descTipoContrato)
    {
        $this->descTipoContrato = $descTipoContrato;

        return $this;
    }

    /**
     * Get descTipoContrato
     *
     * @return string 
     */
    public function getDescTipoContrato()
    {
        return $this->descTipoContrato;
    }

    /**
     * Set plantilla
     *
     * @param boolean $plantilla
     * @return RhContratosTipos
     */
    public function setPlantilla($plantilla)
    {
        $this->plantilla = $plantilla;

        return $this;
    }

    /**
     * Get plantilla
     *
     * @return boolean 
     */
    public function getPlantilla()
    {
        return $this->plantilla;
    }

    /**
     * Set liquidarvacaciones
     *
     * @param boolean $liquidarvacaciones
     * @return RhContratosTipos
     */
    public function setLiquidarvacaciones($liquidarvacaciones)
    {
        $this->liquidarvacaciones = $liquidarvacaciones;

        return $this;
    }

    /**
     * Get liquidarvacaciones
     *
     * @return boolean 
     */
    public function getLiquidarvacaciones()
    {
        return $this->liquidarvacaciones;
    }

    /**
     * Set mspagoms
     *
     * @param boolean $mspagoms
     * @return RhContratosTipos
     */
    public function setMspagoms($mspagoms)
    {
        $this->mspagoms = $mspagoms;

        return $this;
    }

    /**
     * Get mspagoms
     *
     * @return boolean 
     */
    public function getMspagoms()
    {
        return $this->mspagoms;
    }

    /**
     * Set msestim
     *
     * @param boolean $msestim
     * @return RhContratosTipos
     */
    public function setMsestim($msestim)
    {
        $this->msestim = $msestim;

        return $this;
    }

    /**
     * Get msestim
     *
     * @return boolean 
     */
    public function getMsestim()
    {
        return $this->msestim;
    }

    /**
     * Set msestimecon
     *
     * @param boolean $msestimecon
     * @return RhContratosTipos
     */
    public function setMsestimecon($msestimecon)
    {
        $this->msestimecon = $msestimecon;

        return $this;
    }

    /**
     * Get msestimecon
     *
     * @return boolean 
     */
    public function getMsestimecon()
    {
        return $this->msestimecon;
    }

    /**
     * Set identificacion
     *
     * @param string $identificacion
     * @return RhContratosTipos
     */
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    /**
     * Get identificacion
     *
     * @return string 
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return RhContratosTipos
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return integer 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set grupoContableTipoContrato
     *
     * @param integer $grupoContableTipoContrato
     * @return RhContratosTipos
     */
    public function setGrupoContableTipoContrato($grupoContableTipoContrato)
    {
        $this->grupoContableTipoContrato = $grupoContableTipoContrato;

        return $this;
    }

    /**
     * Get grupoContableTipoContrato
     *
     * @return integer 
     */
    public function getGrupoContableTipoContrato()
    {
        return $this->grupoContableTipoContrato;
    }

    /**
     * Set nopagofincontrato
     *
     * @param boolean $nopagofincontrato
     * @return RhContratosTipos
     */
    public function setNopagofincontrato($nopagofincontrato)
    {
        $this->nopagofincontrato = $nopagofincontrato;

        return $this;
    }

    /**
     * Get nopagofincontrato
     *
     * @return boolean 
     */
    public function getNopagofincontrato()
    {
        return $this->nopagofincontrato;
    }
}
