<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrprocesoCierre
 *
 * @ORM\Table(name="PrProceso_Cierre")
 * @ORM\Entity
 */
class PrprocesoCierre
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
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Ini", type="datetime", nullable=false)
     */
    private $fechaIni;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Fin", type="datetime", nullable=false)
     */
    private $fechaFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Compro", type="integer", nullable=false)
     */
    private $idCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Compro", type="integer", nullable=false)
     */
    private $anoCompro;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Compro", type="integer", nullable=false)
     */
    private $mesCompro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Confirmado", type="boolean", nullable=false)
     */
    private $confirmado;

    /**
     * @var integer
     *
     * @ORM\Column(name="CONTADOR_ACCESS", type="integer", nullable=false)
     */
    private $contadorAccess;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Cierre_Jaguey", type="boolean", nullable=false)
     */
    private $cierreJaguey;



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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return PrprocesoCierre
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
     * Set fechaIni
     *
     * @param \DateTime $fechaIni
     * @return PrprocesoCierre
     */
    public function setFechaIni($fechaIni)
    {
        $this->fechaIni = $fechaIni;

        return $this;
    }

    /**
     * Get fechaIni
     *
     * @return \DateTime 
     */
    public function getFechaIni()
    {
        return $this->fechaIni;
    }

    /**
     * Set fechaFin
     *
     * @param \DateTime $fechaFin
     * @return PrprocesoCierre
     */
    public function setFechaFin($fechaFin)
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    /**
     * Get fechaFin
     *
     * @return \DateTime 
     */
    public function getFechaFin()
    {
        return $this->fechaFin;
    }

    /**
     * Set idCompro
     *
     * @param integer $idCompro
     * @return PrprocesoCierre
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
     * @return PrprocesoCierre
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
     * Set mesCompro
     *
     * @param integer $mesCompro
     * @return PrprocesoCierre
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
     * Set confirmado
     *
     * @param boolean $confirmado
     * @return PrprocesoCierre
     */
    public function setConfirmado($confirmado)
    {
        $this->confirmado = $confirmado;

        return $this;
    }

    /**
     * Get confirmado
     *
     * @return boolean 
     */
    public function getConfirmado()
    {
        return $this->confirmado;
    }

    /**
     * Set contadorAccess
     *
     * @param integer $contadorAccess
     * @return PrprocesoCierre
     */
    public function setContadorAccess($contadorAccess)
    {
        $this->contadorAccess = $contadorAccess;

        return $this;
    }

    /**
     * Get contadorAccess
     *
     * @return integer 
     */
    public function getContadorAccess()
    {
        return $this->contadorAccess;
    }

    /**
     * Set cierreJaguey
     *
     * @param boolean $cierreJaguey
     * @return PrprocesoCierre
     */
    public function setCierreJaguey($cierreJaguey)
    {
        $this->cierreJaguey = $cierreJaguey;

        return $this;
    }

    /**
     * Get cierreJaguey
     *
     * @return boolean 
     */
    public function getCierreJaguey()
    {
        return $this->cierreJaguey;
    }
}
