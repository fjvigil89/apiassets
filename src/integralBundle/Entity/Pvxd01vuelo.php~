<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pvxd01vuelo
 *
 * @ORM\Table(name="PVXD_01Vuelo")
 * @ORM\Entity
 */
class Pvxd01vuelo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Vuelo", type="string", length=12, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idVuelo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Vuelo", type="string", length=50, nullable=false)
     */
    private $descVuelo;



    /**
     * Get idVuelo
     *
     * @return string 
     */
    public function getIdVuelo()
    {
        return $this->idVuelo;
    }

    /**
     * Set descVuelo
     *
     * @param string $descVuelo
     * @return Pvxd01vuelo
     */
    public function setDescVuelo($descVuelo)
    {
        $this->descVuelo = $descVuelo;

        return $this;
    }

    /**
     * Get descVuelo
     *
     * @return string 
     */
    public function getDescVuelo()
    {
        return $this->descVuelo;
    }
}
