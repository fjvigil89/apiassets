<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChCatConceptos
 *
 * @ORM\Table(name="CH_Cat_Conceptos")
 * @ORM\Entity
 */
class ChCatConceptos
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConcepto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Concepto", type="string", length=50, nullable=false)
     */
    private $descConcepto;



    /**
     * Get idConcepto
     *
     * @return string 
     */
    public function getIdConcepto()
    {
        return $this->idConcepto;
    }

    /**
     * Set descConcepto
     *
     * @param string $descConcepto
     * @return ChCatConceptos
     */
    public function setDescConcepto($descConcepto)
    {
        $this->descConcepto = $descConcepto;

        return $this;
    }

    /**
     * Get descConcepto
     *
     * @return string 
     */
    public function getDescConcepto()
    {
        return $this->descConcepto;
    }
}
