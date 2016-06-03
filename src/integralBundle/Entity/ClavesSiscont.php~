<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClavesSiscont
 *
 * @ORM\Table(name="Claves_Siscont")
 * @ORM\Entity
 */
class ClavesSiscont
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodAssets", type="string", length=4, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codassets;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clave", type="string", length=50, nullable=false)
     */
    private $descClave;

    /**
     * @var string
     *
     * @ORM\Column(name="CodSisconts", type="string", length=3, nullable=false)
     */
    private $codsisconts;



    /**
     * Get codassets
     *
     * @return string 
     */
    public function getCodassets()
    {
        return $this->codassets;
    }

    /**
     * Set descClave
     *
     * @param string $descClave
     * @return ClavesSiscont
     */
    public function setDescClave($descClave)
    {
        $this->descClave = $descClave;

        return $this;
    }

    /**
     * Get descClave
     *
     * @return string 
     */
    public function getDescClave()
    {
        return $this->descClave;
    }

    /**
     * Set codsisconts
     *
     * @param string $codsisconts
     * @return ClavesSiscont
     */
    public function setCodsisconts($codsisconts)
    {
        $this->codsisconts = $codsisconts;

        return $this;
    }

    /**
     * Get codsisconts
     *
     * @return string 
     */
    public function getCodsisconts()
    {
        return $this->codsisconts;
    }
}
