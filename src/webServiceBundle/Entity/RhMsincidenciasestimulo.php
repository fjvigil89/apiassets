<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhMsincidenciasestimulo
 *
 * @ORM\Table(name="RH_MSIncidenciasEstimulo")
 * @ORM\Entity
 */
class RhMsincidenciasestimulo
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodIncidencia", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codincidencia;

    /**
     * @var string
     *
     * @ORM\Column(name="DescIncidencia", type="string", length=50, nullable=false)
     */
    private $descincidencia;

    /**
     * @var string
     *
     * @ORM\Column(name="PorcientoAfectacion", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientoafectacion;



    /**
     * Get codincidencia
     *
     * @return string 
     */
    public function getCodincidencia()
    {
        return $this->codincidencia;
    }

    /**
     * Set descincidencia
     *
     * @param string $descincidencia
     * @return RhMsincidenciasestimulo
     */
    public function setDescincidencia($descincidencia)
    {
        $this->descincidencia = $descincidencia;

        return $this;
    }

    /**
     * Get descincidencia
     *
     * @return string 
     */
    public function getDescincidencia()
    {
        return $this->descincidencia;
    }

    /**
     * Set porcientoafectacion
     *
     * @param string $porcientoafectacion
     * @return RhMsincidenciasestimulo
     */
    public function setPorcientoafectacion($porcientoafectacion)
    {
        $this->porcientoafectacion = $porcientoafectacion;

        return $this;
    }

    /**
     * Get porcientoafectacion
     *
     * @return string 
     */
    public function getPorcientoafectacion()
    {
        return $this->porcientoafectacion;
    }
}
