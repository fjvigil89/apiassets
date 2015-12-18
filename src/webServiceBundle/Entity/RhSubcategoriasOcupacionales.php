<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhSubcategoriasOcupacionales
 *
 * @ORM\Table(name="RH_Subcategorias_Ocupacionales")
 * @ORM\Entity
 */
class RhSubcategoriasOcupacionales
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Subcategoria", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idSubcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Subcategoria", type="string", length=50, nullable=false)
     */
    private $descSubcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Identificacion", type="string", length=2, nullable=false)
     */
    private $identificacion;



    /**
     * Set idCategoria
     *
     * @param string $idCategoria
     * @return RhSubcategoriasOcupacionales
     */
    public function setIdCategoria($idCategoria)
    {
        $this->idCategoria = $idCategoria;

        return $this;
    }

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
     * Set idSubcategoria
     *
     * @param string $idSubcategoria
     * @return RhSubcategoriasOcupacionales
     */
    public function setIdSubcategoria($idSubcategoria)
    {
        $this->idSubcategoria = $idSubcategoria;

        return $this;
    }

    /**
     * Get idSubcategoria
     *
     * @return string 
     */
    public function getIdSubcategoria()
    {
        return $this->idSubcategoria;
    }

    /**
     * Set descSubcategoria
     *
     * @param string $descSubcategoria
     * @return RhSubcategoriasOcupacionales
     */
    public function setDescSubcategoria($descSubcategoria)
    {
        $this->descSubcategoria = $descSubcategoria;

        return $this;
    }

    /**
     * Get descSubcategoria
     *
     * @return string 
     */
    public function getDescSubcategoria()
    {
        return $this->descSubcategoria;
    }

    /**
     * Set identificacion
     *
     * @param string $identificacion
     * @return RhSubcategoriasOcupacionales
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
}
