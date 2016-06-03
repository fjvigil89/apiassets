<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilToolMovimMasivoHead
 *
 * @ORM\Table(name="Util_Tool_Movim_Masivo_Head", uniqueConstraints={@ORM\UniqueConstraint(name="IX_Util_Tool_Movim_Masivo_Head", columns={"Contador"})})
 * @ORM\Entity
 */
class UtilToolMovimMasivoHead
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
     * @ORM\Column(name="Id_Clasif_Traslado_UH", type="string", length=3, nullable=false)
     */
    private $idClasifTrasladoUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_UH", type="string", length=3, nullable=false)
     */
    private $idClasifUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasif_UH", type="string", length=50, nullable=false)
     */
    private $descClasifUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_UH", type="string", length=20, nullable=false)
     */
    private $idUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_UH", type="string", length=255, nullable=false)
     */
    private $descUh;

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
     * @ORM\Column(name="Id_AreaResponsabilidadOld", type="string", length=10, nullable=false)
     */
    private $idArearesponsabilidadold;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_AreaResponsabilidadOld", type="string", length=50, nullable=false)
     */
    private $descArearesponsabilidadold;

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
     * @ORM\Column(name="Id_AreaResponsabilidadNew", type="string", length=10, nullable=false)
     */
    private $idArearesponsabilidadnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_AreaResponsabilidadNew", type="string", length=50, nullable=false)
     */
    private $descArearesponsabilidadnew;

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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Mov", type="datetime", nullable=false)
     */
    private $fechaMov;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=false)
     */
    private $fechaConfirmacion;

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
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Xtrans", type="boolean", nullable=false)
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
     * Set idMov
     *
     * @param integer $idMov
     * @return UtilToolMovimMasivoHead
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
     * @return UtilToolMovimMasivoHead
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
     * @return UtilToolMovimMasivoHead
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
     * @return UtilToolMovimMasivoHead
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
     * Set idClasifTrasladoUh
     *
     * @param string $idClasifTrasladoUh
     * @return UtilToolMovimMasivoHead
     */
    public function setIdClasifTrasladoUh($idClasifTrasladoUh)
    {
        $this->idClasifTrasladoUh = $idClasifTrasladoUh;

        return $this;
    }

    /**
     * Get idClasifTrasladoUh
     *
     * @return string 
     */
    public function getIdClasifTrasladoUh()
    {
        return $this->idClasifTrasladoUh;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return UtilToolMovimMasivoHead
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
     * Set idClasifUh
     *
     * @param string $idClasifUh
     * @return UtilToolMovimMasivoHead
     */
    public function setIdClasifUh($idClasifUh)
    {
        $this->idClasifUh = $idClasifUh;

        return $this;
    }

    /**
     * Get idClasifUh
     *
     * @return string 
     */
    public function getIdClasifUh()
    {
        return $this->idClasifUh;
    }

    /**
     * Set descClasifUh
     *
     * @param string $descClasifUh
     * @return UtilToolMovimMasivoHead
     */
    public function setDescClasifUh($descClasifUh)
    {
        $this->descClasifUh = $descClasifUh;

        return $this;
    }

    /**
     * Get descClasifUh
     *
     * @return string 
     */
    public function getDescClasifUh()
    {
        return $this->descClasifUh;
    }

    /**
     * Set idUh
     *
     * @param string $idUh
     * @return UtilToolMovimMasivoHead
     */
    public function setIdUh($idUh)
    {
        $this->idUh = $idUh;

        return $this;
    }

    /**
     * Get idUh
     *
     * @return string 
     */
    public function getIdUh()
    {
        return $this->idUh;
    }

    /**
     * Set descUh
     *
     * @param string $descUh
     * @return UtilToolMovimMasivoHead
     */
    public function setDescUh($descUh)
    {
        $this->descUh = $descUh;

        return $this;
    }

    /**
     * Get descUh
     *
     * @return string 
     */
    public function getDescUh()
    {
        return $this->descUh;
    }

    /**
     * Set idCcostoold
     *
     * @param string $idCcostoold
     * @return UtilToolMovimMasivoHead
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
     * @return UtilToolMovimMasivoHead
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
     * Set idArearesponsabilidadold
     *
     * @param string $idArearesponsabilidadold
     * @return UtilToolMovimMasivoHead
     */
    public function setIdArearesponsabilidadold($idArearesponsabilidadold)
    {
        $this->idArearesponsabilidadold = $idArearesponsabilidadold;

        return $this;
    }

    /**
     * Get idArearesponsabilidadold
     *
     * @return string 
     */
    public function getIdArearesponsabilidadold()
    {
        return $this->idArearesponsabilidadold;
    }

    /**
     * Set descArearesponsabilidadold
     *
     * @param string $descArearesponsabilidadold
     * @return UtilToolMovimMasivoHead
     */
    public function setDescArearesponsabilidadold($descArearesponsabilidadold)
    {
        $this->descArearesponsabilidadold = $descArearesponsabilidadold;

        return $this;
    }

    /**
     * Get descArearesponsabilidadold
     *
     * @return string 
     */
    public function getDescArearesponsabilidadold()
    {
        return $this->descArearesponsabilidadold;
    }

    /**
     * Set idEmpleadoold
     *
     * @param string $idEmpleadoold
     * @return UtilToolMovimMasivoHead
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
     * @return UtilToolMovimMasivoHead
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
     * Set idCcostonew
     *
     * @param string $idCcostonew
     * @return UtilToolMovimMasivoHead
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
     * @return UtilToolMovimMasivoHead
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
     * Set idArearesponsabilidadnew
     *
     * @param string $idArearesponsabilidadnew
     * @return UtilToolMovimMasivoHead
     */
    public function setIdArearesponsabilidadnew($idArearesponsabilidadnew)
    {
        $this->idArearesponsabilidadnew = $idArearesponsabilidadnew;

        return $this;
    }

    /**
     * Get idArearesponsabilidadnew
     *
     * @return string 
     */
    public function getIdArearesponsabilidadnew()
    {
        return $this->idArearesponsabilidadnew;
    }

    /**
     * Set descArearesponsabilidadnew
     *
     * @param string $descArearesponsabilidadnew
     * @return UtilToolMovimMasivoHead
     */
    public function setDescArearesponsabilidadnew($descArearesponsabilidadnew)
    {
        $this->descArearesponsabilidadnew = $descArearesponsabilidadnew;

        return $this;
    }

    /**
     * Get descArearesponsabilidadnew
     *
     * @return string 
     */
    public function getDescArearesponsabilidadnew()
    {
        return $this->descArearesponsabilidadnew;
    }

    /**
     * Set idEmpleadonew
     *
     * @param string $idEmpleadonew
     * @return UtilToolMovimMasivoHead
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
     * @return UtilToolMovimMasivoHead
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
     * Set fechaMov
     *
     * @param \DateTime $fechaMov
     * @return UtilToolMovimMasivoHead
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
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return UtilToolMovimMasivoHead
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
     * Set contabilizado
     *
     * @param boolean $contabilizado
     * @return UtilToolMovimMasivoHead
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
     * @return UtilToolMovimMasivoHead
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
     * @return UtilToolMovimMasivoHead
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
     * @return UtilToolMovimMasivoHead
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
     * Set contador
     *
     * @param integer $contador
     * @return UtilToolMovimMasivoHead
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
     * @return UtilToolMovimMasivoHead
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
     * @return UtilToolMovimMasivoHead
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
     * @return UtilToolMovimMasivoHead
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
     * @return UtilToolMovimMasivoHead
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
}
