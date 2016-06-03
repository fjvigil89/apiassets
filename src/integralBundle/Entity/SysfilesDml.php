<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysfilesDml
 *
 * @ORM\Table(name="SysFiles_dml")
 * @ORM\Entity
 */
class SysfilesDml
{
    /**
     * @var string
     *
     * @ORM\Column(name="V_Updt", type="string", length=70, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vUpdt;

    /**
     * @var string
     *
     * @ORM\Column(name="W_Updt", type="string", length=70, nullable=false)
     */
    private $wUpdt;

    /**
     * @var string
     *
     * @ORM\Column(name="X_Updt", type="string", length=70, nullable=false)
     */
    private $xUpdt;

    /**
     * @var string
     *
     * @ORM\Column(name="Y_Updt", type="string", length=200, nullable=false)
     */
    private $yUpdt;

    /**
     * @var string
     *
     * @ORM\Column(name="Z_Updt", type="string", length=200, nullable=false)
     */
    private $zUpdt;



    /**
     * Get vUpdt
     *
     * @return string 
     */
    public function getVUpdt()
    {
        return $this->vUpdt;
    }

    /**
     * Set wUpdt
     *
     * @param string $wUpdt
     * @return SysfilesDml
     */
    public function setWUpdt($wUpdt)
    {
        $this->wUpdt = $wUpdt;

        return $this;
    }

    /**
     * Get wUpdt
     *
     * @return string 
     */
    public function getWUpdt()
    {
        return $this->wUpdt;
    }

    /**
     * Set xUpdt
     *
     * @param string $xUpdt
     * @return SysfilesDml
     */
    public function setXUpdt($xUpdt)
    {
        $this->xUpdt = $xUpdt;

        return $this;
    }

    /**
     * Get xUpdt
     *
     * @return string 
     */
    public function getXUpdt()
    {
        return $this->xUpdt;
    }

    /**
     * Set yUpdt
     *
     * @param string $yUpdt
     * @return SysfilesDml
     */
    public function setYUpdt($yUpdt)
    {
        $this->yUpdt = $yUpdt;

        return $this;
    }

    /**
     * Get yUpdt
     *
     * @return string 
     */
    public function getYUpdt()
    {
        return $this->yUpdt;
    }

    /**
     * Set zUpdt
     *
     * @param string $zUpdt
     * @return SysfilesDml
     */
    public function setZUpdt($zUpdt)
    {
        $this->zUpdt = $zUpdt;

        return $this;
    }

    /**
     * Get zUpdt
     *
     * @return string 
     */
    public function getZUpdt()
    {
        return $this->zUpdt;
    }
}
