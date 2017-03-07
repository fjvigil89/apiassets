<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UpgradeEvents
 *
 * @ORM\Table(name="Upgrade_Events")
 * @ORM\Entity
 */
class UpgradeEvents
{
    /**
     * @var string
     *
     * @ORM\Column(name="Event_Field", type="string", length=300, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventField;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=true)
     */
    private $contador;



    /**
     * Get eventField
     *
     * @return string 
     */
    public function getEventField()
    {
        return $this->eventField;
    }

    /**
     * Set contador
     *
     * @param integer $contador
     * @return UpgradeEvents
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }
}
