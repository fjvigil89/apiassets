<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CuentasCierre
 *
 * @ORM\Table(name="Cuentas_Cierre")
 * @ORM\Entity
 */
class CuentasCierre
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
     * @var string
     *
     * @ORM\Column(name="Cta_Cierra", type="string", length=50, nullable=false)
     */
    private $ctaCierra;

    /**
     * @var string
     *
     * @ORM\Column(name="Cta_Recibe", type="string", length=50, nullable=false)
     */
    private $ctaRecibe;

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
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clave_Tipo_Comprobante", type="smallint", nullable=false)
     */
    private $claveTipoComprobante;



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
     * @return CuentasCierre
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
     * @return CuentasCierre
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
     * @return CuentasCierre
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
     * Set ctaCierra
     *
     * @param string $ctaCierra
     * @return CuentasCierre
     */
    public function setCtaCierra($ctaCierra)
    {
        $this->ctaCierra = $ctaCierra;

        return $this;
    }

    /**
     * Get ctaCierra
     *
     * @return string 
     */
    public function getCtaCierra()
    {
        return $this->ctaCierra;
    }

    /**
     * Set ctaRecibe
     *
     * @param string $ctaRecibe
     * @return CuentasCierre
     */
    public function setCtaRecibe($ctaRecibe)
    {
        $this->ctaRecibe = $ctaRecibe;

        return $this;
    }

    /**
     * Get ctaRecibe
     *
     * @return string 
     */
    public function getCtaRecibe()
    {
        return $this->ctaRecibe;
    }

    /**
     * Set idCompro
     *
     * @param integer $idCompro
     * @return CuentasCierre
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
     * @return CuentasCierre
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
     * @return CuentasCierre
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
     * Set idAgrupacion
     *
     * @param string $idAgrupacion
     * @return CuentasCierre
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
     * Set claveTipoComprobante
     *
     * @param integer $claveTipoComprobante
     * @return CuentasCierre
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
}
