<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhMsclasifempleadosestimulacion
 *
 * @ORM\Table(name="RH_MSClasifEmpleadosEstimulacion")
 * @ORM\Entity
 */
class RhMsclasifempleadosestimulacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodMSClasifEmplEstim", type="string", length=3, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codmsclasifemplestim;

    /**
     * @var string
     *
     * @ORM\Column(name="DescMSClasifEmplEstim", type="string", length=25, nullable=false)
     */
    private $descmsclasifemplestim;

    /**
     * @var string
     *
     * @ORM\Column(name="PorcientoCumplimiento", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientocumplimiento;

    /**
     * @var string
     *
     * @ORM\Column(name="PorcientoSobrecumplimiento", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $porcientosobrecumplimiento;



    /**
     * Get codmsclasifemplestim
     *
     * @return string 
     */
    public function getCodmsclasifemplestim()
    {
        return $this->codmsclasifemplestim;
    }

    /**
     * Set descmsclasifemplestim
     *
     * @param string $descmsclasifemplestim
     * @return RhMsclasifempleadosestimulacion
     */
    public function setDescmsclasifemplestim($descmsclasifemplestim)
    {
        $this->descmsclasifemplestim = $descmsclasifemplestim;

        return $this;
    }

    /**
     * Get descmsclasifemplestim
     *
     * @return string 
     */
    public function getDescmsclasifemplestim()
    {
        return $this->descmsclasifemplestim;
    }

    /**
     * Set porcientocumplimiento
     *
     * @param string $porcientocumplimiento
     * @return RhMsclasifempleadosestimulacion
     */
    public function setPorcientocumplimiento($porcientocumplimiento)
    {
        $this->porcientocumplimiento = $porcientocumplimiento;

        return $this;
    }

    /**
     * Get porcientocumplimiento
     *
     * @return string 
     */
    public function getPorcientocumplimiento()
    {
        return $this->porcientocumplimiento;
    }

    /**
     * Set porcientosobrecumplimiento
     *
     * @param string $porcientosobrecumplimiento
     * @return RhMsclasifempleadosestimulacion
     */
    public function setPorcientosobrecumplimiento($porcientosobrecumplimiento)
    {
        $this->porcientosobrecumplimiento = $porcientosobrecumplimiento;

        return $this;
    }

    /**
     * Get porcientosobrecumplimiento
     *
     * @return string 
     */
    public function getPorcientosobrecumplimiento()
    {
        return $this->porcientosobrecumplimiento;
    }
}
