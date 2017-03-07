<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoCodigobarra
 *
 * @ORM\Table(name="Producto_CodigoBarra", indexes={@ORM\Index(name="IX_Producto_CodigoBarra", columns={"Codigo_Barra"})})
 * @ORM\Entity
 */
class ProductoCodigobarra
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Codigo_Barra", type="string", length=13, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $codigoBarra;

    /**
     * @var string
     *
     * @ORM\Column(name="Descripcion_Corta", type="string", length=60, nullable=false)
     */
    private $descripcionCorta;

    /**
     * @var integer
     *
     * @ORM\Column(name="GenCodBarra", type="integer", nullable=false)
     */
    private $gencodbarra;



    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return ProductoCodigobarra
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
     * Set codigoBarra
     *
     * @param string $codigoBarra
     * @return ProductoCodigobarra
     */
    public function setCodigoBarra($codigoBarra)
    {
        $this->codigoBarra = $codigoBarra;

        return $this;
    }

    /**
     * Get codigoBarra
     *
     * @return string 
     */
    public function getCodigoBarra()
    {
        return $this->codigoBarra;
    }

    /**
     * Set descripcionCorta
     *
     * @param string $descripcionCorta
     * @return ProductoCodigobarra
     */
    public function setDescripcionCorta($descripcionCorta)
    {
        $this->descripcionCorta = $descripcionCorta;

        return $this;
    }

    /**
     * Get descripcionCorta
     *
     * @return string 
     */
    public function getDescripcionCorta()
    {
        return $this->descripcionCorta;
    }

    /**
     * Set gencodbarra
     *
     * @param integer $gencodbarra
     * @return ProductoCodigobarra
     */
    public function setGencodbarra($gencodbarra)
    {
        $this->gencodbarra = $gencodbarra;

        return $this;
    }

    /**
     * Get gencodbarra
     *
     * @return integer 
     */
    public function getGencodbarra()
    {
        return $this->gencodbarra;
    }
}
