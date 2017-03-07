<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoMovimMasivoHead
 *
 * @ORM\Table(name="Activo_Fijo_Movim_Masivo_Head", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Activo_Fijo_Movim_Masivo_Head", columns={"Contador"})})
 * @ORM\Entity
 */
class ActivoFijoMovimMasivoHead
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
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Movim_Activo", type="string", length=3, nullable=false)
     */
    private $idMovimActivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CausaMov", type="string", length=5, nullable=false)
     */
    private $idCausamov;

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
     * @ORM\Column(name="Id_CcostoOld", type="string", length=10, nullable=false)
     */
    private $idCcostoold;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_CcostoOld", type="string", length=50, nullable=false)
     */
    private $descCcostoold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_CcostoNew", type="string", length=10, nullable=false)
     */
    private $idCcostonew;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_CcostoNew", type="string", length=50, nullable=false)
     */
    private $descCcostonew;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_AreaRespOld", type="string", length=10, nullable=false)
     */
    private $idArearespold;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_AreaRespOld", type="string", length=50, nullable=false)
     */
    private $descArearespold;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_AreaRespNew", type="string", length=10, nullable=false)
     */
    private $idArearespnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_AreaRespNew", type="string", length=50, nullable=false)
     */
    private $descArearespnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_EmpleadoOld", type="string", length=15, nullable=false)
     */
    private $idEmpleadoold;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_EmpleadoOld", type="string", length=61, nullable=false)
     */
    private $descEmpleadoold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_EmpleadoNew", type="string", length=15, nullable=false)
     */
    private $idEmpleadonew;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_EmpleadoNew", type="string", length=61, nullable=false)
     */
    private $descEmpleadonew;

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
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="XTrans", type="boolean", nullable=false)
     */
    private $xtrans;

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
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClasificacionOld", type="string", length=5, nullable=false)
     */
    private $idClasificacionold;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ClasificacionOld", type="string", length=50, nullable=false)
     */
    private $descClasificacionold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClasificacionNew", type="string", length=5, nullable=false)
     */
    private $idClasificacionnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ClasificacionNew", type="string", length=50, nullable=false)
     */
    private $descClasificacionnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubclasificacionOld", type="string", length=5, nullable=false)
     */
    private $idSubclasificacionold;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_SubclasificacionOld", type="string", length=50, nullable=false)
     */
    private $descSubclasificacionold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubclasificacionNew", type="string", length=5, nullable=false)
     */
    private $idSubclasificacionnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_SubclasificacionNew", type="string", length=50, nullable=false)
     */
    private $descSubclasificacionnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_EspecificacionOld", type="string", length=15, nullable=false)
     */
    private $idEspecificacionold;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_EspecificacionOld", type="string", length=50, nullable=false)
     */
    private $descEspecificacionold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_EspecificacionNew", type="string", length=15, nullable=false)
     */
    private $idEspecificacionnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_EspecificacionNew", type="string", length=50, nullable=false)
     */
    private $descEspecificacionnew;

    /**
     * @var string
     *
     * @ORM\Column(name="CNMBOld", type="string", length=50, nullable=false)
     */
    private $cnmbold;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_CNMBOld", type="string", length=100, nullable=false)
     */
    private $descCnmbold;

    /**
     * @var string
     *
     * @ORM\Column(name="CNMBNew", type="string", length=50, nullable=false)
     */
    private $cnmbnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_CNMBNew", type="string", length=100, nullable=false)
     */
    private $descCnmbnew;



    /**
     * Set idMov
     *
     * @param integer $idMov
     * @return ActivoFijoMovimMasivoHead
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
     * @return ActivoFijoMovimMasivoHead
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
     * @return ActivoFijoMovimMasivoHead
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
     * Set contador
     *
     * @param integer $contador
     * @return ActivoFijoMovimMasivoHead
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
     * Set idMovimActivo
     *
     * @param string $idMovimActivo
     * @return ActivoFijoMovimMasivoHead
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
     * Set idCausamov
     *
     * @param string $idCausamov
     * @return ActivoFijoMovimMasivoHead
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
     * Set nota
     *
     * @param string $nota
     * @return ActivoFijoMovimMasivoHead
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
     * @return ActivoFijoMovimMasivoHead
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
     * Set idCcostoold
     *
     * @param string $idCcostoold
     * @return ActivoFijoMovimMasivoHead
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
     * Set descCcostoold
     *
     * @param string $descCcostoold
     * @return ActivoFijoMovimMasivoHead
     */
    public function setDescCcostoold($descCcostoold)
    {
        $this->descCcostoold = $descCcostoold;

        return $this;
    }

    /**
     * Get descCcostoold
     *
     * @return string 
     */
    public function getDescCcostoold()
    {
        return $this->descCcostoold;
    }

    /**
     * Set idCcostonew
     *
     * @param string $idCcostonew
     * @return ActivoFijoMovimMasivoHead
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
     * Set descCcostonew
     *
     * @param string $descCcostonew
     * @return ActivoFijoMovimMasivoHead
     */
    public function setDescCcostonew($descCcostonew)
    {
        $this->descCcostonew = $descCcostonew;

        return $this;
    }

    /**
     * Get descCcostonew
     *
     * @return string 
     */
    public function getDescCcostonew()
    {
        return $this->descCcostonew;
    }

    /**
     * Set idArearespold
     *
     * @param string $idArearespold
     * @return ActivoFijoMovimMasivoHead
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
     * Set descArearespold
     *
     * @param string $descArearespold
     * @return ActivoFijoMovimMasivoHead
     */
    public function setDescArearespold($descArearespold)
    {
        $this->descArearespold = $descArearespold;

        return $this;
    }

    /**
     * Get descArearespold
     *
     * @return string 
     */
    public function getDescArearespold()
    {
        return $this->descArearespold;
    }

    /**
     * Set idArearespnew
     *
     * @param string $idArearespnew
     * @return ActivoFijoMovimMasivoHead
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
     * Set descArearespnew
     *
     * @param string $descArearespnew
     * @return ActivoFijoMovimMasivoHead
     */
    public function setDescArearespnew($descArearespnew)
    {
        $this->descArearespnew = $descArearespnew;

        return $this;
    }

    /**
     * Get descArearespnew
     *
     * @return string 
     */
    public function getDescArearespnew()
    {
        return $this->descArearespnew;
    }

    /**
     * Set idEmpleadoold
     *
     * @param string $idEmpleadoold
     * @return ActivoFijoMovimMasivoHead
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
     * Set descEmpleadoold
     *
     * @param string $descEmpleadoold
     * @return ActivoFijoMovimMasivoHead
     */
    public function setDescEmpleadoold($descEmpleadoold)
    {
        $this->descEmpleadoold = $descEmpleadoold;

        return $this;
    }

    /**
     * Get descEmpleadoold
     *
     * @return string 
     */
    public function getDescEmpleadoold()
    {
        return $this->descEmpleadoold;
    }

    /**
     * Set idEmpleadonew
     *
     * @param string $idEmpleadonew
     * @return ActivoFijoMovimMasivoHead
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
     * Set descEmpleadonew
     *
     * @param string $descEmpleadonew
     * @return ActivoFijoMovimMasivoHead
     */
    public function setDescEmpleadonew($descEmpleadonew)
    {
        $this->descEmpleadonew = $descEmpleadonew;

        return $this;
    }

    /**
     * Get descEmpleadonew
     *
     * @return string 
     */
    public function getDescEmpleadonew()
    {
        return $this->descEmpleadonew;
    }

    /**
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return ActivoFijoMovimMasivoHead
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
     * @return ActivoFijoMovimMasivoHead
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
     * @return ActivoFijoMovimMasivoHead
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
     * @return ActivoFijoMovimMasivoHead
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
     * Set confirmada
     *
     * @param integer $confirmada
     * @return ActivoFijoMovimMasivoHead
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
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return ActivoFijoMovimMasivoHead
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
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return ActivoFijoMovimMasivoHead
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
     * Set idUser
     *
     * @param string $idUser
     * @return ActivoFijoMovimMasivoHead
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
     * @return ActivoFijoMovimMasivoHead
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
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return ActivoFijoMovimMasivoHead
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
     * Set idClasificacionold
     *
     * @param string $idClasificacionold
     * @return ActivoFijoMovimMasivoHead
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
     * Set descClasificacionold
     *
     * @param string $descClasificacionold
     * @return ActivoFijoMovimMasivoHead
     */
    public function setDescClasificacionold($descClasificacionold)
    {
        $this->descClasificacionold = $descClasificacionold;

        return $this;
    }

    /**
     * Get descClasificacionold
     *
     * @return string 
     */
    public function getDescClasificacionold()
    {
        return $this->descClasificacionold;
    }

    /**
     * Set idClasificacionnew
     *
     * @param string $idClasificacionnew
     * @return ActivoFijoMovimMasivoHead
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
     * Set descClasificacionnew
     *
     * @param string $descClasificacionnew
     * @return ActivoFijoMovimMasivoHead
     */
    public function setDescClasificacionnew($descClasificacionnew)
    {
        $this->descClasificacionnew = $descClasificacionnew;

        return $this;
    }

    /**
     * Get descClasificacionnew
     *
     * @return string 
     */
    public function getDescClasificacionnew()
    {
        return $this->descClasificacionnew;
    }

    /**
     * Set idSubclasificacionold
     *
     * @param string $idSubclasificacionold
     * @return ActivoFijoMovimMasivoHead
     */
    public function setIdSubclasificacionold($idSubclasificacionold)
    {
        $this->idSubclasificacionold = $idSubclasificacionold;

        return $this;
    }

    /**
     * Get idSubclasificacionold
     *
     * @return string 
     */
    public function getIdSubclasificacionold()
    {
        return $this->idSubclasificacionold;
    }

    /**
     * Set descSubclasificacionold
     *
     * @param string $descSubclasificacionold
     * @return ActivoFijoMovimMasivoHead
     */
    public function setDescSubclasificacionold($descSubclasificacionold)
    {
        $this->descSubclasificacionold = $descSubclasificacionold;

        return $this;
    }

    /**
     * Get descSubclasificacionold
     *
     * @return string 
     */
    public function getDescSubclasificacionold()
    {
        return $this->descSubclasificacionold;
    }

    /**
     * Set idSubclasificacionnew
     *
     * @param string $idSubclasificacionnew
     * @return ActivoFijoMovimMasivoHead
     */
    public function setIdSubclasificacionnew($idSubclasificacionnew)
    {
        $this->idSubclasificacionnew = $idSubclasificacionnew;

        return $this;
    }

    /**
     * Get idSubclasificacionnew
     *
     * @return string 
     */
    public function getIdSubclasificacionnew()
    {
        return $this->idSubclasificacionnew;
    }

    /**
     * Set descSubclasificacionnew
     *
     * @param string $descSubclasificacionnew
     * @return ActivoFijoMovimMasivoHead
     */
    public function setDescSubclasificacionnew($descSubclasificacionnew)
    {
        $this->descSubclasificacionnew = $descSubclasificacionnew;

        return $this;
    }

    /**
     * Get descSubclasificacionnew
     *
     * @return string 
     */
    public function getDescSubclasificacionnew()
    {
        return $this->descSubclasificacionnew;
    }

    /**
     * Set idEspecificacionold
     *
     * @param string $idEspecificacionold
     * @return ActivoFijoMovimMasivoHead
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
     * Set descEspecificacionold
     *
     * @param string $descEspecificacionold
     * @return ActivoFijoMovimMasivoHead
     */
    public function setDescEspecificacionold($descEspecificacionold)
    {
        $this->descEspecificacionold = $descEspecificacionold;

        return $this;
    }

    /**
     * Get descEspecificacionold
     *
     * @return string 
     */
    public function getDescEspecificacionold()
    {
        return $this->descEspecificacionold;
    }

    /**
     * Set idEspecificacionnew
     *
     * @param string $idEspecificacionnew
     * @return ActivoFijoMovimMasivoHead
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
     * Set descEspecificacionnew
     *
     * @param string $descEspecificacionnew
     * @return ActivoFijoMovimMasivoHead
     */
    public function setDescEspecificacionnew($descEspecificacionnew)
    {
        $this->descEspecificacionnew = $descEspecificacionnew;

        return $this;
    }

    /**
     * Get descEspecificacionnew
     *
     * @return string 
     */
    public function getDescEspecificacionnew()
    {
        return $this->descEspecificacionnew;
    }

    /**
     * Set cnmbold
     *
     * @param string $cnmbold
     * @return ActivoFijoMovimMasivoHead
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
     * Set descCnmbold
     *
     * @param string $descCnmbold
     * @return ActivoFijoMovimMasivoHead
     */
    public function setDescCnmbold($descCnmbold)
    {
        $this->descCnmbold = $descCnmbold;

        return $this;
    }

    /**
     * Get descCnmbold
     *
     * @return string 
     */
    public function getDescCnmbold()
    {
        return $this->descCnmbold;
    }

    /**
     * Set cnmbnew
     *
     * @param string $cnmbnew
     * @return ActivoFijoMovimMasivoHead
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
     * Set descCnmbnew
     *
     * @param string $descCnmbnew
     * @return ActivoFijoMovimMasivoHead
     */
    public function setDescCnmbnew($descCnmbnew)
    {
        $this->descCnmbnew = $descCnmbnew;

        return $this;
    }

    /**
     * Get descCnmbnew
     *
     * @return string 
     */
    public function getDescCnmbnew()
    {
        return $this->descCnmbnew;
    }
}
