<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRzojejecPresup
 *
 * @ORM\Table(name="Fz_RZoJEjec_Presup")
 * @ORM\Entity
 */
class FzRzojejecPresup
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion_CALC", type="string", length=5, nullable=false)
     */
    private $idAgrupacionCalc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cuenta", type="string", length=50, nullable=false)
     */
    private $idCuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion", type="string", length=200, nullable=false)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_MY", type="datetime", nullable=false)
     */
    private $fechaMy;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Mes", type="integer", nullable=false)
     */
    private $planMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Real_Mes", type="integer", nullable=false)
     */
    private $realMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Porciento_Mes", type="integer", nullable=false)
     */
    private $porcientoMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Acum", type="integer", nullable=false)
     */
    private $planAcum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Real_Acum", type="integer", nullable=false)
     */
    private $realAcum;

    /**
     * @var integer
     *
     * @ORM\Column(name="Porciento_Acum", type="integer", nullable=false)
     */
    private $porcientoAcum;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="IdSync", type="uniqueidentifier", nullable=false)
     */
    private $idsync;



    /**
     * Get contador
     *
     * @return integer 
     */
    public function getContador()
    {
        return $this->contador;
    }

    /**
     * Set idAgrupacionCalc
     *
     * @param string $idAgrupacionCalc
     * @return FzRzojejecPresup
     */
    public function setIdAgrupacionCalc($idAgrupacionCalc)
    {
        $this->idAgrupacionCalc = $idAgrupacionCalc;

        return $this;
    }

    /**
     * Get idAgrupacionCalc
     *
     * @return string 
     */
    public function getIdAgrupacionCalc()
    {
        return $this->idAgrupacionCalc;
    }

    /**
     * Set idCuenta
     *
     * @param string $idCuenta
     * @return FzRzojejecPresup
     */
    public function setIdCuenta($idCuenta)
    {
        $this->idCuenta = $idCuenta;

        return $this;
    }

    /**
     * Get idCuenta
     *
     * @return string 
     */
    public function getIdCuenta()
    {
        return $this->idCuenta;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return FzRzojejecPresup
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set fechaMy
     *
     * @param \DateTime $fechaMy
     * @return FzRzojejecPresup
     */
    public function setFechaMy($fechaMy)
    {
        $this->fechaMy = $fechaMy;

        return $this;
    }

    /**
     * Get fechaMy
     *
     * @return \DateTime 
     */
    public function getFechaMy()
    {
        return $this->fechaMy;
    }

    /**
     * Set planMes
     *
     * @param integer $planMes
     * @return FzRzojejecPresup
     */
    public function setPlanMes($planMes)
    {
        $this->planMes = $planMes;

        return $this;
    }

    /**
     * Get planMes
     *
     * @return integer 
     */
    public function getPlanMes()
    {
        return $this->planMes;
    }

    /**
     * Set realMes
     *
     * @param integer $realMes
     * @return FzRzojejecPresup
     */
    public function setRealMes($realMes)
    {
        $this->realMes = $realMes;

        return $this;
    }

    /**
     * Get realMes
     *
     * @return integer 
     */
    public function getRealMes()
    {
        return $this->realMes;
    }

    /**
     * Set porcientoMes
     *
     * @param integer $porcientoMes
     * @return FzRzojejecPresup
     */
    public function setPorcientoMes($porcientoMes)
    {
        $this->porcientoMes = $porcientoMes;

        return $this;
    }

    /**
     * Get porcientoMes
     *
     * @return integer 
     */
    public function getPorcientoMes()
    {
        return $this->porcientoMes;
    }

    /**
     * Set planAcum
     *
     * @param integer $planAcum
     * @return FzRzojejecPresup
     */
    public function setPlanAcum($planAcum)
    {
        $this->planAcum = $planAcum;

        return $this;
    }

    /**
     * Get planAcum
     *
     * @return integer 
     */
    public function getPlanAcum()
    {
        return $this->planAcum;
    }

    /**
     * Set realAcum
     *
     * @param integer $realAcum
     * @return FzRzojejecPresup
     */
    public function setRealAcum($realAcum)
    {
        $this->realAcum = $realAcum;

        return $this;
    }

    /**
     * Get realAcum
     *
     * @return integer 
     */
    public function getRealAcum()
    {
        return $this->realAcum;
    }

    /**
     * Set porcientoAcum
     *
     * @param integer $porcientoAcum
     * @return FzRzojejecPresup
     */
    public function setPorcientoAcum($porcientoAcum)
    {
        $this->porcientoAcum = $porcientoAcum;

        return $this;
    }

    /**
     * Get porcientoAcum
     *
     * @return integer 
     */
    public function getPorcientoAcum()
    {
        return $this->porcientoAcum;
    }

    /**
     * Set idsync
     *
     * @param uniqueidentifier $idsync
     * @return FzRzojejecPresup
     */
    public function setIdsync($idsync)
    {
        $this->idsync = $idsync;

        return $this;
    }

    /**
     * Get idsync
     *
     * @return uniqueidentifier 
     */
    public function getIdsync()
    {
        return $this->idsync;
    }
}
