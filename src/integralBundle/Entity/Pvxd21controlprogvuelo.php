<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pvxd21controlprogvuelo
 *
 * @ORM\Table(name="PVXD_21ControlProgVuelo")
 * @ORM\Entity
 */
class Pvxd21controlprogvuelo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="SoliRetorno", type="integer", nullable=false)
     */
    private $soliretorno;

    /**
     * @var integer
     *
     * @ORM\Column(name="ProgVuelo", type="integer", nullable=false)
     */
    private $progvuelo;



    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set soliretorno
     *
     * @param integer $soliretorno
     * @return Pvxd21controlprogvuelo
     */
    public function setSoliretorno($soliretorno)
    {
        $this->soliretorno = $soliretorno;

        return $this;
    }

    /**
     * Get soliretorno
     *
     * @return integer 
     */
    public function getSoliretorno()
    {
        return $this->soliretorno;
    }

    /**
     * Set progvuelo
     *
     * @param integer $progvuelo
     * @return Pvxd21controlprogvuelo
     */
    public function setProgvuelo($progvuelo)
    {
        $this->progvuelo = $progvuelo;

        return $this;
    }

    /**
     * Get progvuelo
     *
     * @return integer 
     */
    public function getProgvuelo()
    {
        return $this->progvuelo;
    }
}
