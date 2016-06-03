<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhClasificacionP2
 *
 * @ORM\Table(name="RH_Clasificacion_P2")
 * @ORM\Entity
 */
class RhClasificacionP2
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasif_P2", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasifP2;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasif_P2", type="string", length=50, nullable=false)
     */
    private $descClasifP2;



    /**
     * Get idClasifP2
     *
     * @return string 
     */
    public function getIdClasifP2()
    {
        return $this->idClasifP2;
    }

    /**
     * Set descClasifP2
     *
     * @param string $descClasifP2
     * @return RhClasificacionP2
     */
    public function setDescClasifP2($descClasifP2)
    {
        $this->descClasifP2 = $descClasifP2;

        return $this;
    }

    /**
     * Get descClasifP2
     *
     * @return string 
     */
    public function getDescClasifP2()
    {
        return $this->descClasifP2;
    }
}
