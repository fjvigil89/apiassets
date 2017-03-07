<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PresupuestoVentasheadservi
 *
 * @ORM\Table(name="Presupuesto_VentasHeadServi")
 * @ORM\Entity
 */
class PresupuestoVentasheadservi
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ano;



    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }
}
