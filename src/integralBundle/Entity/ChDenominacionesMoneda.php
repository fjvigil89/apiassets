<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChDenominacionesMoneda
 *
 * @ORM\Table(name="CH_Denominaciones_Moneda", uniqueConstraints={@ORM\UniqueConstraint(name="IX_CH_Cat_Denomin_Money", columns={"Id_Presentacion"})})
 * @ORM\Entity
 */
class ChDenominacionesMoneda
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Moneda", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $tipoMoneda;

    /**
     * @var integer
     *
     * @ORM\Column(name="Orden_Presentacion", type="smallint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $ordenPresentacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion", type="smallint", nullable=false)
     */
    private $clasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Presentacion", type="string", length=10, nullable=false)
     */
    private $idPresentacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Forma_Presentacion", type="string", length=40, nullable=false)
     */
    private $formaPresentacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad_Unidades", type="integer", nullable=false)
     */
    private $cantidadUnidades;

    /**
     * @var integer
     *
     * @ORM\Column(name="Factor_Presentacion", type="integer", nullable=false)
     */
    private $factorPresentacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Decimales", type="smallint", nullable=false)
     */
    private $decimales;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Mostrar", type="boolean", nullable=false)
     */
    private $mostrar;



    /**
     * Set tipoMoneda
     *
     * @param integer $tipoMoneda
     * @return ChDenominacionesMoneda
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

    /**
     * Set ordenPresentacion
     *
     * @param integer $ordenPresentacion
     * @return ChDenominacionesMoneda
     */
    public function setOrdenPresentacion($ordenPresentacion)
    {
        $this->ordenPresentacion = $ordenPresentacion;

        return $this;
    }

    /**
     * Get ordenPresentacion
     *
     * @return integer 
     */
    public function getOrdenPresentacion()
    {
        return $this->ordenPresentacion;
    }

    /**
     * Set clasificacion
     *
     * @param integer $clasificacion
     * @return ChDenominacionesMoneda
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
     * Set idPresentacion
     *
     * @param string $idPresentacion
     * @return ChDenominacionesMoneda
     */
    public function setIdPresentacion($idPresentacion)
    {
        $this->idPresentacion = $idPresentacion;

        return $this;
    }

    /**
     * Get idPresentacion
     *
     * @return string 
     */
    public function getIdPresentacion()
    {
        return $this->idPresentacion;
    }

    /**
     * Set formaPresentacion
     *
     * @param string $formaPresentacion
     * @return ChDenominacionesMoneda
     */
    public function setFormaPresentacion($formaPresentacion)
    {
        $this->formaPresentacion = $formaPresentacion;

        return $this;
    }

    /**
     * Get formaPresentacion
     *
     * @return string 
     */
    public function getFormaPresentacion()
    {
        return $this->formaPresentacion;
    }

    /**
     * Set cantidadUnidades
     *
     * @param integer $cantidadUnidades
     * @return ChDenominacionesMoneda
     */
    public function setCantidadUnidades($cantidadUnidades)
    {
        $this->cantidadUnidades = $cantidadUnidades;

        return $this;
    }

    /**
     * Get cantidadUnidades
     *
     * @return integer 
     */
    public function getCantidadUnidades()
    {
        return $this->cantidadUnidades;
    }

    /**
     * Set factorPresentacion
     *
     * @param integer $factorPresentacion
     * @return ChDenominacionesMoneda
     */
    public function setFactorPresentacion($factorPresentacion)
    {
        $this->factorPresentacion = $factorPresentacion;

        return $this;
    }

    /**
     * Get factorPresentacion
     *
     * @return integer 
     */
    public function getFactorPresentacion()
    {
        return $this->factorPresentacion;
    }

    /**
     * Set decimales
     *
     * @param integer $decimales
     * @return ChDenominacionesMoneda
     */
    public function setDecimales($decimales)
    {
        $this->decimales = $decimales;

        return $this;
    }

    /**
     * Get decimales
     *
     * @return integer 
     */
    public function getDecimales()
    {
        return $this->decimales;
    }

    /**
     * Set mostrar
     *
     * @param boolean $mostrar
     * @return ChDenominacionesMoneda
     */
    public function setMostrar($mostrar)
    {
        $this->mostrar = $mostrar;

        return $this;
    }

    /**
     * Get mostrar
     *
     * @return boolean 
     */
    public function getMostrar()
    {
        return $this->mostrar;
    }
}
