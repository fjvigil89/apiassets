<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilToolDetalles
 *
 * @ORM\Table(name="Util_Tool_Detalles")
 * @ORM\Entity
 */
class UtilToolDetalles
{
    /**
     * @var string
     *
     * @ORM\Column(name="Id_UH", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AreaResponsabilidad", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idArearesponsabilidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Ccosto", type="string", length=50, nullable=false)
     */
    private $descCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_AreaResponsabilidad", type="string", length=50, nullable=false)
     */
    private $descArearesponsabilidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Empleado", type="string", length=61, nullable=false)
     */
    private $descEmpleado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cantidad_Conteo", type="integer", nullable=false)
     */
    private $cantidadConteo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="Marca", type="boolean", nullable=false)
     */
    private $marca;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Inicial", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $valorInicial;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_InicialMC", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $valorInicialmc;



    /**
     * Set idUh
     *
     * @param string $idUh
     * @return UtilToolDetalles
     */
    public function setIdUh($idUh)
    {
        $this->idUh = $idUh;

        return $this;
    }

    /**
     * Get idUh
     *
     * @return string 
     */
    public function getIdUh()
    {
        return $this->idUh;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return UtilToolDetalles
     */
    public function setIdCcosto($idCcosto)
    {
        $this->idCcosto = $idCcosto;

        return $this;
    }

    /**
     * Get idCcosto
     *
     * @return string 
     */
    public function getIdCcosto()
    {
        return $this->idCcosto;
    }

    /**
     * Set idArearesponsabilidad
     *
     * @param string $idArearesponsabilidad
     * @return UtilToolDetalles
     */
    public function setIdArearesponsabilidad($idArearesponsabilidad)
    {
        $this->idArearesponsabilidad = $idArearesponsabilidad;

        return $this;
    }

    /**
     * Get idArearesponsabilidad
     *
     * @return string 
     */
    public function getIdArearesponsabilidad()
    {
        return $this->idArearesponsabilidad;
    }

    /**
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return UtilToolDetalles
     */
    public function setIdEmpleado($idEmpleado)
    {
        $this->idEmpleado = $idEmpleado;

        return $this;
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
     * Set descCcosto
     *
     * @param string $descCcosto
     * @return UtilToolDetalles
     */
    public function setDescCcosto($descCcosto)
    {
        $this->descCcosto = $descCcosto;

        return $this;
    }

    /**
     * Get descCcosto
     *
     * @return string 
     */
    public function getDescCcosto()
    {
        return $this->descCcosto;
    }

    /**
     * Set descArearesponsabilidad
     *
     * @param string $descArearesponsabilidad
     * @return UtilToolDetalles
     */
    public function setDescArearesponsabilidad($descArearesponsabilidad)
    {
        $this->descArearesponsabilidad = $descArearesponsabilidad;

        return $this;
    }

    /**
     * Get descArearesponsabilidad
     *
     * @return string 
     */
    public function getDescArearesponsabilidad()
    {
        return $this->descArearesponsabilidad;
    }

    /**
     * Set descEmpleado
     *
     * @param string $descEmpleado
     * @return UtilToolDetalles
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
     * Set cantidad
     *
     * @param integer $cantidad
     * @return UtilToolDetalles
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer 
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set cantidadConteo
     *
     * @param integer $cantidadConteo
     * @return UtilToolDetalles
     */
    public function setCantidadConteo($cantidadConteo)
    {
        $this->cantidadConteo = $cantidadConteo;

        return $this;
    }

    /**
     * Get cantidadConteo
     *
     * @return integer 
     */
    public function getCantidadConteo()
    {
        return $this->cantidadConteo;
    }

    /**
     * Set marca
     *
     * @param boolean $marca
     * @return UtilToolDetalles
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return boolean 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set valorInicial
     *
     * @param integer $valorInicial
     * @return UtilToolDetalles
     */
    public function setValorInicial($valorInicial)
    {
        $this->valorInicial = $valorInicial;

        return $this;
    }

    /**
     * Get valorInicial
     *
     * @return integer 
     */
    public function getValorInicial()
    {
        return $this->valorInicial;
    }

    /**
     * Set valorInicialmc
     *
     * @param integer $valorInicialmc
     * @return UtilToolDetalles
     */
    public function setValorInicialmc($valorInicialmc)
    {
        $this->valorInicialmc = $valorInicialmc;

        return $this;
    }

    /**
     * Get valorInicialmc
     *
     * @return integer 
     */
    public function getValorInicialmc()
    {
        return $this->valorInicialmc;
    }
}
