<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sysdata
 *
 * @ORM\Table(name="Sysdata")
 * @ORM\Entity
 */
class Sysdata
{
    /**
     * @var string
     *
     * @ORM\Column(name="_name", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="_sql_Code", type="integer", nullable=false)
     */
    private $sqlCode;



    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set sqlCode
     *
     * @param integer $sqlCode
     * @return Sysdata
     */
    public function setSqlCode($sqlCode)
    {
        $this->sqlCode = $sqlCode;

        return $this;
    }

    /**
     * Get sqlCode
     *
     * @return integer 
     */
    public function getSqlCode()
    {
        return $this->sqlCode;
    }
}
