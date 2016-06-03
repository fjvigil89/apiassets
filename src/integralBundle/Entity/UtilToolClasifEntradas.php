<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilToolClasifEntradas
 *
 * @ORM\Table(name="Util_Tool_Clasif_Entradas")
 * @ORM\Entity
 */
class UtilToolClasifEntradas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Entrada_UH", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasifEntradaUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasif_Entrada_UH", type="string", length=30, nullable=false)
     */
    private $descClasifEntradaUh;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabiliza", type="boolean", nullable=false)
     */
    private $contabiliza;



    /**
     * Get idClasifEntradaUh
     *
     * @return string 
     */
    public function getIdClasifEntradaUh()
    {
        return $this->idClasifEntradaUh;
    }

    /**
     * Set descClasifEntradaUh
     *
     * @param string $descClasifEntradaUh
     * @return UtilToolClasifEntradas
     */
    public function setDescClasifEntradaUh($descClasifEntradaUh)
    {
        $this->descClasifEntradaUh = $descClasifEntradaUh;

        return $this;
    }

    /**
     * Get descClasifEntradaUh
     *
     * @return string 
     */
    public function getDescClasifEntradaUh()
    {
        return $this->descClasifEntradaUh;
    }

    /**
     * Set contabiliza
     *
     * @param boolean $contabiliza
     * @return UtilToolClasifEntradas
     */
    public function setContabiliza($contabiliza)
    {
        $this->contabiliza = $contabiliza;

        return $this;
    }

    /**
     * Get contabiliza
     *
     * @return boolean 
     */
    public function getContabiliza()
    {
        return $this->contabiliza;
    }
}
