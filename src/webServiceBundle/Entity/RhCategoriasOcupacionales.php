<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhCategoriasOcupacionales
 *
 * @ORM\Table(name="RH_Categorias_Ocupacionales")
 * @ORM\Entity
 */
class RhCategoriasOcupacionales
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Categoria", type="string", length=25, nullable=false)
     */
    private $descCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Identificacion", type="string", length=2, nullable=false)
     */
    private $identificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="CUCPromIndex", type="integer", nullable=false)
     */
    private $cucpromindex;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Lim_Salario_Estimular", type="boolean", nullable=false)
     */
    private $limSalarioEstimular;



    /**
     * Get idCategoria
     *
     * @return string 
     */
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }

    /**
     * Set descCategoria
     *
     * @param string $descCategoria
     * @return RhCategoriasOcupacionales
     */
    public function setDescCategoria($descCategoria)
    {
        $this->descCategoria = $descCategoria;

        return $this;
    }

    /**
     * Get descCategoria
     *
     * @return string 
     */
    public function getDescCategoria()
    {
        return $this->descCategoria;
    }

    /**
     * Set identificacion
     *
     * @param string $identificacion
     * @return RhCategoriasOcupacionales
     */
    public function setIdentificacion($identificacion)
    {
        $this->identificacion = $identificacion;

        return $this;
    }

    /**
     * Get identificacion
     *
     * @return string 
     */
    public function getIdentificacion()
    {
        return $this->identificacion;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return RhCategoriasOcupacionales
     */
    public function setClasificacion($clasificacion)
    {
        $this->clasificacion = $clasificacion;

        return $this;
    }

    /**
     * Get clasificacion
     *
     * @return integer 
     */
    public function getClasificacion()
    {
        return $this->clasificacion;
    }

    /**
     * Set cucpromindex
     *
     * @param integer $cucpromindex
     * @return RhCategoriasOcupacionales
     */
    public function setCucpromindex($cucpromindex)
    {
        $this->cucpromindex = $cucpromindex;

        return $this;
    }

    /**
     * Get cucpromindex
     *
     * @return integer 
     */
    public function getCucpromindex()
    {
        return $this->cucpromindex;
    }

    /**
     * Set limSalarioEstimular
     *
     * @param boolean $limSalarioEstimular
     * @return RhCategoriasOcupacionales
     */
    public function setLimSalarioEstimular($limSalarioEstimular)
    {
        $this->limSalarioEstimular = $limSalarioEstimular;

        return $this;
    }

    /**
     * Get limSalarioEstimular
     *
     * @return boolean 
     */
    public function getLimSalarioEstimular()
    {
        return $this->limSalarioEstimular;
    }
}
