<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AreasGeograficas
 *
 * @ORM\Table(name="Areas_Geograficas")
 * @ORM\Entity
 */
class AreasGeograficas
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodAreaGeo", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codareageo;

    /**
     * @var string
     *
     * @ORM\Column(name="DescAreaGeo", type="string", length=50, nullable=false)
     */
    private $descareageo;



    /**
     * Get codareageo
     *
     * @return string 
     */
    public function getCodareageo()
    {
        return $this->codareageo;
    }

    /**
     * Set descareageo
     *
     * @param string $descareageo
     * @return AreasGeograficas
     */
    public function setDescareageo($descareageo)
    {
        $this->descareageo = $descareageo;

        return $this;
    }

    /**
     * Get descareageo
     *
     * @return string 
     */
    public function getDescareageo()
    {
        return $this->descareageo;
    }
}
