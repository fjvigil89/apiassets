<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AlmacenPuntoinventario
 *
 * @ORM\Table(name="Almacen_PuntoInventario")
 * @ORM\Entity
 */
class AlmacenPuntoinventario
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmacenPadre", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAlmacenpadre;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AlmacenPuntoInvertario", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idAlmacenpuntoinvertario;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Categoria", type="string", length=5, nullable=false)
     */
    private $idCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Categoria", type="string", length=45, nullable=false)
     */
    private $descCategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Almacen", type="string", length=50, nullable=false)
     */
    private $descAlmacen;



    /**
     * Set idAlmacenpadre
     *
     * @param string $idAlmacenpadre
     * @return AlmacenPuntoinventario
     */
    public function setIdAlmacenpadre($idAlmacenpadre)
    {
        $this->idAlmacenpadre = $idAlmacenpadre;

        return $this;
    }

    /**
     * Get idAlmacenpadre
     *
     * @return string 
     */
    public function getIdAlmacenpadre()
    {
        return $this->idAlmacenpadre;
    }

    /**
     * Set idAlmacenpuntoinvertario
     *
     * @param string $idAlmacenpuntoinvertario
     * @return AlmacenPuntoinventario
     */
    public function setIdAlmacenpuntoinvertario($idAlmacenpuntoinvertario)
    {
        $this->idAlmacenpuntoinvertario = $idAlmacenpuntoinvertario;

        return $this;
    }

    /**
     * Get idAlmacenpuntoinvertario
     *
     * @return string 
     */
    public function getIdAlmacenpuntoinvertario()
    {
        return $this->idAlmacenpuntoinvertario;
    }

    /**
     * Set idCategoria
     *
     * @param string $idCategoria
     * @return AlmacenPuntoinventario
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
     * Set descCategoria
     *
     * @param string $descCategoria
     * @return AlmacenPuntoinventario
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
     * Set descAlmacen
     *
     * @param string $descAlmacen
     * @return AlmacenPuntoinventario
     */
    public function setDescAlmacen($descAlmacen)
    {
        $this->descAlmacen = $descAlmacen;

        return $this;
    }

    /**
     * Get descAlmacen
     *
     * @return string 
     */
    public function getDescAlmacen()
    {
        return $this->descAlmacen;
    }
}
