<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhComprobanteExport
 *
 * @ORM\Table(name="RH_Comprobante_Export")
 * @ORM\Entity
 */
class RhComprobanteExport
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
     * @ORM\Column(name="Observaciones", type="string", length=370, nullable=false)
     */
    private $observaciones;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=false)
     */
    private $fecha;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clave_Tipo_Comprobante", type="smallint", nullable=false)
     */
    private $claveTipoComprobante;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Exportar", type="boolean", nullable=false)
     */
    private $exportar;



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
     * @return RhComprobanteExport
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
     * @return RhComprobanteExport
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
     * @return RhComprobanteExport
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
     * Set hechoPor
     *
     * @param string $hechoPor
     * @return RhComprobanteExport
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
     * @return RhComprobanteExport
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
     * @return RhComprobanteExport
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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return RhComprobanteExport
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
     * Set claveTipoComprobante
     *
     * @param integer $claveTipoComprobante
     * @return RhComprobanteExport
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
     * Set exportar
     *
     * @param boolean $exportar
     * @return RhComprobanteExport
     */
    public function setExportar($exportar)
    {
        $this->exportar = $exportar;

        return $this;
    }

    /**
     * Get exportar
     *
     * @return boolean 
     */
    public function getExportar()
    {
        return $this->exportar;
    }
}
