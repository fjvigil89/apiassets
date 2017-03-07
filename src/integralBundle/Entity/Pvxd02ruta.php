<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pvxd02ruta
 *
 * @ORM\Table(name="PVXD_02Ruta")
 * @ORM\Entity
 */
class Pvxd02ruta
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ruta", type="string", length=25, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRuta;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Ruta", type="string", length=50, nullable=false)
     */
    private $descRuta;



    /**
     * Get idRuta
     *
     * @return string 
     */
    public function getIdRuta()
    {
        return $this->idRuta;
    }

    /**
     * Set descRuta
     *
     * @param string $descRuta
     * @return Pvxd02ruta
     */
    public function setDescRuta($descRuta)
    {
        $this->descRuta = $descRuta;

        return $this;
    }

    /**
     * Get descRuta
     *
     * @return string 
     */
    public function getDescRuta()
    {
        return $this->descRuta;
    }
}
