<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComprobanteRec
 *
 * @ORM\Table(name="Comprobante_Rec")
 * @ORM\Entity
 */
class ComprobanteRec
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador1", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador1;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ref", type="string", length=10, nullable=false)
     */
    private $idRef;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Comp", type="string", length=15, nullable=false)
     */
    private $tipoComp;

    /**
     * @var string
     *
     * @ORM\Column(name="Hecho_Por", type="string", length=60, nullable=false)
     */
    private $hechoPor;

    /**
     * @var string
     *
     * @ORM\Column(name="Revisado_Por", type="string", length=60, nullable=false)
     */
    private $revisadoPor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_compro", type="integer", nullable=false)
     */
    private $idCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Compro", type="smallint", nullable=false)
     */
    private $anoCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_ComproRef", type="integer", nullable=false)
     */
    private $idComproref;

    /**
     * @var integer
     *
     * @ORM\Column(name="AnoRef", type="smallint", nullable=false)
     */
    private $anoref;

    /**
     * @var integer
     *
     * @ORM\Column(name="MesRef", type="smallint", nullable=false)
     */
    private $mesref;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AgrupacionRef", type="string", length=5, nullable=false)
     */
    private $idAgrupacionref;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

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
     * @var integer
     *
     * @ORM\Column(name="Clave_Tipo_Comprobante", type="smallint", nullable=false)
     */
    private $claveTipoComprobante;

    /**
     * @var string
     *
     * @ORM\Column(name="Notas", type="string", length=370, nullable=false)
     */
    private $notas;



    /**
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set idRef
     *
     * @param string $idRef
     * @return ComprobanteRec
     */
    public function setIdRef($idRef)
    {
        $this->idRef = $idRef;

        return $this;
    }

    /**
     * Get idRef
     *
     * @return string 
     */
    public function getIdRef()
    {
        return $this->idRef;
    }

    /**
     * Set tipoComp
     *
     * @param string $tipoComp
     * @return ComprobanteRec
     */
    public function setTipoComp($tipoComp)
    {
        $this->tipoComp = $tipoComp;

        return $this;
    }

    /**
     * Get tipoComp
     *
     * @return string 
     */
    public function getTipoComp()
    {
        return $this->tipoComp;
    }

    /**
     * Set hechoPor
     *
     * @param string $hechoPor
     * @return ComprobanteRec
     */
    public function setHechoPor($hechoPor)
    {
        $this->hechoPor = $hechoPor;

        return $this;
    }

    /**
     * Get hechoPor
     *
     * @return string 
     */
    public function getHechoPor()
    {
        return $this->hechoPor;
    }

    /**
     * Set revisadoPor
     *
     * @param string $revisadoPor
     * @return ComprobanteRec
     */
    public function setRevisadoPor($revisadoPor)
    {
        $this->revisadoPor = $revisadoPor;

        return $this;
    }

    /**
     * Get revisadoPor
     *
     * @return string 
     */
    public function getRevisadoPor()
    {
        return $this->revisadoPor;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ComprobanteRec
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set idCompro
     *
     * @param integer $idCompro
     * @return ComprobanteRec
     */
    public function setIdCompro($idCompro)
    {
        $this->idCompro = $idCompro;

        return $this;
    }

    /**
     * Get idCompro
     *
     * @return integer 
     */
    public function getIdCompro()
    {
        return $this->idCompro;
    }

    /**
     * Set anoCompro
     *
     * @param integer $anoCompro
     * @return ComprobanteRec
     */
    public function setAnoCompro($anoCompro)
    {
        $this->anoCompro = $anoCompro;

        return $this;
    }

    /**
     * Get anoCompro
     *
     * @return integer 
     */
    public function getAnoCompro()
    {
        return $this->anoCompro;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return ComprobanteRec
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set idComproref
     *
     * @param integer $idComproref
     * @return ComprobanteRec
     */
    public function setIdComproref($idComproref)
    {
        $this->idComproref = $idComproref;

        return $this;
    }

    /**
     * Get idComproref
     *
     * @return integer 
     */
    public function getIdComproref()
    {
        return $this->idComproref;
    }

    /**
     * Set anoref
     *
     * @param integer $anoref
     * @return ComprobanteRec
     */
    public function setAnoref($anoref)
    {
        $this->anoref = $anoref;

        return $this;
    }

    /**
     * Get anoref
     *
     * @return integer 
     */
    public function getAnoref()
    {
        return $this->anoref;
    }

    /**
     * Set mesref
     *
     * @param integer $mesref
     * @return ComprobanteRec
     */
    public function setMesref($mesref)
    {
        $this->mesref = $mesref;

        return $this;
    }

    /**
     * Get mesref
     *
     * @return integer 
     */
    public function getMesref()
    {
        return $this->mesref;
    }

    /**
     * Set idAgrupacionref
     *
     * @param string $idAgrupacionref
     * @return ComprobanteRec
     */
    public function setIdAgrupacionref($idAgrupacionref)
    {
        $this->idAgrupacionref = $idAgrupacionref;

        return $this;
    }

    /**
     * Get idAgrupacionref
     *
     * @return string 
     */
    public function getIdAgrupacionref()
    {
        return $this->idAgrupacionref;
    }

    /**
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return ComprobanteRec
     */
    public function setIdAgrupacion($idAgrupacion)
    {
        $this->idAgrupacion = $idAgrupacion;

        return $this;
    }

    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }

    /**
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return ComprobanteRec
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
     * @return ComprobanteRec
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
     * @return ComprobanteRec
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
     * Set claveTipoComprobante
     *
     * @param integer $claveTipoComprobante
     * @return ComprobanteRec
     */
    public function setClaveTipoComprobante($claveTipoComprobante)
    {
        $this->claveTipoComprobante = $claveTipoComprobante;

        return $this;
    }

    /**
     * Get claveTipoComprobante
     *
     * @return integer 
     */
    public function getClaveTipoComprobante()
    {
        return $this->claveTipoComprobante;
    }

    /**
     * Set notas
     *
     * @param string $notas
     * @return ComprobanteRec
     */
    public function setNotas($notas)
    {
        $this->notas = $notas;

        return $this;
    }

    /**
     * Get notas
     *
     * @return string 
     */
    public function getNotas()
    {
        return $this->notas;
    }
}
