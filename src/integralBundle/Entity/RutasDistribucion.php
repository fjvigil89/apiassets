<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RutasDistribucion
 *
 * @ORM\Table(name="Rutas_Distribucion")
 * @ORM\Entity
 */
class RutasDistribucion
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodRutaDist", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codrutadist;

    /**
     * @var string
     *
     * @ORM\Column(name="DescRutaDist", type="string", length=50, nullable=false)
     */
    private $descrutadist;



    /**
     * Get codrutadist
     *
     * @return string 
     */
    public function getCodrutadist()
    {
        return $this->codrutadist;
    }

    /**
     * Set descrutadist
     *
     * @param string $descrutadist
     * @return RutasDistribucion
     */
    public function setDescrutadist($descrutadist)
    {
        $this->descrutadist = $descrutadist;

        return $this;
    }

    /**
     * Get descrutadist
     *
     * @return string 
     */
    public function getDescrutadist()
    {
        return $this->descrutadist;
    }
}
