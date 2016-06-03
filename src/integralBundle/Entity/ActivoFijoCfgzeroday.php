<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoCfgzeroday
 *
 * @ORM\Table(name="Activo_Fijo_CfgZeroDay")
 * @ORM\Entity
 */
class ActivoFijoCfgzeroday
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_ActivoFijo", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Rotulo", type="string", length=15, nullable=false)
     */
    private $idRotulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ActivoFijo", type="string", length=255, nullable=false)
     */
    private $descActivofijo;

    /**
     * @var integer
     *
     * @ORM\Column(name="TCoIRPM", type="smallint", nullable=false)
     */
    private $tcoirpm;

    /**
     * @var integer
     *
     * @ORM\Column(name="TC", type="integer", nullable=false)
     */
    private $tc;

    /**
     * @var integer
     *
     * @ORM\Column(name="IRPM", type="integer", nullable=false)
     */
    private $irpm;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Configurar", type="boolean", nullable=false)
     */
    private $configurar;



    /**
     * Get idActivofijo
     *
     * @return string 
     */
    public function getIdActivofijo()
    {
        return $this->idActivofijo;
    }

    /**
     * Set idRotulo
     *
     * @param string $idRotulo
     * @return ActivoFijoCfgzeroday
     */
    public function setIdRotulo($idRotulo)
    {
        $this->idRotulo = $idRotulo;

        return $this;
    }

    /**
     * Get idRotulo
     *
     * @return string 
     */
    public function getIdRotulo()
    {
        return $this->idRotulo;
    }

    /**
     * Set descActivofijo
     *
     * @param string $descActivofijo
     * @return ActivoFijoCfgzeroday
     */
    public function setDescActivofijo($descActivofijo)
    {
        $this->descActivofijo = $descActivofijo;

        return $this;
    }

    /**
     * Get descActivofijo
     *
     * @return string 
     */
    public function getDescActivofijo()
    {
        return $this->descActivofijo;
    }

    /**
     * Set tcoirpm
     *
     * @param integer $tcoirpm
     * @return ActivoFijoCfgzeroday
     */
    public function setTcoirpm($tcoirpm)
    {
        $this->tcoirpm = $tcoirpm;

        return $this;
    }

    /**
     * Get tcoirpm
     *
     * @return integer 
     */
    public function getTcoirpm()
    {
        return $this->tcoirpm;
    }

    /**
     * Set tc
     *
     * @param integer $tc
     * @return ActivoFijoCfgzeroday
     */
    public function setTc($tc)
    {
        $this->tc = $tc;

        return $this;
    }

    /**
     * Get tc
     *
     * @return integer 
     */
    public function getTc()
    {
        return $this->tc;
    }

    /**
     * Set irpm
     *
     * @param integer $irpm
     * @return ActivoFijoCfgzeroday
     */
    public function setIrpm($irpm)
    {
        $this->irpm = $irpm;

        return $this;
    }

    /**
     * Get irpm
     *
     * @return integer 
     */
    public function getIrpm()
    {
        return $this->irpm;
    }

    /**
     * Set configurar
     *
     * @param boolean $configurar
     * @return ActivoFijoCfgzeroday
     */
    public function setConfigurar($configurar)
    {
        $this->configurar = $configurar;

        return $this;
    }

    /**
     * Get configurar
     *
     * @return boolean 
     */
    public function getConfigurar()
    {
        return $this->configurar;
    }
}
