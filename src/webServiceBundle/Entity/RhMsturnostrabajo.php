<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhMsturnostrabajo
 *
 * @ORM\Table(name="RH_MSTurnosTrabajo")
 * @ORM\Entity
 */
class RhMsturnostrabajo
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodTurno", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codturno;

    /**
     * @var string
     *
     * @ORM\Column(name="DescTurno", type="string", length=50, nullable=false)
     */
    private $descturno;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cuantia", type="integer", nullable=false)
     */
    private $cuantia;



    /**
     * Get codturno
     *
     * @return string 
     */
    public function getCodturno()
    {
        return $this->codturno;
    }

    /**
     * Set descturno
     *
     * @param string $descturno
     * @return RhMsturnostrabajo
     */
    public function setDescturno($descturno)
    {
        $this->descturno = $descturno;

        return $this;
    }

    /**
     * Get descturno
     *
     * @return string 
     */
    public function getDescturno()
    {
        return $this->descturno;
    }

    /**
     * Set cuantia
     *
     * @param integer $cuantia
     * @return RhMsturnostrabajo
     */
    public function setCuantia($cuantia)
    {
        $this->cuantia = $cuantia;

        return $this;
    }

    /**
     * Get cuantia
     *
     * @return integer 
     */
    public function getCuantia()
    {
        return $this->cuantia;
    }
}
