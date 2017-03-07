<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CaracterizacionAuditoria
 *
 * @ORM\Table(name="Caracterizacion_Auditoria")
 * @ORM\Entity
 */
class CaracterizacionAuditoria
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="Quitar_VB_xCta_Inex", type="boolean", nullable=false)
     */
    private $quitarVbXctaInex;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Show_Instalad_Options", type="boolean", nullable=false)
     */
    private $showInstaladOptions;

    /**
     * @var string
     *
     * @ORM\Column(name="_Def", type="string", length=5, nullable=false)
     */
    private $def;

    /**
     * @var integer
     *
     * @ORM\Column(name="Count00", type="smallint", nullable=false)
     */
    private $count00;

    /**
     * @var integer
     *
     * @ORM\Column(name="Country", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="L_Updt", type="string", length=70, nullable=false)
     */
    private $lUpdt;

    /**
     * @var string
     *
     * @ORM\Column(name="LMCL", type="string", length=100, nullable=false)
     */
    private $lmcl;



    /**
     * Set quitarVbXctaInex
     *
     * @param boolean $quitarVbXctaInex
     * @return CaracterizacionAuditoria
     */
    public function setQuitarVbXctaInex($quitarVbXctaInex)
    {
        $this->quitarVbXctaInex = $quitarVbXctaInex;

        return $this;
    }

    /**
     * Get quitarVbXctaInex
     *
     * @return boolean 
     */
    public function getQuitarVbXctaInex()
    {
        return $this->quitarVbXctaInex;
    }

    /**
     * Set showInstaladOptions
     *
     * @param boolean $showInstaladOptions
     * @return CaracterizacionAuditoria
     */
    public function setShowInstaladOptions($showInstaladOptions)
    {
        $this->showInstaladOptions = $showInstaladOptions;

        return $this;
    }

    /**
     * Get showInstaladOptions
     *
     * @return boolean 
     */
    public function getShowInstaladOptions()
    {
        return $this->showInstaladOptions;
    }

    /**
     * Set def
     *
     * @param string $def
     * @return CaracterizacionAuditoria
     */
    public function setDef($def)
    {
        $this->def = $def;

        return $this;
    }

    /**
     * Get def
     *
     * @return string 
     */
    public function getDef()
    {
        return $this->def;
    }

    /**
     * Set count00
     *
     * @param integer $count00
     * @return CaracterizacionAuditoria
     */
    public function setCount00($count00)
    {
        $this->count00 = $count00;

        return $this;
    }

    /**
     * Get count00
     *
     * @return integer 
     */
    public function getCount00()
    {
        return $this->count00;
    }

    /**
     * Get country
     *
     * @return integer 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set lUpdt
     *
     * @param string $lUpdt
     * @return CaracterizacionAuditoria
     */
    public function setLUpdt($lUpdt)
    {
        $this->lUpdt = $lUpdt;

        return $this;
    }

    /**
     * Get lUpdt
     *
     * @return string 
     */
    public function getLUpdt()
    {
        return $this->lUpdt;
    }

    /**
     * Set lmcl
     *
     * @param string $lmcl
     * @return CaracterizacionAuditoria
     */
    public function setLmcl($lmcl)
    {
        $this->lmcl = $lmcl;

        return $this;
    }

    /**
     * Get lmcl
     *
     * @return string 
     */
    public function getLmcl()
    {
        return $this->lmcl;
    }
}
