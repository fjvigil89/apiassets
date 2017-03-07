<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InsumoDestino
 *
 * @ORM\Table(name="Insumo_Destino")
 * @ORM\Entity
 */
class InsumoDestino
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Destino", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDestino;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Destino", type="string", length=60, nullable=false)
     */
    private $descDestino;



    /**
     * Get idDestino
     *
     * @return string 
     */
    public function getIdDestino()
    {
        return $this->idDestino;
    }

    /**
     * Set descDestino
     *
     * @param string $descDestino
     * @return InsumoDestino
     */
    public function setDescDestino($descDestino)
    {
        $this->descDestino = $descDestino;

        return $this;
    }

    /**
     * Get descDestino
     *
     * @return string 
     */
    public function getDescDestino()
    {
        return $this->descDestino;
    }
}
