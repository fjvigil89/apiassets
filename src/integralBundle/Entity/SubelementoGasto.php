<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubelementoGasto
 *
 * @ORM\Table(name="Subelemento_Gasto")
 * @ORM\Entity
 */
class SubelementoGasto
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
     * @ORM\Column(name="Id_SubElemGasto", type="string", length=15, nullable=false)
     */
    private $idSubelemgasto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Subelemento", type="string", length=50, nullable=false)
     */
    private $descSubelemento;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Concepto", type="string", length=10, nullable=false)
     */
    private $idConcepto;



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
     * Set idSubelemgasto
     *
     * @param string $idSubelemgasto
     * @return SubelementoGasto
     */
    public function setIdSubelemgasto($idSubelemgasto)
    {
        $this->idSubelemgasto = $idSubelemgasto;

        return $this;
    }

    /**
     * Get idSubelemgasto
     *
     * @return string 
     */
    public function getIdSubelemgasto()
    {
        return $this->idSubelemgasto;
    }

    /**
     * Set descSubelemento
     *
     * @param string $descSubelemento
     * @return SubelementoGasto
     */
    public function setDescSubelemento($descSubelemento)
    {
        $this->descSubelemento = $descSubelemento;

        return $this;
    }

    /**
     * Get descSubelemento
     *
     * @return string 
     */
    public function getDescSubelemento()
    {
        return $this->descSubelemento;
    }

    /**
     * Set idConcepto
     *
     * @param string $idConcepto
     * @return SubelementoGasto
     */
    public function setIdConcepto($idConcepto)
    {
        $this->idConcepto = $idConcepto;

        return $this;
    }

    /**
     * Get idConcepto
     *
     * @return string 
     */
    public function getIdConcepto()
    {
        return $this->idConcepto;
    }
}
