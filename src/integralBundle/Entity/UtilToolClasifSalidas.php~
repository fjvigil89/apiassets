<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilToolClasifSalidas
 *
 * @ORM\Table(name="Util_Tool_Clasif_Salidas")
 * @ORM\Entity
 */
class UtilToolClasifSalidas
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_Salida_UH", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasifSalidaUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasif_Salida_UH", type="string", length=30, nullable=false)
     */
    private $descClasifSalidaUh;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Contabiliza", type="boolean", nullable=false)
     */
    private $contabiliza;



    /**
     * Get idClasifSalidaUh
     *
     * @return string 
     */
    public function getIdClasifSalidaUh()
    {
        return $this->idClasifSalidaUh;
    }

    /**
     * Set descClasifSalidaUh
     *
     * @param string $descClasifSalidaUh
     * @return UtilToolClasifSalidas
     */
    public function setDescClasifSalidaUh($descClasifSalidaUh)
    {
        $this->descClasifSalidaUh = $descClasifSalidaUh;

        return $this;
    }

    /**
     * Get descClasifSalidaUh
     *
     * @return string 
     */
    public function getDescClasifSalidaUh()
    {
        return $this->descClasifSalidaUh;
    }

    /**
     * Set contabiliza
     *
     * @param boolean $contabiliza
     * @return UtilToolClasifSalidas
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
