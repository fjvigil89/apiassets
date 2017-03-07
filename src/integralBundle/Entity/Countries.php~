<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 *
 * @ORM\Table(name="Countries")
 * @ORM\Entity
 */
class Countries
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodCountry", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codcountry;

    /**
     * @var string
     *
     * @ORM\Column(name="DescCountry", type="string", length=50, nullable=false)
     */
    private $desccountry;

    /**
     * @var boolean
     *
     * @ORM\Column(name="NacionFavorecida", type="boolean", nullable=false)
     */
    private $nacionfavorecida;



    /**
     * Get codcountry
     *
     * @return string 
     */
    public function getCodcountry()
    {
        return $this->codcountry;
    }

    /**
     * Set desccountry
     *
     * @param string $desccountry
     * @return Countries
     */
    public function setDesccountry($desccountry)
    {
        $this->desccountry = $desccountry;

        return $this;
    }

    /**
     * Get desccountry
     *
     * @return string 
     */
    public function getDesccountry()
    {
        return $this->desccountry;
    }

    /**
     * Set nacionfavorecida
     *
     * @param boolean $nacionfavorecida
     * @return Countries
     */
    public function setNacionfavorecida($nacionfavorecida)
    {
        $this->nacionfavorecida = $nacionfavorecida;

        return $this;
    }

    /**
     * Get nacionfavorecida
     *
     * @return boolean 
     */
    public function getNacionfavorecida()
    {
        return $this->nacionfavorecida;
    }
}
