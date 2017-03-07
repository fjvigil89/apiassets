<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EstadisticaVentasProductoAno
 *
 * @ORM\Table(name="Estadistica_Ventas_Producto_Ano")
 * @ORM\Entity
 */
class EstadisticaVentasProductoAno
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_producto", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Ventas_ano_1", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $ventasAno1;

    /**
     * @var string
     *
     * @ORM\Column(name="Ventas_ano_2", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $ventasAno2;

    /**
     * @var string
     *
     * @ORM\Column(name="Ventas_ano_3", type="decimal", precision=18, scale=0, nullable=true)
     */
    private $ventasAno3;



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
     * Set ventasAno1
     *
     * @param string $ventasAno1
     * @return EstadisticaVentasProductoAno
     */
    public function setVentasAno1($ventasAno1)
    {
        $this->ventasAno1 = $ventasAno1;

        return $this;
    }

    /**
     * Get ventasAno1
     *
     * @return string 
     */
    public function getVentasAno1()
    {
        return $this->ventasAno1;
    }

    /**
     * Set ventasAno2
     *
     * @param string $ventasAno2
     * @return EstadisticaVentasProductoAno
     */
    public function setVentasAno2($ventasAno2)
    {
        $this->ventasAno2 = $ventasAno2;

        return $this;
    }

    /**
     * Get ventasAno2
     *
     * @return string 
     */
    public function getVentasAno2()
    {
        return $this->ventasAno2;
    }

    /**
     * Set ventasAno3
     *
     * @param string $ventasAno3
     * @return EstadisticaVentasProductoAno
     */
    public function setVentasAno3($ventasAno3)
    {
        $this->ventasAno3 = $ventasAno3;

        return $this;
    }

    /**
     * Get ventasAno3
     *
     * @return string 
     */
    public function getVentasAno3()
    {
        return $this->ventasAno3;
    }
}
