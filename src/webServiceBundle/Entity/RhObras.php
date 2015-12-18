<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhObras
 *
 * @ORM\Table(name="RH_Obras")
 * @ORM\Entity
 */
class RhObras
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Obra", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObra;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Obra", type="string", length=50, nullable=false)
     */
    private $descObra;



    /**
     * Get idObra
     *
     * @return string 
     */
    public function getIdObra()
    {
        return $this->idObra;
    }

    /**
     * Set descObra
     *
     * @param string $descObra
     * @return RhObras
     */
    public function setDescObra($descObra)
    {
        $this->descObra = $descObra;

        return $this;
    }

    /**
     * Get descObra
     *
     * @return string 
     */
    public function getDescObra()
    {
        return $this->descObra;
    }
}
