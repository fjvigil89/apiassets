<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ComprobanteApertura
 *
 * @ORM\Table(name="Comprobante_Apertura")
 * @ORM\Entity
 */
class ComprobanteApertura
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
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=200, nullable=false)
     */
    private $observaciones;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Visto_Bueno", type="boolean", nullable=false)
     */
    private $vistoBueno;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Incompleto", type="boolean", nullable=false)
     */
    private $incompleto;

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
     * @var integer
     *
     * @ORM\Column(name="Id_Compro", type="integer", nullable=false)
     */
    private $idCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Compro", type="smallint", nullable=false)
     */
    private $mesCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Compro", type="smallint", nullable=false)
     */
    private $anoCompro;

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
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set hechoPor
     *
     * @param string $hechoPor
     * @return ComprobanteApertura
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
     * @return ComprobanteApertura
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
     * Set observaciones
     *
     * @param string $observaciones
     * @return ComprobanteApertura
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set vistoBueno
     *
     * @param boolean $vistoBueno
     * @return ComprobanteApertura
     */
    public function setVistoBueno($vistoBueno)
    {
        $this->vistoBueno = $vistoBueno;

        return $this;
    }

    /**
     * Get vistoBueno
     *
     * @return boolean 
     */
    public function getVistoBueno()
    {
        return $this->vistoBueno;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return ComprobanteApertura
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
     * Set incompleto
     *
     * @param boolean $incompleto
     * @return ComprobanteApertura
     */
    public function setIncompleto($incompleto)
    {
        $this->incompleto = $incompleto;

        return $this;
    }

    /**
     * Get incompleto
     *
     * @return boolean 
     */
    public function getIncompleto()
    {
        return $this->incompleto;
    }

    /**
     * Set idAgrupacionref
     *
     * @param string $idAgrupacionref
     * @return ComprobanteApertura
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
     * @return ComprobanteApertura
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
     * Set idCompro
     *
     * @param integer $idCompro
     * @return ComprobanteApertura
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
     * Set mesCompro
     *
     * @param integer $mesCompro
     * @return ComprobanteApertura
     */
    public function setMesCompro($mesCompro)
    {
        $this->mesCompro = $mesCompro;

        return $this;
    }

    /**
     * Get mesCompro
     *
     * @return integer 
     */
    public function getMesCompro()
    {
        return $this->mesCompro;
    }

    /**
     * Set anoCompro
     *
     * @param integer $anoCompro
     * @return ComprobanteApertura
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
     * Set xtrans
     *
     * @param boolean $xtrans
     * @return ComprobanteApertura
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
     * @return ComprobanteApertura
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
     * @return ComprobanteApertura
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
     * @return ComprobanteApertura
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
