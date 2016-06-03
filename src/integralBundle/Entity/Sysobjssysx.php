<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sysobjssysx
 *
 * @ORM\Table(name="SysObjsSysx")
 * @ORM\Entity
 */
class Sysobjssysx
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador9", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador9;

    /**
     * @var string
     *
     * @ORM\Column(name="_x_Tmp", type="string", length=600, nullable=false)
     */
    private $xTmp;

    /**
     * @var integer
     *
     * @ORM\Column(name="_U", type="smallint", nullable=false)
     */
    private $u;



    /**
     * Get contador9
     *
     * @return integer 
     */
    public function getContador9()
    {
        return $this->contador9;
    }

    /**
     * Set xTmp
     *
     * @param string $xTmp
     * @return Sysobjssysx
     */
    public function setXTmp($xTmp)
    {
        $this->xTmp = $xTmp;

        return $this;
    }

    /**
     * Get xTmp
     *
     * @return string 
     */
    public function getXTmp()
    {
        return $this->xTmp;
    }

    /**
     * Set u
     *
     * @param integer $u
     * @return Sysobjssysx
     */
    public function setU($u)
    {
        $this->u = $u;

        return $this;
    }

    /**
     * Get u
     *
     * @return integer 
     */
    public function getU()
    {
        return $this->u;
    }
}
