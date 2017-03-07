<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductoDestinoscat
 *
 * @ORM\Table(name="Producto_DestinosCat")
 * @ORM\Entity
 */
class ProductoDestinoscat
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodDestino", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $coddestino;

    /**
     * @var string
     *
     * @ORM\Column(name="DescDestino", type="string", length=50, nullable=false)
     */
    private $descdestino;



    /**
     * Get coddestino
     *
     * @return string 
     */
    public function getCoddestino()
    {
        return $this->coddestino;
    }

    /**
     * Set descdestino
     *
     * @param string $descdestino
     * @return ProductoDestinoscat
     */
    public function setDescdestino($descdestino)
    {
        $this->descdestino = $descdestino;

        return $this;
    }

    /**
     * Get descdestino
     *
     * @return string 
     */
    public function getDescdestino()
    {
        return $this->descdestino;
    }
}
