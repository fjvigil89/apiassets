<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Porcionamiento
 *
 * @ORM\Table(name="Porcionamiento", uniqueConstraints={@ORM\UniqueConstraint(name="PK_Porcionamiento", columns={"Ano_Porcionam", "Id_Porcionamiento"})})
 * @ORM\Entity
 */
class Porcionamiento
{
    /**
     * @var string
     *
     * @ORM\Column(name="Ano_Porcionam", type="string", length=4, nullable=true)
     */
    private $anoPorcionam;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Porcionamiento", type="string", length=15, nullable=true)
     */
    private $idPorcionamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Empleado", type="string", length=50, nullable=true)
     */
    private $descEmpleado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Confirmacion", type="datetime", nullable=true)
     */
    private $fechaConfirmacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Nota", type="string", length=200, nullable=true)
     */
    private $nota;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Confirmada", type="boolean", nullable=true)
     */
    private $confirmada;

    /**
     * @var string
     *
     * @ORM\Column(name="Anulada", type="string", length=1, nullable=true)
     */
    private $anulada;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=true)
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Producto", type="string", length=15, nullable=true)
     */
    private $idProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Producto", type="string", length=255, nullable=true)
     */
    private $descProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="Um", type="string", length=5, nullable=true)
     */
    private $um;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=14, scale=4, nullable=true)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Compr", type="string", length=5, nullable=true)
     */
    private $idCompr;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=true)
     */
    private $mes;

    /**
     * @var string
     *
     * @ORM\Column(name="Ano_Compro", type="string", length=4, nullable=true)
     */
    private $anoCompro;



    /**
     * Set anoPorcionam
     *
     * @param string $anoPorcionam
     * @return Porcionamiento
     */
    public function setAnoPorcionam($anoPorcionam)
    {
        $this->anoPorcionam = $anoPorcionam;

        return $this;
    }

    /**
     * Get anoPorcionam
     *
     * @return string 
     */
    public function getAnoPorcionam()
    {
        return $this->anoPorcionam;
    }

    /**
     * Set idPorcionamiento
     *
     * @param string $idPorcionamiento
     * @return Porcionamiento
     */
    public function setIdPorcionamiento($idPorcionamiento)
    {
        $this->idPorcionamiento = $idPorcionamiento;

        return $this;
    }

    /**
     * Get idPorcionamiento
     *
     * @return string 
     */
    public function getIdPorcionamiento()
    {
        return $this->idPorcionamiento;
    }

    /**
     * Get idEmpleado
     *
     * @return string 
     */
    public function getIdEmpleado()
    {
        return $this->idEmpleado;
    }

    /**
     * Set descEmpleado
     *
     * @param string $descEmpleado
     * @return Porcionamiento
     */
    public function setDescEmpleado($descEmpleado)
    {
        $this->descEmpleado = $descEmpleado;

        return $this;
    }

    /**
     * Get descEmpleado
     *
     * @return string 
     */
    public function getDescEmpleado()
    {
        return $this->descEmpleado;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Porcionamiento
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set fechaConfirmacion
     *
     * @param \DateTime $fechaConfirmacion
     * @return Porcionamiento
     */
    public function setFechaConfirmacion($fechaConfirmacion)
    {
        $this->fechaConfirmacion = $fechaConfirmacion;

        return $this;
    }

    /**
     * Get fechaConfirmacion
     *
     * @return \DateTime 
     */
    public function getFechaConfirmacion()
    {
        return $this->fechaConfirmacion;
    }

    /**
     * Set nota
     *
     * @param string $nota
     * @return Porcionamiento
     */
    public function setNota($nota)
    {
        $this->nota = $nota;

        return $this;
    }

    /**
     * Get nota
     *
     * @return string 
     */
    public function getNota()
    {
        return $this->nota;
    }

    /**
     * Set confirmada
     *
     * @param boolean $confirmada
     * @return Porcionamiento
     */
    public function setConfirmada($confirmada)
    {
        $this->confirmada = $confirmada;

        return $this;
    }

    /**
     * Get confirmada
     *
     * @return boolean 
     */
    public function getConfirmada()
    {
        return $this->confirmada;
    }

    /**
     * Set anulada
     *
     * @param string $anulada
     * @return Porcionamiento
     */
    public function setAnulada($anulada)
    {
        $this->anulada = $anulada;

        return $this;
    }

    /**
     * Get anulada
     *
     * @return string 
     */
    public function getAnulada()
    {
        return $this->anulada;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return Porcionamiento
     */
    public function setIdAlmacen($idAlmacen)
    {
        $this->idAlmacen = $idAlmacen;

        return $this;
    }

    /**
     * Get idAlmacen
     *
     * @return string 
     */
    public function getIdAlmacen()
    {
        return $this->idAlmacen;
    }

    /**
     * Set idProducto
     *
     * @param string $idProducto
     * @return Porcionamiento
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
     * Set descProducto
     *
     * @param string $descProducto
     * @return Porcionamiento
     */
    public function setDescProducto($descProducto)
    {
        $this->descProducto = $descProducto;

        return $this;
    }

    /**
     * Get descProducto
     *
     * @return string 
     */
    public function getDescProducto()
    {
        return $this->descProducto;
    }

    /**
     * Set um
     *
     * @param string $um
     * @return Porcionamiento
     */
    public function setUm($um)
    {
        $this->um = $um;

        return $this;
    }

    /**
     * Get um
     *
     * @return string 
     */
    public function getUm()
    {
        return $this->um;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return Porcionamiento
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return string 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set idCompr
     *
     * @param string $idCompr
     * @return Porcionamiento
     */
    public function setIdCompr($idCompr)
    {
        $this->idCompr = $idCompr;

        return $this;
    }

    /**
     * Get idCompr
     *
     * @return string 
     */
    public function getIdCompr()
    {
        return $this->idCompr;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return Porcionamiento
     */
    public function setMes($mes)
    {
        $this->mes = $mes;

        return $this;
    }

    /**
     * Get mes
     *
     * @return integer 
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * Set anoCompro
     *
     * @param string $anoCompro
     * @return Porcionamiento
     */
    public function setAnoCompro($anoCompro)
    {
        $this->anoCompro = $anoCompro;

        return $this;
    }

    /**
     * Get anoCompro
     *
     * @return string 
     */
    public function getAnoCompro()
    {
        return $this->anoCompro;
    }
}
