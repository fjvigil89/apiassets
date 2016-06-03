<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoMovim
 *
 * @ORM\Table(name="Activo_Fijo_Movim")
 * @ORM\Entity
 */
class ActivoFijoMovim
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Mov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idMov;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Mov", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoMov;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Movim_Activo", type="string", length=3, nullable=false)
     */
    private $idMovimActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Mov", type="datetime", nullable=false)
     */
    private $fechaMov;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ActivoFijo", type="string", length=15, nullable=false)
     */
    private $idActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_RotuloOld", type="string", length=15, nullable=false)
     */
    private $idRotuloold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_RotuloNew", type="string", length=15, nullable=false)
     */
    private $idRotulonew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_InicialOld", type="integer", nullable=false)
     */
    private $valorInicialold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_InicialAjuste", type="integer", nullable=false)
     */
    private $valorInicialajuste;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_AcumuladaOld", type="integer", nullable=false)
     */
    private $depreciacionAcumuladaold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_AcumuladaAjuste", type="integer", nullable=false)
     */
    private $depreciacionAcumuladaajuste;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_ResidualOld", type="integer", nullable=false)
     */
    private $valorResidualold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_ResidualAjuste", type="integer", nullable=false)
     */
    private $valorResidualajuste;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CcostoOld", type="string", length=10, nullable=false)
     */
    private $idCcostoold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CcostoNew", type="string", length=10, nullable=false)
     */
    private $idCcostonew;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_AreaRespOld", type="string", length=10, nullable=false)
     */
    private $idArearespold;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_AreaRespNew", type="string", length=10, nullable=false)
     */
    private $idArearespnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_EmpleadoOld", type="string", length=15, nullable=false)
     */
    private $idEmpleadoold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_EmpleadoNew", type="string", length=15, nullable=false)
     */
    private $idEmpleadonew;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabilizado", type="boolean", nullable=false)
     */
    private $contabilizado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Comprobante", type="integer", nullable=false)
     */
    private $idComprobante;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Comprobante", type="integer", nullable=false)
     */
    private $anoComprobante;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Comprobante", type="smallint", nullable=false)
     */
    private $mesComprobante;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Referencia", type="integer", nullable=false)
     */
    private $referencia;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmacenRef", type="string", length=5, nullable=false)
     */
    private $idAlmacenref;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Referencia", type="integer", nullable=false)
     */
    private $anoReferencia;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var boolean
     *
     * @ORM\Column(name="XTrans", type="boolean", nullable=false)
     */
    private $xtrans;

    /**
     * @var string
     *
     * @ORM\Column(name="OP", type="string", length=15, nullable=false)
     */
    private $op;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FechaOP", type="datetime", nullable=false)
     */
    private $fechaop;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="HoraOP", type="datetime", nullable=false)
     */
    private $horaop;

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
     * @var integer
     *
     * @ORM\Column(name="Valor_InicialOldMC", type="integer", nullable=false)
     */
    private $valorInicialoldmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_InicialAjusteMC", type="integer", nullable=false)
     */
    private $valorInicialajustemc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_AcumuladaOldMC", type="integer", nullable=false)
     */
    private $depreciacionAcumuladaoldmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_AcumuladaAjusteMC", type="integer", nullable=false)
     */
    private $depreciacionAcumuladaajustemc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_ResidualOldMC", type="integer", nullable=false)
     */
    private $valorResidualoldmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_ResidualAjusteMC", type="integer", nullable=false)
     */
    private $valorResidualajustemc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DisponibleOld", type="boolean", nullable=false)
     */
    private $disponibleold;

    /**
     * @var boolean
     *
     * @ORM\Column(name="DisponibleNew", type="boolean", nullable=false)
     */
    private $disponiblenew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CausaMov", type="string", length=5, nullable=false)
     */
    private $idCausamov;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_User", type="string", length=15, nullable=false)
     */
    private $idUser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Op", type="datetime", nullable=false)
     */
    private $fechaOp;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Proveedor", type="string", length=15, nullable=false)
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Proveedor", type="string", length=50, nullable=false)
     */
    private $descProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ActivoFijo", type="string", length=255, nullable=false)
     */
    private $descActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="CNMBOld", type="string", length=50, nullable=false)
     */
    private $cnmbold;

    /**
     * @var string
     *
     * @ORM\Column(name="CNMBNew", type="string", length=50, nullable=false)
     */
    private $cnmbnew;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tasa_DepreciacionOld", type="integer", nullable=false)
     */
    private $tasaDepreciacionold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tasa_DepreciacionNew", type="integer", nullable=false)
     */
    private $tasaDepreciacionnew;

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
     * @var string
     *
     * @ORM\Column(name="Id_Estado_Activo", type="string", length=3, nullable=false)
     */
    private $idEstadoActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

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
     * @var string
     *
     * @ORM\Column(name="Id_ClasificacionOld", type="string", length=5, nullable=false)
     */
    private $idClasificacionold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClasificacionNew", type="string", length=5, nullable=false)
     */
    private $idClasificacionnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_EspecificacionOld", type="string", length=15, nullable=false)
     */
    private $idEspecificacionold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_EspecificacionNew", type="string", length=15, nullable=false)
     */
    private $idEspecificacionnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ActivoFijoNew", type="string", length=255, nullable=false)
     */
    private $descActivofijonew;



    /**
     * Set idMov
     *
     * @param integer $idMov
     * @return ActivoFijoMovim
     */
    public function setIdMov($idMov)
    {
        $this->idMov = $idMov;

        return $this;
    }

    /**
     * Get idMov
     *
     * @return integer 
     */
    public function getIdMov()
    {
        return $this->idMov;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return ActivoFijoMovim
     */
    public function setIdAlmacen($idAlmacen)
    {
        $this->idAlmacen = $idAlmacen;

        return $this;
    }

    /**
     * Get idAlmacen
     *
     * @return string 
     */
    public function getIdAlmacen()
    {
        return $this->idAlmacen;
    }

    /**
     * Set anoMov
     *
     * @param integer $anoMov
     * @return ActivoFijoMovim
     */
    public function setAnoMov($anoMov)
    {
        $this->anoMov = $anoMov;

        return $this;
    }

    /**
     * Get anoMov
     *
     * @return integer 
     */
    public function getAnoMov()
    {
        return $this->anoMov;
    }

    /**
     * Set confirmada
     *
     * @param integer $confirmada
     * @return ActivoFijoMovim
     */
    public function setConfirmada($confirmada)
    {
        $this->confirmada = $confirmada;

        return $this;
    }

    /**
     * Get confirmada
     *
     * @return integer 
     */
    public function getConfirmada()
    {
        return $this->confirmada;
    }

    /**
     * Set idMovimActivo
     *
     * @param string $idMovimActivo
     * @return ActivoFijoMovim
     */
    public function setIdMovimActivo($idMovimActivo)
    {
        $this->idMovimActivo = $idMovimActivo;

        return $this;
    }

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
     * Set nota
     *
     * @param string $nota
     * @return ActivoFijoMovim
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set fechaMov
     *
     * @param \DateTime $fechaMov
     * @return ActivoFijoMovim
     */
    public function setFechaMov($fechaMov)
    {
        $this->fechaMov = $fechaMov;

        return $this;
    }

    /**
     * Get fechaMov
     *
     * @return \DateTime 
     */
    public function getFechaMov()
    {
        return $this->fechaMov;
    }

    /**
     * Set idActivofijo
     *
     * @param string $idActivofijo
     * @return ActivoFijoMovim
     */
    public function setIdActivofijo($idActivofijo)
    {
        $this->idActivofijo = $idActivofijo;

        return $this;
    }

    /**
     * Get idActivofijo
     *
     * @return string 
     */
    public function getIdActivofijo()
    {
        return $this->idActivofijo;
    }

    /**
     * Set idRotuloold
     *
     * @param string $idRotuloold
     * @return ActivoFijoMovim
     */
    public function setIdRotuloold($idRotuloold)
    {
        $this->idRotuloold = $idRotuloold;

        return $this;
    }

    /**
     * Get idRotuloold
     *
     * @return string 
     */
    public function getIdRotuloold()
    {
        return $this->idRotuloold;
    }

    /**
     * Set idRotulonew
     *
     * @param string $idRotulonew
     * @return ActivoFijoMovim
     */
    public function setIdRotulonew($idRotulonew)
    {
        $this->idRotulonew = $idRotulonew;

        return $this;
    }

    /**
     * Get idRotulonew
     *
     * @return string 
     */
    public function getIdRotulonew()
    {
        return $this->idRotulonew;
    }

    /**
     * Set valorInicialold
     *
     * @param integer $valorInicialold
     * @return ActivoFijoMovim
     */
    public function setValorInicialold($valorInicialold)
    {
        $this->valorInicialold = $valorInicialold;

        return $this;
    }

    /**
     * Get valorInicialold
     *
     * @return integer 
     */
    public function getValorInicialold()
    {
        return $this->valorInicialold;
    }

    /**
     * Set valorInicialajuste
     *
     * @param integer $valorInicialajuste
     * @return ActivoFijoMovim
     */
    public function setValorInicialajuste($valorInicialajuste)
    {
        $this->valorInicialajuste = $valorInicialajuste;

        return $this;
    }

    /**
     * Get valorInicialajuste
     *
     * @return integer 
     */
    public function getValorInicialajuste()
    {
        return $this->valorInicialajuste;
    }

    /**
     * Set depreciacionAcumuladaold
     *
     * @param integer $depreciacionAcumuladaold
     * @return ActivoFijoMovim
     */
    public function setDepreciacionAcumuladaold($depreciacionAcumuladaold)
    {
        $this->depreciacionAcumuladaold = $depreciacionAcumuladaold;

        return $this;
    }

    /**
     * Get depreciacionAcumuladaold
     *
     * @return integer 
     */
    public function getDepreciacionAcumuladaold()
    {
        return $this->depreciacionAcumuladaold;
    }

    /**
     * Set depreciacionAcumuladaajuste
     *
     * @param integer $depreciacionAcumuladaajuste
     * @return ActivoFijoMovim
     */
    public function setDepreciacionAcumuladaajuste($depreciacionAcumuladaajuste)
    {
        $this->depreciacionAcumuladaajuste = $depreciacionAcumuladaajuste;

        return $this;
    }

    /**
     * Get depreciacionAcumuladaajuste
     *
     * @return integer 
     */
    public function getDepreciacionAcumuladaajuste()
    {
        return $this->depreciacionAcumuladaajuste;
    }

    /**
     * Set valorResidualold
     *
     * @param integer $valorResidualold
     * @return ActivoFijoMovim
     */
    public function setValorResidualold($valorResidualold)
    {
        $this->valorResidualold = $valorResidualold;

        return $this;
    }

    /**
     * Get valorResidualold
     *
     * @return integer 
     */
    public function getValorResidualold()
    {
        return $this->valorResidualold;
    }

    /**
     * Set valorResidualajuste
     *
     * @param integer $valorResidualajuste
     * @return ActivoFijoMovim
     */
    public function setValorResidualajuste($valorResidualajuste)
    {
        $this->valorResidualajuste = $valorResidualajuste;

        return $this;
    }

    /**
     * Get valorResidualajuste
     *
     * @return integer 
     */
    public function getValorResidualajuste()
    {
        return $this->valorResidualajuste;
    }

    /**
     * Set idCcostoold
     *
     * @param string $idCcostoold
     * @return ActivoFijoMovim
     */
    public function setIdCcostoold($idCcostoold)
    {
        $this->idCcostoold = $idCcostoold;

        return $this;
    }

    /**
     * Get idCcostoold
     *
     * @return string 
     */
    public function getIdCcostoold()
    {
        return $this->idCcostoold;
    }

    /**
     * Set idCcostonew
     *
     * @param string $idCcostonew
     * @return ActivoFijoMovim
     */
    public function setIdCcostonew($idCcostonew)
    {
        $this->idCcostonew = $idCcostonew;

        return $this;
    }

    /**
     * Get idCcostonew
     *
     * @return string 
     */
    public function getIdCcostonew()
    {
        return $this->idCcostonew;
    }

    /**
     * Set idArearespold
     *
     * @param string $idArearespold
     * @return ActivoFijoMovim
     */
    public function setIdArearespold($idArearespold)
    {
        $this->idArearespold = $idArearespold;

        return $this;
    }

    /**
     * Get idArearespold
     *
     * @return string 
     */
    public function getIdArearespold()
    {
        return $this->idArearespold;
    }

    /**
     * Set idArearespnew
     *
     * @param string $idArearespnew
     * @return ActivoFijoMovim
     */
    public function setIdArearespnew($idArearespnew)
    {
        $this->idArearespnew = $idArearespnew;

        return $this;
    }

    /**
     * Get idArearespnew
     *
     * @return string 
     */
    public function getIdArearespnew()
    {
        return $this->idArearespnew;
    }

    /**
     * Set idEmpleadoold
     *
     * @param string $idEmpleadoold
     * @return ActivoFijoMovim
     */
    public function setIdEmpleadoold($idEmpleadoold)
    {
        $this->idEmpleadoold = $idEmpleadoold;

        return $this;
    }

    /**
     * Get idEmpleadoold
     *
     * @return string 
     */
    public function getIdEmpleadoold()
    {
        return $this->idEmpleadoold;
    }

    /**
     * Set idEmpleadonew
     *
     * @param string $idEmpleadonew
     * @return ActivoFijoMovim
     */
    public function setIdEmpleadonew($idEmpleadonew)
    {
        $this->idEmpleadonew = $idEmpleadonew;

        return $this;
    }

    /**
     * Get idEmpleadonew
     *
     * @return string 
     */
    public function getIdEmpleadonew()
    {
        return $this->idEmpleadonew;
    }

    /**
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return ActivoFijoMovim
     */
    public function setContabilizado($contabilizado)
    {
        $this->contabilizado = $contabilizado;

        return $this;
    }

    /**
     * Get contabilizado
     *
     * @return boolean 
     */
    public function getContabilizado()
    {
        return $this->contabilizado;
    }

    /**
     * Set idComprobante
     *
     * @param integer $idComprobante
     * @return ActivoFijoMovim
     */
    public function setIdComprobante($idComprobante)
    {
        $this->idComprobante = $idComprobante;

        return $this;
    }

    /**
     * Get idComprobante
     *
     * @return integer 
     */
    public function getIdComprobante()
    {
        return $this->idComprobante;
    }

    /**
     * Set anoComprobante
     *
     * @param integer $anoComprobante
     * @return ActivoFijoMovim
     */
    public function setAnoComprobante($anoComprobante)
    {
        $this->anoComprobante = $anoComprobante;

        return $this;
    }

    /**
     * Get anoComprobante
     *
     * @return integer 
     */
    public function getAnoComprobante()
    {
        return $this->anoComprobante;
    }

    /**
     * Set mesComprobante
     *
     * @param integer $mesComprobante
     * @return ActivoFijoMovim
     */
    public function setMesComprobante($mesComprobante)
    {
        $this->mesComprobante = $mesComprobante;

        return $this;
    }

    /**
     * Get mesComprobante
     *
     * @return integer 
     */
    public function getMesComprobante()
    {
        return $this->mesComprobante;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return ActivoFijoMovim
     */
    public function setFechaConfirmacion($fechaConfirmacion)
    {
        $this->fechaConfirmacion = $fechaConfirmacion;

        return $this;
    }

    /**
     * Get fechaConfirmacion
     *
     * @return \DateTime 
     */
    public function getFechaConfirmacion()
    {
        return $this->fechaConfirmacion;
    }

    /**
     * Set referencia
     *
     * @param integer $referencia
     * @return ActivoFijoMovim
     */
    public function setReferencia($referencia)
    {
        $this->referencia = $referencia;

        return $this;
    }

    /**
     * Get referencia
     *
     * @return integer 
     */
    public function getReferencia()
    {
        return $this->referencia;
    }

    /**
     * Set idAlmacenref
     *
     * @param string $idAlmacenref
     * @return ActivoFijoMovim
     */
    public function setIdAlmacenref($idAlmacenref)
    {
        $this->idAlmacenref = $idAlmacenref;

        return $this;
    }

    /**
     * Get idAlmacenref
     *
     * @return string 
     */
    public function getIdAlmacenref()
    {
        return $this->idAlmacenref;
    }

    /**
     * Set anoReferencia
     *
     * @param integer $anoReferencia
     * @return ActivoFijoMovim
     */
    public function setAnoReferencia($anoReferencia)
    {
        $this->anoReferencia = $anoReferencia;

        return $this;
    }

    /**
     * Get anoReferencia
     *
     * @return integer 
     */
    public function getAnoReferencia()
    {
        return $this->anoReferencia;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return ActivoFijoMovim
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return ActivoFijoMovim
     */
    public function setXtrans($xtrans)
    {
        $this->xtrans = $xtrans;

        return $this;
    }

    /**
     * Get xtrans
     *
     * @return boolean 
     */
    public function getXtrans()
    {
        return $this->xtrans;
    }

    /**
     * Set op
     *
     * @param string $op
     * @return ActivoFijoMovim
     */
    public function setOp($op)
    {
        $this->op = $op;

        return $this;
    }

    /**
     * Get op
     *
     * @return string 
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Set fechaop
     *
     * @param \DateTime $fechaop
     * @return ActivoFijoMovim
     */
    public function setFechaop($fechaop)
    {
        $this->fechaop = $fechaop;

        return $this;
    }

    /**
     * Get fechaop
     *
     * @return \DateTime 
     */
    public function getFechaop()
    {
        return $this->fechaop;
    }

    /**
     * Set horaop
     *
     * @param \DateTime $horaop
     * @return ActivoFijoMovim
     */
    public function setHoraop($horaop)
    {
        $this->horaop = $horaop;

        return $this;
    }

    /**
     * Get horaop
     *
     * @return \DateTime 
     */
    public function getHoraop()
    {
        return $this->horaop;
    }

    /**
     * Set rotuloModif
     *
     * @param boolean $rotuloModif
     * @return ActivoFijoMovim
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
     * @return ActivoFijoMovim
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
     * @return ActivoFijoMovim
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
     * @return ActivoFijoMovim
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
     * @return ActivoFijoMovim
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
     * @return ActivoFijoMovim
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
     * @return ActivoFijoMovim
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
     * Set valorInicialoldmc
     *
     * @param integer $valorInicialoldmc
     * @return ActivoFijoMovim
     */
    public function setValorInicialoldmc($valorInicialoldmc)
    {
        $this->valorInicialoldmc = $valorInicialoldmc;

        return $this;
    }

    /**
     * Get valorInicialoldmc
     *
     * @return integer 
     */
    public function getValorInicialoldmc()
    {
        return $this->valorInicialoldmc;
    }

    /**
     * Set valorInicialajustemc
     *
     * @param integer $valorInicialajustemc
     * @return ActivoFijoMovim
     */
    public function setValorInicialajustemc($valorInicialajustemc)
    {
        $this->valorInicialajustemc = $valorInicialajustemc;

        return $this;
    }

    /**
     * Get valorInicialajustemc
     *
     * @return integer 
     */
    public function getValorInicialajustemc()
    {
        return $this->valorInicialajustemc;
    }

    /**
     * Set depreciacionAcumuladaoldmc
     *
     * @param integer $depreciacionAcumuladaoldmc
     * @return ActivoFijoMovim
     */
    public function setDepreciacionAcumuladaoldmc($depreciacionAcumuladaoldmc)
    {
        $this->depreciacionAcumuladaoldmc = $depreciacionAcumuladaoldmc;

        return $this;
    }

    /**
     * Get depreciacionAcumuladaoldmc
     *
     * @return integer 
     */
    public function getDepreciacionAcumuladaoldmc()
    {
        return $this->depreciacionAcumuladaoldmc;
    }

    /**
     * Set depreciacionAcumuladaajustemc
     *
     * @param integer $depreciacionAcumuladaajustemc
     * @return ActivoFijoMovim
     */
    public function setDepreciacionAcumuladaajustemc($depreciacionAcumuladaajustemc)
    {
        $this->depreciacionAcumuladaajustemc = $depreciacionAcumuladaajustemc;

        return $this;
    }

    /**
     * Get depreciacionAcumuladaajustemc
     *
     * @return integer 
     */
    public function getDepreciacionAcumuladaajustemc()
    {
        return $this->depreciacionAcumuladaajustemc;
    }

    /**
     * Set valorResidualoldmc
     *
     * @param integer $valorResidualoldmc
     * @return ActivoFijoMovim
     */
    public function setValorResidualoldmc($valorResidualoldmc)
    {
        $this->valorResidualoldmc = $valorResidualoldmc;

        return $this;
    }

    /**
     * Get valorResidualoldmc
     *
     * @return integer 
     */
    public function getValorResidualoldmc()
    {
        return $this->valorResidualoldmc;
    }

    /**
     * Set valorResidualajustemc
     *
     * @param integer $valorResidualajustemc
     * @return ActivoFijoMovim
     */
    public function setValorResidualajustemc($valorResidualajustemc)
    {
        $this->valorResidualajustemc = $valorResidualajustemc;

        return $this;
    }

    /**
     * Get valorResidualajustemc
     *
     * @return integer 
     */
    public function getValorResidualajustemc()
    {
        return $this->valorResidualajustemc;
    }

    /**
     * Set disponibleold
     *
     * @param boolean $disponibleold
     * @return ActivoFijoMovim
     */
    public function setDisponibleold($disponibleold)
    {
        $this->disponibleold = $disponibleold;

        return $this;
    }

    /**
     * Get disponibleold
     *
     * @return boolean 
     */
    public function getDisponibleold()
    {
        return $this->disponibleold;
    }

    /**
     * Set disponiblenew
     *
     * @param boolean $disponiblenew
     * @return ActivoFijoMovim
     */
    public function setDisponiblenew($disponiblenew)
    {
        $this->disponiblenew = $disponiblenew;

        return $this;
    }

    /**
     * Get disponiblenew
     *
     * @return boolean 
     */
    public function getDisponiblenew()
    {
        return $this->disponiblenew;
    }

    /**
     * Set idCausamov
     *
     * @param string $idCausamov
     * @return ActivoFijoMovim
     */
    public function setIdCausamov($idCausamov)
    {
        $this->idCausamov = $idCausamov;

        return $this;
    }

    /**
     * Get idCausamov
     *
     * @return string 
     */
    public function getIdCausamov()
    {
        return $this->idCausamov;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return ActivoFijoMovim
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string 
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set fechaOp
     *
     * @param \DateTime $fechaOp
     * @return ActivoFijoMovim
     */
    public function setFechaOp($fechaOp)
    {
        $this->fechaOp = $fechaOp;

        return $this;
    }

    /**
     * Get fechaOp
     *
     * @return \DateTime 
     */
    public function getFechaOp()
    {
        return $this->fechaOp;
    }

    /**
     * Set idProveedor
     *
     * @param string $idProveedor
     * @return ActivoFijoMovim
     */
    public function setIdProveedor($idProveedor)
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * Get idProveedor
     *
     * @return string 
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * Set descProveedor
     *
     * @param string $descProveedor
     * @return ActivoFijoMovim
     */
    public function setDescProveedor($descProveedor)
    {
        $this->descProveedor = $descProveedor;

        return $this;
    }

    /**
     * Get descProveedor
     *
     * @return string 
     */
    public function getDescProveedor()
    {
        return $this->descProveedor;
    }

    /**
     * Set descActivofijo
     *
     * @param string $descActivofijo
     * @return ActivoFijoMovim
     */
    public function setDescActivofijo($descActivofijo)
    {
        $this->descActivofijo = $descActivofijo;

        return $this;
    }

    /**
     * Get descActivofijo
     *
     * @return string 
     */
    public function getDescActivofijo()
    {
        return $this->descActivofijo;
    }

    /**
     * Set cnmbold
     *
     * @param string $cnmbold
     * @return ActivoFijoMovim
     */
    public function setCnmbold($cnmbold)
    {
        $this->cnmbold = $cnmbold;

        return $this;
    }

    /**
     * Get cnmbold
     *
     * @return string 
     */
    public function getCnmbold()
    {
        return $this->cnmbold;
    }

    /**
     * Set cnmbnew
     *
     * @param string $cnmbnew
     * @return ActivoFijoMovim
     */
    public function setCnmbnew($cnmbnew)
    {
        $this->cnmbnew = $cnmbnew;

        return $this;
    }

    /**
     * Get cnmbnew
     *
     * @return string 
     */
    public function getCnmbnew()
    {
        return $this->cnmbnew;
    }

    /**
     * Set tasaDepreciacionold
     *
     * @param integer $tasaDepreciacionold
     * @return ActivoFijoMovim
     */
    public function setTasaDepreciacionold($tasaDepreciacionold)
    {
        $this->tasaDepreciacionold = $tasaDepreciacionold;

        return $this;
    }

    /**
     * Get tasaDepreciacionold
     *
     * @return integer 
     */
    public function getTasaDepreciacionold()
    {
        return $this->tasaDepreciacionold;
    }

    /**
     * Set tasaDepreciacionnew
     *
     * @param integer $tasaDepreciacionnew
     * @return ActivoFijoMovim
     */
    public function setTasaDepreciacionnew($tasaDepreciacionnew)
    {
        $this->tasaDepreciacionnew = $tasaDepreciacionnew;

        return $this;
    }

    /**
     * Get tasaDepreciacionnew
     *
     * @return integer 
     */
    public function getTasaDepreciacionnew()
    {
        return $this->tasaDepreciacionnew;
    }

    /**
     * Set cnmbModif
     *
     * @param boolean $cnmbModif
     * @return ActivoFijoMovim
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
     * @return ActivoFijoMovim
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
     * Set idEstadoActivo
     *
     * @param string $idEstadoActivo
     * @return ActivoFijoMovim
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
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return ActivoFijoMovim
     */
    public function setDocPrimario($docPrimario)
    {
        $this->docPrimario = $docPrimario;

        return $this;
    }

    /**
     * Get docPrimario
     *
     * @return string 
     */
    public function getDocPrimario()
    {
        return $this->docPrimario;
    }

    /**
     * Set clasificModif
     *
     * @param boolean $clasificModif
     * @return ActivoFijoMovim
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
     * @return ActivoFijoMovim
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
     * @return ActivoFijoMovim
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

    /**
     * Set idClasificacionold
     *
     * @param string $idClasificacionold
     * @return ActivoFijoMovim
     */
    public function setIdClasificacionold($idClasificacionold)
    {
        $this->idClasificacionold = $idClasificacionold;

        return $this;
    }

    /**
     * Get idClasificacionold
     *
     * @return string 
     */
    public function getIdClasificacionold()
    {
        return $this->idClasificacionold;
    }

    /**
     * Set idClasificacionnew
     *
     * @param string $idClasificacionnew
     * @return ActivoFijoMovim
     */
    public function setIdClasificacionnew($idClasificacionnew)
    {
        $this->idClasificacionnew = $idClasificacionnew;

        return $this;
    }

    /**
     * Get idClasificacionnew
     *
     * @return string 
     */
    public function getIdClasificacionnew()
    {
        return $this->idClasificacionnew;
    }

    /**
     * Set idEspecificacionold
     *
     * @param string $idEspecificacionold
     * @return ActivoFijoMovim
     */
    public function setIdEspecificacionold($idEspecificacionold)
    {
        $this->idEspecificacionold = $idEspecificacionold;

        return $this;
    }

    /**
     * Get idEspecificacionold
     *
     * @return string 
     */
    public function getIdEspecificacionold()
    {
        return $this->idEspecificacionold;
    }

    /**
     * Set idEspecificacionnew
     *
     * @param string $idEspecificacionnew
     * @return ActivoFijoMovim
     */
    public function setIdEspecificacionnew($idEspecificacionnew)
    {
        $this->idEspecificacionnew = $idEspecificacionnew;

        return $this;
    }

    /**
     * Get idEspecificacionnew
     *
     * @return string 
     */
    public function getIdEspecificacionnew()
    {
        return $this->idEspecificacionnew;
    }

    /**
     * Set descActivofijonew
     *
     * @param string $descActivofijonew
     * @return ActivoFijoMovim
     */
    public function setDescActivofijonew($descActivofijonew)
    {
        $this->descActivofijonew = $descActivofijonew;

        return $this;
    }

    /**
     * Get descActivofijonew
     *
     * @return string 
     */
    public function getDescActivofijonew()
    {
        return $this->descActivofijonew;
    }
}
