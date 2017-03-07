<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubctaExcluirAgJag
 *
 * @ORM\Table(name="SubCta_Excluir_AG_Jag")
 * @ORM\Entity
 */
class SubctaExcluirAgJag
{
    /**
     * @var string
     *
     * @ORM\Column(name="CTA", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cta;

    /**
     * @var string
     *
     * @ORM\Column(name="SubCta", type="string", length=20, nullable=false)
     */
    private $subcta;



    /**
     * Get cta
     *
     * @return string 
     */
    public function getCta()
    {
        return $this->cta;
    }

    /**
     * Set subcta
     *
     * @param string $subcta
     * @return SubctaExcluirAgJag
     */
    public function setSubcta($subcta)
    {
        $this->subcta = $subcta;

        return $this;
    }

    /**
     * Get subcta
     *
     * @return string 
     */
    public function getSubcta()
    {
        return $this->subcta;
    }
}
