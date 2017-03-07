<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilToolClasifTraslados
 *
 * @ORM\Table(name="Util_Tool_Clasif_Traslados")
 * @ORM\Entity
 */
class UtilToolClasifTraslados
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Traslado_UH", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasifTrasladoUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasif_Traslado_UH", type="string", length=30, nullable=false)
     */
    private $descClasifTrasladoUh;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabiliza", type="boolean", nullable=false)
     */
    private $contabiliza;



    /**
     * Get idClasifTrasladoUh
     *
     * @return string 
     */
    public function getIdClasifTrasladoUh()
    {
        return $this->idClasifTrasladoUh;
    }

    /**
     * Set descClasifTrasladoUh
     *
     * @param string $descClasifTrasladoUh
     * @return UtilToolClasifTraslados
     */
    public function setDescClasifTrasladoUh($descClasifTrasladoUh)
    {
        $this->descClasifTrasladoUh = $descClasifTrasladoUh;

        return $this;
    }

    /**
     * Get descClasifTrasladoUh
     *
     * @return string 
     */
    public function getDescClasifTrasladoUh()
    {
        return $this->descClasifTrasladoUh;
    }

    /**
     * Set contabiliza
     *
     * @param boolean $contabiliza
     * @return UtilToolClasifTraslados
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
