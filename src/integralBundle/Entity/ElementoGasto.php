<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ElementoGasto
 *
 * @ORM\Table(name="Elemento_Gasto")
 * @ORM\Entity
 */
class ElementoGasto
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_ElemGasto", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idElemgasto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Elemento", type="string", length=50, nullable=false)
     */
    private $descElemento;



    /**
     * Get idElemgasto
     *
     * @return string 
     */
    public function getIdElemgasto()
    {
        return $this->idElemgasto;
    }

    /**
     * Set descElemento
     *
     * @param string $descElemento
     * @return ElementoGasto
     */
    public function setDescElemento($descElemento)
    {
        $this->descElemento = $descElemento;

        return $this;
    }

    /**
     * Get descElemento
     *
     * @return string 
     */
    public function getDescElemento()
    {
        return $this->descElemento;
    }
}
