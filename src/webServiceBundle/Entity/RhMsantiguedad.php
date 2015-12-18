<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhMsantiguedad
 *
 * @ORM\Table(name="RH_MSAntiguedad")
 * @ORM\Entity
 */
class RhMsantiguedad
{
    /**
     * @var string
     *
     * @ORM\Column(name="Codigo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=50, nullable=false)
     */
    private $descripcion;

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
     * @ORM\Column(name="Porciento", type="integer", nullable=false)
     */
    private $porciento;



    /**
     * Get codigo
     *
     * @return string 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return RhMsantiguedad
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set limiteinferior
     *
     * @param integer $limiteinferior
     * @return RhMsantiguedad
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
     * @return RhMsantiguedad
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
     * Set porciento
     *
     * @param integer $porciento
     * @return RhMsantiguedad
     */
    public function setPorciento($porciento)
    {
        $this->porciento = $porciento;

        return $this;
    }

    /**
     * Get porciento
     *
     * @return integer 
     */
    public function getPorciento()
    {
        return $this->porciento;
    }
}
