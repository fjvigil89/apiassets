<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoDatostecnicos
 *
 * @ORM\Table(name="Producto_DatosTecnicos")
 * @ORM\Entity
 */
class ProductoDatostecnicos
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
     * @ORM\Column(name="Desc_Dato", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $descDato;

    /**
     * @var string
     *
     * @ORM\Column(name="Valor_Dato", type="string", length=255, nullable=false)
     */
    private $valorDato;



    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return ProductoDatostecnicos
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
     * Set descDato
     *
     * @param string $descDato
     * @return ProductoDatostecnicos
     */
    public function setDescDato($descDato)
    {
        $this->descDato = $descDato;

        return $this;
    }

    /**
     * Get descDato
     *
     * @return string 
     */
    public function getDescDato()
    {
        return $this->descDato;
    }

    /**
     * Set valorDato
     *
     * @param string $valorDato
     * @return ProductoDatostecnicos
     */
    public function setValorDato($valorDato)
    {
        $this->valorDato = $valorDato;

        return $this;
    }

    /**
     * Get valorDato
     *
     * @return string 
     */
    public function getValorDato()
    {
        return $this->valorDato;
    }
}
