<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoTiposManip
 *
 * @ORM\Table(name="Activo_Fijo_Tipos_Manip")
 * @ORM\Entity
 */
class ActivoFijoTiposManip
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_ManipActivoFijo", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idManipactivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ManipActivoFijo", type="string", length=30, nullable=false)
     */
    private $descManipactivofijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Manip_Tarifa", type="integer", nullable=false)
     */
    private $manipTarifa;

    /**
     * @var integer
     *
     * @ORM\Column(name="Manip_TarifaMC", type="integer", nullable=false)
     */
    private $manipTarifamc;



    /**
     * Get idManipactivofijo
     *
     * @return string 
     */
    public function getIdManipactivofijo()
    {
        return $this->idManipactivofijo;
    }

    /**
     * Set descManipactivofijo
     *
     * @param string $descManipactivofijo
     * @return ActivoFijoTiposManip
     */
    public function setDescManipactivofijo($descManipactivofijo)
    {
        $this->descManipactivofijo = $descManipactivofijo;

        return $this;
    }

    /**
     * Get descManipactivofijo
     *
     * @return string 
     */
    public function getDescManipactivofijo()
    {
        return $this->descManipactivofijo;
    }

    /**
     * Set manipTarifa
     *
     * @param integer $manipTarifa
     * @return ActivoFijoTiposManip
     */
    public function setManipTarifa($manipTarifa)
    {
        $this->manipTarifa = $manipTarifa;

        return $this;
    }

    /**
     * Get manipTarifa
     *
     * @return integer 
     */
    public function getManipTarifa()
    {
        return $this->manipTarifa;
    }

    /**
     * Set manipTarifamc
     *
     * @param integer $manipTarifamc
     * @return ActivoFijoTiposManip
     */
    public function setManipTarifamc($manipTarifamc)
    {
        $this->manipTarifamc = $manipTarifamc;

        return $this;
    }

    /**
     * Get manipTarifamc
     *
     * @return integer 
     */
    public function getManipTarifamc()
    {
        return $this->manipTarifamc;
    }
}
