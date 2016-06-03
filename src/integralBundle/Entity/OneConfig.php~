<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OneConfig
 *
 * @ORM\Table(name="ONE_Config")
 * @ORM\Entity
 */
class OneConfig
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Modo_Entrada", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $modoEntrada;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Usar_Plan_Elem_SubElem_Gasto", type="boolean", nullable=false)
     */
    private $usarPlanElemSubelemGasto;



    /**
     * Get modoEntrada
     *
     * @return integer 
     */
    public function getModoEntrada()
    {
        return $this->modoEntrada;
    }

    /**
     * Set usarPlanElemSubelemGasto
     *
     * @param boolean $usarPlanElemSubelemGasto
     * @return OneConfig
     */
    public function setUsarPlanElemSubelemGasto($usarPlanElemSubelemGasto)
    {
        $this->usarPlanElemSubelemGasto = $usarPlanElemSubelemGasto;

        return $this;
    }

    /**
     * Get usarPlanElemSubelemGasto
     *
     * @return boolean 
     */
    public function getUsarPlanElemSubelemGasto()
    {
        return $this->usarPlanElemSubelemGasto;
    }
}
