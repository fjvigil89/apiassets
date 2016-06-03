<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistComprobante
 *
 * @ORM\Table(name="Hist_Comprobante")
 * @ORM\Entity
 */
class HistComprobante
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
     * @var boolean
     *
     * @ORM\Column(name="Mayorizado", type="boolean", nullable=false)
     */
    private $mayorizado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Modificado", type="string", length=1, nullable=false)
     */
    private $modificado;

    /**
     * @var string
     *
     * @ORM\Column(name="Cuadrado", type="string", length=2, nullable=false)
     */
    private $cuadrado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Incompleto", type="boolean", nullable=false)
     */
    private $incompleto;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_ComproRef", type="smallint", nullable=false)
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
     * Get contador1
     *
     * @return integer 
     */
    public function getContador1()
    {
        return $this->contador1;
    }

    /**
     * Set idCompro
     *
     * @param integer $idCompro
     * @return HistComprobante
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
     * @return HistComprobante
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
     * @return HistComprobante
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
     * Set tipoComp
     *
     * @param string $tipoComp
     * @return HistComprobante
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
     * @return HistComprobante
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
     * @return HistComprobante
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
     * @return HistComprobante
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
     * @return HistComprobante
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
     * Set mayorizado
     *
     * @param boolean $mayorizado
     * @return HistComprobante
     */
    public function setMayorizado($mayorizado)
    {
        $this->mayorizado = $mayorizado;

        return $this;
    }

    /**
     * Get mayorizado
     *
     * @return boolean 
     */
    public function getMayorizado()
    {
        return $this->mayorizado;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return HistComprobante
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
     * Set modificado
     *
     * @param string $modificado
     * @return HistComprobante
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;

        return $this;
    }

    /**
     * Get modificado
     *
     * @return string 
     */
    public function getModificado()
    {
        return $this->modificado;
    }

    /**
     * Set cuadrado
     *
     * @param string $cuadrado
     * @return HistComprobante
     */
    public function setCuadrado($cuadrado)
    {
        $this->cuadrado = $cuadrado;

        return $this;
    }

    /**
     * Get cuadrado
     *
     * @return string 
     */
    public function getCuadrado()
    {
        return $this->cuadrado;
    }

    /**
     * Set incompleto
     *
     * @param boolean $incompleto
     * @return HistComprobante
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
     * Set idComproref
     *
     * @param integer $idComproref
     * @return HistComprobante
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
     * @return HistComprobante
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
     * @return HistComprobante
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
     * @return HistComprobante
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
     * @return HistComprobante
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
}
