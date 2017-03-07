<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CanalesDistribucion
 *
 * @ORM\Table(name="Canales_Distribucion")
 * @ORM\Entity
 */
class CanalesDistribucion
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodCanalDist", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codcanaldist;

    /**
     * @var string
     *
     * @ORM\Column(name="DescCanalDist", type="string", length=50, nullable=false)
     */
    private $desccanaldist;



    /**
     * Get codcanaldist
     *
     * @return string 
     */
    public function getCodcanaldist()
    {
        return $this->codcanaldist;
    }

    /**
     * Set desccanaldist
     *
     * @param string $desccanaldist
     * @return CanalesDistribucion
     */
    public function setDesccanaldist($desccanaldist)
    {
        $this->desccanaldist = $desccanaldist;

        return $this;
    }

    /**
     * Get desccanaldist
     *
     * @return string 
     */
    public function getDesccanaldist()
    {
        return $this->desccanaldist;
    }
}
