<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PeriodoCostostandar
 *
 * @ORM\Table(name="Periodo_CostoStandar")
 * @ORM\Entity
 */
class PeriodoCostostandar
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Periodo", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPeriodo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Periodo", type="string", length=200, nullable=false)
     */
    private $descPeriodo;

    /**
     * @var integer
     *
     * @ORM\Column(name="UnidadesporPrecio", type="integer", nullable=false)
     */
    private $unidadesporprecio;



    /**
     * Get idPeriodo
     *
     * @return integer 
     */
    public function getIdPeriodo()
    {
        return $this->idPeriodo;
    }

    /**
     * Set descPeriodo
     *
     * @param string $descPeriodo
     * @return PeriodoCostostandar
     */
    public function setDescPeriodo($descPeriodo)
    {
        $this->descPeriodo = $descPeriodo;

        return $this;
    }

    /**
     * Get descPeriodo
     *
     * @return string 
     */
    public function getDescPeriodo()
    {
        return $this->descPeriodo;
    }

    /**
     * Set unidadesporprecio
     *
     * @param integer $unidadesporprecio
     * @return PeriodoCostostandar
     */
    public function setUnidadesporprecio($unidadesporprecio)
    {
        $this->unidadesporprecio = $unidadesporprecio;

        return $this;
    }

    /**
     * Get unidadesporprecio
     *
     * @return integer 
     */
    public function getUnidadesporprecio()
    {
        return $this->unidadesporprecio;
    }
}
