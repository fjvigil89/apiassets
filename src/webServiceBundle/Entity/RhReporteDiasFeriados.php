<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhReporteDiasFeriados
 *
 * @ORM\Table(name="RH_Reporte_Dias_Feriados")
 * @ORM\Entity
 */
class RhReporteDiasFeriados
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Nombre", type="string", length=152, nullable=false)
     */
    private $nombre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Reportar", type="boolean", nullable=false)
     */
    private $reportar;



    /**
     * Get idExpediente
     *
     * @return string 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return RhReporteDiasFeriados
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set reportar
     *
     * @param boolean $reportar
     * @return RhReporteDiasFeriados
     */
    public function setReportar($reportar)
    {
        $this->reportar = $reportar;

        return $this;
    }

    /**
     * Get reportar
     *
     * @return boolean 
     */
    public function getReportar()
    {
        return $this->reportar;
    }
}
