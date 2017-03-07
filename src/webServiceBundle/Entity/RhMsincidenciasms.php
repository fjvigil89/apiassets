<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhMsincidenciasms
 *
 * @ORM\Table(name="RH_MSIncidenciasMS")
 * @ORM\Entity
 */
class RhMsincidenciasms
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
     * @var integer
     *
     * @ORM\Column(name="LimiteInferior", type="smallint", nullable=false)
     */
    private $limiteinferior;

    /**
     * @var integer
     *
     * @ORM\Column(name="LimiteSuperior", type="smallint", nullable=false)
     */
    private $limitesuperior;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AfectaAntiguedad", type="boolean", nullable=false)
     */
    private $afectaantiguedad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AfectaCoeficiente", type="boolean", nullable=false)
     */
    private $afectacoeficiente;

    /**
     * @var boolean
     *
     * @ORM\Column(name="AfectaTurno", type="boolean", nullable=false)
     */
    private $afectaturno;



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
     * @return RhMsincidenciasms
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
     * @return RhMsincidenciasms
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

    /**
     * Set limiteinferior
     *
     * @param integer $limiteinferior
     * @return RhMsincidenciasms
     */
    public function setLimiteinferior($limiteinferior)
    {
        $this->limiteinferior = $limiteinferior;

        return $this;
    }

    /**
     * Get limiteinferior
     *
     * @return integer 
     */
    public function getLimiteinferior()
    {
        return $this->limiteinferior;
    }

    /**
     * Set limitesuperior
     *
     * @param integer $limitesuperior
     * @return RhMsincidenciasms
     */
    public function setLimitesuperior($limitesuperior)
    {
        $this->limitesuperior = $limitesuperior;

        return $this;
    }

    /**
     * Get limitesuperior
     *
     * @return integer 
     */
    public function getLimitesuperior()
    {
        return $this->limitesuperior;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return RhMsincidenciasms
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return integer 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set afectaantiguedad
     *
     * @param boolean $afectaantiguedad
     * @return RhMsincidenciasms
     */
    public function setAfectaantiguedad($afectaantiguedad)
    {
        $this->afectaantiguedad = $afectaantiguedad;

        return $this;
    }

    /**
     * Get afectaantiguedad
     *
     * @return boolean 
     */
    public function getAfectaantiguedad()
    {
        return $this->afectaantiguedad;
    }

    /**
     * Set afectacoeficiente
     *
     * @param boolean $afectacoeficiente
     * @return RhMsincidenciasms
     */
    public function setAfectacoeficiente($afectacoeficiente)
    {
        $this->afectacoeficiente = $afectacoeficiente;

        return $this;
    }

    /**
     * Get afectacoeficiente
     *
     * @return boolean 
     */
    public function getAfectacoeficiente()
    {
        return $this->afectacoeficiente;
    }

    /**
     * Set afectaturno
     *
     * @param boolean $afectaturno
     * @return RhMsincidenciasms
     */
    public function setAfectaturno($afectaturno)
    {
        $this->afectaturno = $afectaturno;

        return $this;
    }

    /**
     * Get afectaturno
     *
     * @return boolean 
     */
    public function getAfectaturno()
    {
        return $this->afectaturno;
    }
}
