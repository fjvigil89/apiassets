<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleOtrabajoindicador
 *
 * @ORM\Table(name="Detalle_OtrabajoIndicador")
 * @ORM\Entity
 */
class DetalleOtrabajoindicador
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
     * @ORM\Column(name="Indicador", type="string", length=100, nullable=false)
     */
    private $indicador;

    /**
     * @var string
     *
     * @ORM\Column(name="Valor", type="string", length=40, nullable=false)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=10, nullable=false)
     */
    private $idClasificacion;



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
     * Set indicador
     *
     * @param string $indicador
     * @return DetalleOtrabajoindicador
     */
    public function setIndicador($indicador)
    {
        $this->indicador = $indicador;

        return $this;
    }

    /**
     * Get indicador
     *
     * @return string 
     */
    public function getIndicador()
    {
        return $this->indicador;
    }

    /**
     * Set valor
     *
     * @param string $valor
     * @return DetalleOtrabajoindicador
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return DetalleOtrabajoindicador
     */
    public function setIdClasificacion($idClasificacion)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }

    /**
     * Get idClasificacion
     *
     * @return string 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }
}
