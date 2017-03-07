<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilToolTraslados
 *
 * @ORM\Table(name="Util_Tool_Traslados")
 * @ORM\Entity
 */
class UtilToolTraslados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Traslado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idTraslado;

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
     * @ORM\Column(name="Ano_Traslado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $anoTraslado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;

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
     * @ORM\Column(name="Nota", type="string", length=200, nullable=false)
     */
    private $nota;

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
     * @ORM\Column(name="Fecha_Traslado", type="datetime", nullable=false)
     */
    private $fechaTraslado;

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
     * @var string
     *
     * @ORM\Column(name="CantidadOld", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidadold;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioOld", type="integer", nullable=false)
     */
    private $precioold;

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
     * @var integer
     *
     * @ORM\Column(name="PrecioMCOld", type="integer", nullable=false)
     */
    private $preciomcold;

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
     * @ORM\Column(name="Id_Clasif_Traslado_UH", type="string", length=3, nullable=false)
     */
    private $idClasifTrasladoUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Doc_Primario", type="string", length=20, nullable=false)
     */
    private $docPrimario;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioNew", type="integer", nullable=false)
     */
    private $precionew;

    /**
     * @var integer
     *
     * @ORM\Column(name="PrecioMCNew", type="integer", nullable=false)
     */
    private $preciomcnew;

    /**
     * @var string
     *
     * @ORM\Column(name="CantidadNew", type="decimal", precision=14, scale=4, nullable=false)
     */
    private $cantidadnew;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Desc_UHChg", type="boolean", nullable=false)
     */
    private $descUhchg;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_UHNew", type="string", length=255, nullable=false)
     */
    private $descUhnew;



    /**
     * Set idTraslado
     *
     * @param integer $idTraslado
     * @return UtilToolTraslados
     */
    public function setIdTraslado($idTraslado)
    {
        $this->idTraslado = $idTraslado;

        return $this;
    }

    /**
     * Get idTraslado
     *
     * @return integer 
     */
    public function getIdTraslado()
    {
        return $this->idTraslado;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return UtilToolTraslados
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
     * Set anoTraslado
     *
     * @param integer $anoTraslado
     * @return UtilToolTraslados
     */
    public function setAnoTraslado($anoTraslado)
    {
        $this->anoTraslado = $anoTraslado;

        return $this;
    }

    /**
     * Get anoTraslado
     *
     * @return integer 
     */
    public function getAnoTraslado()
    {
        return $this->anoTraslado;
    }

    /**
     * Set confirmada
     *
     * @param integer $confirmada
     * @return UtilToolTraslados
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
     * Set idUh
     *
     * @param string $idUh
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * Set nota
     *
     * @param string $nota
     * @return UtilToolTraslados
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
     * Set idCcostoold
     *
     * @param string $idCcostoold
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * Set fechaTraslado
     *
     * @param \DateTime $fechaTraslado
     * @return UtilToolTraslados
     */
    public function setFechaTraslado($fechaTraslado)
    {
        $this->fechaTraslado = $fechaTraslado;

        return $this;
    }

    /**
     * Get fechaTraslado
     *
     * @return \DateTime 
     */
    public function getFechaTraslado()
    {
        return $this->fechaTraslado;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * Set cantidadold
     *
     * @param string $cantidadold
     * @return UtilToolTraslados
     */
    public function setCantidadold($cantidadold)
    {
        $this->cantidadold = $cantidadold;

        return $this;
    }

    /**
     * Get cantidadold
     *
     * @return string 
     */
    public function getCantidadold()
    {
        return $this->cantidadold;
    }

    /**
     * Set precioold
     *
     * @param integer $precioold
     * @return UtilToolTraslados
     */
    public function setPrecioold($precioold)
    {
        $this->precioold = $precioold;

        return $this;
    }

    /**
     * Get precioold
     *
     * @return integer 
     */
    public function getPrecioold()
    {
        return $this->precioold;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * Set preciomcold
     *
     * @param integer $preciomcold
     * @return UtilToolTraslados
     */
    public function setPreciomcold($preciomcold)
    {
        $this->preciomcold = $preciomcold;

        return $this;
    }

    /**
     * Get preciomcold
     *
     * @return integer 
     */
    public function getPreciomcold()
    {
        return $this->preciomcold;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     * @return UtilToolTraslados
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
     * @return UtilToolTraslados
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
     * Set idClasifTrasladoUh
     *
     * @param string $idClasifTrasladoUh
     * @return UtilToolTraslados
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
     * Set docPrimario
     *
     * @param string $docPrimario
     * @return UtilToolTraslados
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
     * Set precionew
     *
     * @param integer $precionew
     * @return UtilToolTraslados
     */
    public function setPrecionew($precionew)
    {
        $this->precionew = $precionew;

        return $this;
    }

    /**
     * Get precionew
     *
     * @return integer 
     */
    public function getPrecionew()
    {
        return $this->precionew;
    }

    /**
     * Set preciomcnew
     *
     * @param integer $preciomcnew
     * @return UtilToolTraslados
     */
    public function setPreciomcnew($preciomcnew)
    {
        $this->preciomcnew = $preciomcnew;

        return $this;
    }

    /**
     * Get preciomcnew
     *
     * @return integer 
     */
    public function getPreciomcnew()
    {
        return $this->preciomcnew;
    }

    /**
     * Set cantidadnew
     *
     * @param string $cantidadnew
     * @return UtilToolTraslados
     */
    public function setCantidadnew($cantidadnew)
    {
        $this->cantidadnew = $cantidadnew;

        return $this;
    }

    /**
     * Get cantidadnew
     *
     * @return string 
     */
    public function getCantidadnew()
    {
        return $this->cantidadnew;
    }

    /**
     * Set descUhchg
     *
     * @param boolean $descUhchg
     * @return UtilToolTraslados
     */
    public function setDescUhchg($descUhchg)
    {
        $this->descUhchg = $descUhchg;

        return $this;
    }

    /**
     * Get descUhchg
     *
     * @return boolean 
     */
    public function getDescUhchg()
    {
        return $this->descUhchg;
    }

    /**
     * Set descUhnew
     *
     * @param string $descUhnew
     * @return UtilToolTraslados
     */
    public function setDescUhnew($descUhnew)
    {
        $this->descUhnew = $descUhnew;

        return $this;
    }

    /**
     * Get descUhnew
     *
     * @return string 
     */
    public function getDescUhnew()
    {
        return $this->descUhnew;
    }
}
