<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoTiposMovim
 *
 * @ORM\Table(name="Activo_Fijo_Tipos_Movim")
 * @ORM\Entity
 */
class ActivoFijoTiposMovim
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Movim_Activo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idMovimActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Mov_Activo", type="string", length=40, nullable=false)
     */
    private $descMovActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Estado_Activo", type="string", length=3, nullable=false)
     */
    private $idEstadoActivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabiliza", type="boolean", nullable=false)
     */
    private $contabiliza;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Rotulo_Modif", type="boolean", nullable=false)
     */
    private $rotuloModif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ValorIni_Modif", type="boolean", nullable=false)
     */
    private $valoriniModif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DeprecAcum_Modif", type="boolean", nullable=false)
     */
    private $deprecacumModif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ValorRes_Modif", type="boolean", nullable=false)
     */
    private $valorresModif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CtrCosto_Modif", type="boolean", nullable=false)
     */
    private $ctrcostoModif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AreaResp_Modif", type="boolean", nullable=false)
     */
    private $arearespModif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Respons_Modif", type="boolean", nullable=false)
     */
    private $responsModif;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClasifMov", type="string", length=5, nullable=false)
     */
    private $idClasifmov;

    /**
     * @var boolean
     *
     * @ORM\Column(name="CNMB_Modif", type="boolean", nullable=false)
     */
    private $cnmbModif;

    /**
     * @var integer
     *
     * @ORM\Column(name="ValorIni_TipoAjuste", type="smallint", nullable=false)
     */
    private $valoriniTipoajuste;

    /**
     * @var boolean
     *
     * @ORM\Column(name="App_Venta_Baja", type="boolean", nullable=false)
     */
    private $appVentaBaja;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Clasific_Modif", type="boolean", nullable=false)
     */
    private $clasificModif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Especif_Modif", type="boolean", nullable=false)
     */
    private $especifModif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Descripc_Modif", type="boolean", nullable=false)
     */
    private $descripcModif;



    /**
     * Get idMovimActivo
     *
     * @return string 
     */
    public function getIdMovimActivo()
    {
        return $this->idMovimActivo;
    }

    /**
     * Set descMovActivo
     *
     * @param string $descMovActivo
     * @return ActivoFijoTiposMovim
     */
    public function setDescMovActivo($descMovActivo)
    {
        $this->descMovActivo = $descMovActivo;

        return $this;
    }

    /**
     * Get descMovActivo
     *
     * @return string 
     */
    public function getDescMovActivo()
    {
        return $this->descMovActivo;
    }

    /**
     * Set idEstadoActivo
     *
     * @param string $idEstadoActivo
     * @return ActivoFijoTiposMovim
     */
    public function setIdEstadoActivo($idEstadoActivo)
    {
        $this->idEstadoActivo = $idEstadoActivo;

        return $this;
    }

    /**
     * Get idEstadoActivo
     *
     * @return string 
     */
    public function getIdEstadoActivo()
    {
        return $this->idEstadoActivo;
    }

    /**
     * Set contabiliza
     *
     * @param boolean $contabiliza
     * @return ActivoFijoTiposMovim
     */
    public function setContabiliza($contabiliza)
    {
        $this->contabiliza = $contabiliza;

        return $this;
    }

    /**
     * Get contabiliza
     *
     * @return boolean 
     */
    public function getContabiliza()
    {
        return $this->contabiliza;
    }

    /**
     * Set rotuloModif
     *
     * @param boolean $rotuloModif
     * @return ActivoFijoTiposMovim
     */
    public function setRotuloModif($rotuloModif)
    {
        $this->rotuloModif = $rotuloModif;

        return $this;
    }

    /**
     * Get rotuloModif
     *
     * @return boolean 
     */
    public function getRotuloModif()
    {
        return $this->rotuloModif;
    }

    /**
     * Set valoriniModif
     *
     * @param boolean $valoriniModif
     * @return ActivoFijoTiposMovim
     */
    public function setValoriniModif($valoriniModif)
    {
        $this->valoriniModif = $valoriniModif;

        return $this;
    }

    /**
     * Get valoriniModif
     *
     * @return boolean 
     */
    public function getValoriniModif()
    {
        return $this->valoriniModif;
    }

    /**
     * Set deprecacumModif
     *
     * @param boolean $deprecacumModif
     * @return ActivoFijoTiposMovim
     */
    public function setDeprecacumModif($deprecacumModif)
    {
        $this->deprecacumModif = $deprecacumModif;

        return $this;
    }

    /**
     * Get deprecacumModif
     *
     * @return boolean 
     */
    public function getDeprecacumModif()
    {
        return $this->deprecacumModif;
    }

    /**
     * Set valorresModif
     *
     * @param boolean $valorresModif
     * @return ActivoFijoTiposMovim
     */
    public function setValorresModif($valorresModif)
    {
        $this->valorresModif = $valorresModif;

        return $this;
    }

    /**
     * Get valorresModif
     *
     * @return boolean 
     */
    public function getValorresModif()
    {
        return $this->valorresModif;
    }

    /**
     * Set ctrcostoModif
     *
     * @param boolean $ctrcostoModif
     * @return ActivoFijoTiposMovim
     */
    public function setCtrcostoModif($ctrcostoModif)
    {
        $this->ctrcostoModif = $ctrcostoModif;

        return $this;
    }

    /**
     * Get ctrcostoModif
     *
     * @return boolean 
     */
    public function getCtrcostoModif()
    {
        return $this->ctrcostoModif;
    }

    /**
     * Set arearespModif
     *
     * @param boolean $arearespModif
     * @return ActivoFijoTiposMovim
     */
    public function setArearespModif($arearespModif)
    {
        $this->arearespModif = $arearespModif;

        return $this;
    }

    /**
     * Get arearespModif
     *
     * @return boolean 
     */
    public function getArearespModif()
    {
        return $this->arearespModif;
    }

    /**
     * Set responsModif
     *
     * @param boolean $responsModif
     * @return ActivoFijoTiposMovim
     */
    public function setResponsModif($responsModif)
    {
        $this->responsModif = $responsModif;

        return $this;
    }

    /**
     * Get responsModif
     *
     * @return boolean 
     */
    public function getResponsModif()
    {
        return $this->responsModif;
    }

    /**
     * Set idClasifmov
     *
     * @param string $idClasifmov
     * @return ActivoFijoTiposMovim
     */
    public function setIdClasifmov($idClasifmov)
    {
        $this->idClasifmov = $idClasifmov;

        return $this;
    }

    /**
     * Get idClasifmov
     *
     * @return string 
     */
    public function getIdClasifmov()
    {
        return $this->idClasifmov;
    }

    /**
     * Set cnmbModif
     *
     * @param boolean $cnmbModif
     * @return ActivoFijoTiposMovim
     */
    public function setCnmbModif($cnmbModif)
    {
        $this->cnmbModif = $cnmbModif;

        return $this;
    }

    /**
     * Get cnmbModif
     *
     * @return boolean 
     */
    public function getCnmbModif()
    {
        return $this->cnmbModif;
    }

    /**
     * Set valoriniTipoajuste
     *
     * @param integer $valoriniTipoajuste
     * @return ActivoFijoTiposMovim
     */
    public function setValoriniTipoajuste($valoriniTipoajuste)
    {
        $this->valoriniTipoajuste = $valoriniTipoajuste;

        return $this;
    }

    /**
     * Get valoriniTipoajuste
     *
     * @return integer 
     */
    public function getValoriniTipoajuste()
    {
        return $this->valoriniTipoajuste;
    }

    /**
     * Set appVentaBaja
     *
     * @param boolean $appVentaBaja
     * @return ActivoFijoTiposMovim
     */
    public function setAppVentaBaja($appVentaBaja)
    {
        $this->appVentaBaja = $appVentaBaja;

        return $this;
    }

    /**
     * Get appVentaBaja
     *
     * @return boolean 
     */
    public function getAppVentaBaja()
    {
        return $this->appVentaBaja;
    }

    /**
     * Set clasificModif
     *
     * @param boolean $clasificModif
     * @return ActivoFijoTiposMovim
     */
    public function setClasificModif($clasificModif)
    {
        $this->clasificModif = $clasificModif;

        return $this;
    }

    /**
     * Get clasificModif
     *
     * @return boolean 
     */
    public function getClasificModif()
    {
        return $this->clasificModif;
    }

    /**
     * Set especifModif
     *
     * @param boolean $especifModif
     * @return ActivoFijoTiposMovim
     */
    public function setEspecifModif($especifModif)
    {
        $this->especifModif = $especifModif;

        return $this;
    }

    /**
     * Get especifModif
     *
     * @return boolean 
     */
    public function getEspecifModif()
    {
        return $this->especifModif;
    }

    /**
     * Set descripcModif
     *
     * @param boolean $descripcModif
     * @return ActivoFijoTiposMovim
     */
    public function setDescripcModif($descripcModif)
    {
        $this->descripcModif = $descripcModif;

        return $this;
    }

    /**
     * Get descripcModif
     *
     * @return boolean 
     */
    public function getDescripcModif()
    {
        return $this->descripcModif;
    }
}
