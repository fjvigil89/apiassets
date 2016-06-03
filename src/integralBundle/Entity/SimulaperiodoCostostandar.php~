<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SimulaperiodoCostostandar
 *
 * @ORM\Table(name="SimulaPeriodo_CostoStandar")
 * @ORM\Entity
 */
class SimulaperiodoCostostandar
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
     * Set unidadesporprecio
     *
     * @param integer $unidadesporprecio
     * @return SimulaperiodoCostostandar
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
