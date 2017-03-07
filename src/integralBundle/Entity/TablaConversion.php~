<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TablaConversion
 *
 * @ORM\Table(name="Tabla_Conversion")
 * @ORM\Entity
 */
class TablaConversion
{
    /**
     * @var string
     *
     * @ORM\Column(name="De_Um", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $deUm;

    /**
     * @var string
     *
     * @ORM\Column(name="A_Um", type="string", length=5, nullable=false)
     */
    private $aUm;

    /**
     * @var string
     *
     * @ORM\Column(name="Factor_Conversion", type="decimal", precision=14, scale=6, nullable=false)
     */
    private $factorConversion;



    /**
     * Get deUm
     *
     * @return string 
     */
    public function getDeUm()
    {
        return $this->deUm;
    }

    /**
     * Set aUm
     *
     * @param string $aUm
     * @return TablaConversion
     */
    public function setAUm($aUm)
    {
        $this->aUm = $aUm;

        return $this;
    }

    /**
     * Get aUm
     *
     * @return string 
     */
    public function getAUm()
    {
        return $this->aUm;
    }

    /**
     * Set factorConversion
     *
     * @param string $factorConversion
     * @return TablaConversion
     */
    public function setFactorConversion($factorConversion)
    {
        $this->factorConversion = $factorConversion;

        return $this;
    }

    /**
     * Get factorConversion
     *
     * @return string 
     */
    public function getFactorConversion()
    {
        return $this->factorConversion;
    }
}
