<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BrigadasPlanreal
 *
 * @ORM\Table(name="Brigadas_PlanReal")
 * @ORM\Entity
 */
class BrigadasPlanreal
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Brigada", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idBrigada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Año", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $año;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlanImporteMB", type="integer", nullable=false)
     */
    private $planimportemb;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlanImporteMC", type="integer", nullable=false)
     */
    private $planimportemc;

    /**
     * @var integer
     *
     * @ORM\Column(name="PlanHoras", type="integer", nullable=false)
     */
    private $planhoras;



    /**
     * Set idBrigada
     *
     * @param string $idBrigada
     * @return BrigadasPlanreal
     */
    public function setIdBrigada($idBrigada)
    {
        $this->idBrigada = $idBrigada;

        return $this;
    }

    /**
     * Get idBrigada
     *
     * @return string 
     */
    public function getIdBrigada()
    {
        return $this->idBrigada;
    }

    /**
     * Set año
     *
     * @param integer $año
     * @return BrigadasPlanreal
     */
    public function setAño($año)
    {
        $this->año = $año;

        return $this;
    }

    /**
     * Get año
     *
     * @return integer 
     */
    public function getAño()
    {
        return $this->año;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return BrigadasPlanreal
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set planimportemb
     *
     * @param integer $planimportemb
     * @return BrigadasPlanreal
     */
    public function setPlanimportemb($planimportemb)
    {
        $this->planimportemb = $planimportemb;

        return $this;
    }

    /**
     * Get planimportemb
     *
     * @return integer 
     */
    public function getPlanimportemb()
    {
        return $this->planimportemb;
    }

    /**
     * Set planimportemc
     *
     * @param integer $planimportemc
     * @return BrigadasPlanreal
     */
    public function setPlanimportemc($planimportemc)
    {
        $this->planimportemc = $planimportemc;

        return $this;
    }

    /**
     * Get planimportemc
     *
     * @return integer 
     */
    public function getPlanimportemc()
    {
        return $this->planimportemc;
    }

    /**
     * Set planhoras
     *
     * @param integer $planhoras
     * @return BrigadasPlanreal
     */
    public function setPlanhoras($planhoras)
    {
        $this->planhoras = $planhoras;

        return $this;
    }

    /**
     * Get planhoras
     *
     * @return integer 
     */
    public function getPlanhoras()
    {
        return $this->planhoras;
    }
}
