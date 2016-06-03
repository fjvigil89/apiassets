<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FzRzoPresupuestoReal
 *
 * @ORM\Table(name="Fz_RZo_Presupuesto_Real")
 * @ORM\Entity
 */
class FzRzoPresupuestoReal
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Agrupacion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAgrupacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Ingreso", type="integer", nullable=false)
     */
    private $planIngreso;

    /**
     * @var integer
     *
     * @ORM\Column(name="Plan_Gastos", type="integer", nullable=false)
     */
    private $planGastos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Real_Ingresos", type="integer", nullable=false)
     */
    private $realIngresos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Real_Gastos", type="integer", nullable=false)
     */
    private $realGastos;

    /**
     * @var integer
     *
     * @ORM\Column(name="Anno", type="integer", nullable=false)
     */
    private $anno;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="integer", nullable=false)
     */
    private $mes;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="IdSync", type="uniqueidentifier", nullable=false)
     */
    private $idsync;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     */
    private $tipoMoneda;



    /**
     * Get idAgrupacion
     *
     * @return string 
     */
    public function getIdAgrupacion()
    {
        return $this->idAgrupacion;
    }

    /**
     * Set planIngreso
     *
     * @param integer $planIngreso
     * @return FzRzoPresupuestoReal
     */
    public function setPlanIngreso($planIngreso)
    {
        $this->planIngreso = $planIngreso;

        return $this;
    }

    /**
     * Get planIngreso
     *
     * @return integer 
     */
    public function getPlanIngreso()
    {
        return $this->planIngreso;
    }

    /**
     * Set planGastos
     *
     * @param integer $planGastos
     * @return FzRzoPresupuestoReal
     */
    public function setPlanGastos($planGastos)
    {
        $this->planGastos = $planGastos;

        return $this;
    }

    /**
     * Get planGastos
     *
     * @return integer 
     */
    public function getPlanGastos()
    {
        return $this->planGastos;
    }

    /**
     * Set realIngresos
     *
     * @param integer $realIngresos
     * @return FzRzoPresupuestoReal
     */
    public function setRealIngresos($realIngresos)
    {
        $this->realIngresos = $realIngresos;

        return $this;
    }

    /**
     * Get realIngresos
     *
     * @return integer 
     */
    public function getRealIngresos()
    {
        return $this->realIngresos;
    }

    /**
     * Set realGastos
     *
     * @param integer $realGastos
     * @return FzRzoPresupuestoReal
     */
    public function setRealGastos($realGastos)
    {
        $this->realGastos = $realGastos;

        return $this;
    }

    /**
     * Get realGastos
     *
     * @return integer 
     */
    public function getRealGastos()
    {
        return $this->realGastos;
    }

    /**
     * Set anno
     *
     * @param integer $anno
     * @return FzRzoPresupuestoReal
     */
    public function setAnno($anno)
    {
        $this->anno = $anno;

        return $this;
    }

    /**
     * Get anno
     *
     * @return integer 
     */
    public function getAnno()
    {
        return $this->anno;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return FzRzoPresupuestoReal
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
     * Set idsync
     *
     * @param uniqueidentifier $idsync
     * @return FzRzoPresupuestoReal
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

    /**
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return FzRzoPresupuestoReal
     */
    public function setTipoMoneda($tipoMoneda)
    {
        $this->tipoMoneda = $tipoMoneda;

        return $this;
    }

    /**
     * Get tipoMoneda
     *
     * @return integer 
     */
    public function getTipoMoneda()
    {
        return $this->tipoMoneda;
    }
}
