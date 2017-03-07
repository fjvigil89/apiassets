<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CzModuleLc
 *
 * @ORM\Table(name="Cz_Module_Lc")
 * @ORM\Entity
 */
class CzModuleLc
{
    /**
     * @var string
     *
     * @ORM\Column(name="ML", type="string", length=1, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ml;

    /**
     * @var string
     *
     * @ORM\Column(name="NL", type="blob", nullable=false)
     */
    private $nl;

    /**
     * @var string
     *
     * @ORM\Column(name="Fkey", type="blob", nullable=false)
     */
    private $fkey;

    /**
     * @var string
     *
     * @ORM\Column(name="CN", type="blob", nullable=false)
     */
    private $cn;



    /**
     * Get ml
     *
     * @return string 
     */
    public function getMl()
    {
        return $this->ml;
    }

    /**
     * Set nl
     *
     * @param string $nl
     * @return CzModuleLc
     */
    public function setNl($nl)
    {
        $this->nl = $nl;

        return $this;
    }

    /**
     * Get nl
     *
     * @return string 
     */
    public function getNl()
    {
        return $this->nl;
    }

    /**
     * Set fkey
     *
     * @param string $fkey
     * @return CzModuleLc
     */
    public function setFkey($fkey)
    {
        $this->fkey = $fkey;

        return $this;
    }

    /**
     * Get fkey
     *
     * @return string 
     */
    public function getFkey()
    {
        return $this->fkey;
    }

    /**
     * Set cn
     *
     * @param string $cn
     * @return CzModuleLc
     */
    public function setCn($cn)
    {
        $this->cn = $cn;

        return $this;
    }

    /**
     * Get cn
     *
     * @return string 
     */
    public function getCn()
    {
        return $this->cn;
    }
}
