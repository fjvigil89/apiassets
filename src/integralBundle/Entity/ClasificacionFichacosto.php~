<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ClasificacionFichacosto
 *
 * @ORM\Table(name="Clasificacion_FichaCosto")
 * @ORM\Entity
 */
class ClasificacionFichacosto
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasificacion", type="string", length=50, nullable=false)
     */
    private $descClasificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoProrrateo", type="smallint", nullable=false)
     */
    private $tipoprorrateo;

    /**
     * @var string
     *
     * @ORM\Column(name="Titulo", type="string", length=50, nullable=false)
     */
    private $titulo;



    /**
     * Get idClasificacion
     *
     * @return string 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Set descClasificacion
     *
     * @param string $descClasificacion
     * @return ClasificacionFichacosto
     */
    public function setDescClasificacion($descClasificacion)
    {
        $this->descClasificacion = $descClasificacion;

        return $this;
    }

    /**
     * Get descClasificacion
     *
     * @return string 
     */
    public function getDescClasificacion()
    {
        return $this->descClasificacion;
    }

    /**
     * Set tipoprorrateo
     *
     * @param integer $tipoprorrateo
     * @return ClasificacionFichacosto
     */
    public function setTipoprorrateo($tipoprorrateo)
    {
        $this->tipoprorrateo = $tipoprorrateo;

        return $this;
    }

    /**
     * Get tipoprorrateo
     *
     * @return integer 
     */
    public function getTipoprorrateo()
    {
        return $this->tipoprorrateo;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return ClasificacionFichacosto
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }
}
