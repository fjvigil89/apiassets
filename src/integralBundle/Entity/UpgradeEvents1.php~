<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UpgradeEvents1
 *
 * @ORM\Table(name="Upgrade_Events1")
 * @ORM\Entity
 */
class UpgradeEvents1
{
    /**
     * @var string
     *
     * @ORM\Column(name="Event_Field", type="string", length=300, nullable=true)
     */
    private $eventField;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;



    /**
     * Set eventField
     *
     * @param string $eventField
     * @return UpgradeEvents1
     */
    public function setEventField($eventField)
    {
        $this->eventField = $eventField;

        return $this;
    }

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
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }
}
