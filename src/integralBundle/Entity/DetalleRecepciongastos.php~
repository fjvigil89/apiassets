<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleRecepciongastos
 *
 * @ORM\Table(name="Detalle_RecepcionGastos")
 * @ORM\Entity
 */
class DetalleRecepciongastos
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
     * @ORM\Column(name="Tipo_Gasto", type="string", length=2, nullable=false)
     */
    private $tipoGasto;

    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Moneda", type="string", length=2, nullable=false)
     */
    private $tipoMoneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Gasto", type="string", length=50, nullable=false)
     */
    private $descGasto;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteMB", type="integer", nullable=false)
     */
    private $importemb;

    /**
     * @var string
     *
     * @ORM\Column(name="Moneda", type="string", length=5, nullable=false)
     */
    private $moneda;

    /**
     * @var string
     *
     * @ORM\Column(name="Tasa_Cambio", type="decimal", precision=12, scale=6, nullable=false)
     */
    private $tasaCambio;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     */
    private $idProducto;

    /**
     * @var integer
     *
     * @ORM\Column(name="TipoProrrateo", type="smallint", nullable=false)
     */
    private $tipoprorrateo;



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
     * Set tipoGasto
     *
     * @param string $tipoGasto
     * @return DetalleRecepciongastos
     */
    public function setTipoGasto($tipoGasto)
    {
        $this->tipoGasto = $tipoGasto;

        return $this;
    }

    /**
     * Get tipoGasto
     *
     * @return string 
     */
    public function getTipoGasto()
    {
        return $this->tipoGasto;
    }

    /**
     * Set tipoMoneda
     *
     * @param string $tipoMoneda
     * @return DetalleRecepciongastos
     */
    public function setTipoMoneda($tipoMoneda)
    {
        $this->tipoMoneda = $tipoMoneda;

        return $this;
    }

    /**
     * Get tipoMoneda
     *
     * @return string 
     */
    public function getTipoMoneda()
    {
        return $this->tipoMoneda;
    }

    /**
     * Set descGasto
     *
     * @param string $descGasto
     * @return DetalleRecepciongastos
     */
    public function setDescGasto($descGasto)
    {
        $this->descGasto = $descGasto;

        return $this;
    }

    /**
     * Get descGasto
     *
     * @return string 
     */
    public function getDescGasto()
    {
        return $this->descGasto;
    }

    /**
     * Set importemb
     *
     * @param integer $importemb
     * @return DetalleRecepciongastos
     */
    public function setImportemb($importemb)
    {
        $this->importemb = $importemb;

        return $this;
    }

    /**
     * Get importemb
     *
     * @return integer 
     */
    public function getImportemb()
    {
        return $this->importemb;
    }

    /**
     * Set moneda
     *
     * @param string $moneda
     * @return DetalleRecepciongastos
     */
    public function setMoneda($moneda)
    {
        $this->moneda = $moneda;

        return $this;
    }

    /**
     * Get moneda
     *
     * @return string 
     */
    public function getMoneda()
    {
        return $this->moneda;
    }

    /**
     * Set tasaCambio
     *
     * @param string $tasaCambio
     * @return DetalleRecepciongastos
     */
    public function setTasaCambio($tasaCambio)
    {
        $this->tasaCambio = $tasaCambio;

        return $this;
    }

    /**
     * Get tasaCambio
     *
     * @return string 
     */
    public function getTasaCambio()
    {
        return $this->tasaCambio;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return DetalleRecepciongastos
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

        return $this;
    }

    /**
     * Get idProducto
     *
     * @return string 
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set tipoprorrateo
     *
     * @param integer $tipoprorrateo
     * @return DetalleRecepciongastos
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
}
