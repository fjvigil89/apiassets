<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Organismo
 *
 * @ORM\Table(name="Organismo")
 * @ORM\Entity
 */
class Organismo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Organismo", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrganismo;

    /**
     * @var string
     *
     * @ORM\Column(name="Organismo", type="string", length=50, nullable=false)
     */
    private $organismo;

    /**
     * @var string
     *
     * @ORM\Column(name="Sector", type="string", length=30, nullable=false)
     */
    private $sector;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Requiere_Desc", type="boolean", nullable=false)
     */
    private $requiereDesc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="VIP", type="boolean", nullable=false)
     */
    private $vip;



    /**
     * Get idOrganismo
     *
     * @return string 
     */
    public function getIdOrganismo()
    {
        return $this->idOrganismo;
    }

    /**
     * Set organismo
     *
     * @param string $organismo
     * @return Organismo
     */
    public function setOrganismo($organismo)
    {
        $this->organismo = $organismo;

        return $this;
    }

    /**
     * Get organismo
     *
     * @return string 
     */
    public function getOrganismo()
    {
        return $this->organismo;
    }

    /**
     * Set sector
     *
     * @param string $sector
     * @return Organismo
     */
    public function setSector($sector)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return string 
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set requiereDesc
     *
     * @param boolean $requiereDesc
     * @return Organismo
     */
    public function setRequiereDesc($requiereDesc)
    {
        $this->requiereDesc = $requiereDesc;

        return $this;
    }

    /**
     * Get requiereDesc
     *
     * @return boolean 
     */
    public function getRequiereDesc()
    {
        return $this->requiereDesc;
    }

    /**
     * Set vip
     *
     * @param boolean $vip
     * @return Organismo
     */
    public function setVip($vip)
    {
        $this->vip = $vip;

        return $this;
    }

    /**
     * Get vip
     *
     * @return boolean 
     */
    public function getVip()
    {
        return $this->vip;
    }
}
