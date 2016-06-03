<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilToolSalidasDetalles
 *
 * @ORM\Table(name="Util_Tool_Salidas_Detalles", indexes={@ORM\Index(name="IX_Util_Tool_Salidas_Detalles", columns={"Contador"})})
 * @ORM\Entity
 */
class UtilToolSalidasDetalles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Salida", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $anoSalida;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Salida", type="integer", nullable=false)
     */
    private $idSalida;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Ccosto", type="string", length=50, nullable=false)
     */
    private $descCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AreaResponsabilidad", type="string", length=10, nullable=false)
     */
    private $idArearesponsabilidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_AreaResponsabilidad", type="string", length=50, nullable=false)
     */
    private $descArearesponsabilidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=false)
     */
    private $idEmpleado;

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
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_Inicial", type="integer", nullable=false)
     */
    private $valorInicial;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_InicialMC", type="integer", nullable=false)
     */
    private $valorInicialmc;



    /**
     * Get anoSalida
     *
     * @return integer 
     */
    public function getAnoSalida()
    {
        return $this->anoSalida;
    }

    /**
     * Set idSalida
     *
     * @param integer $idSalida
     * @return UtilToolSalidasDetalles
     */
    public function setIdSalida($idSalida)
    {
        $this->idSalida = $idSalida;

        return $this;
    }

    /**
     * Get idSalida
     *
     * @return integer 
     */
    public function getIdSalida()
    {
        return $this->idSalida;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return UtilToolSalidasDetalles
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
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return UtilToolSalidasDetalles
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
     * Set descCcosto
     *
     * @param string $descCcosto
     * @return UtilToolSalidasDetalles
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
     * Set idArearesponsabilidad
     *
     * @param string $idArearesponsabilidad
     * @return UtilToolSalidasDetalles
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
     * Set descArearesponsabilidad
     *
     * @param string $descArearesponsabilidad
     * @return UtilToolSalidasDetalles
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
     * Set idEmpleado
     *
     * @param string $idEmpleado
     * @return UtilToolSalidasDetalles
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
     * Set descEmpleado
     *
     * @param string $descEmpleado
     * @return UtilToolSalidasDetalles
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
     * @return UtilToolSalidasDetalles
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
     * Set contador
     *
     * @param integer $contador
     * @return UtilToolSalidasDetalles
     */
    public function setContador($contador)
    {
        $this->contador = $contador;

        return $this;
    }

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
     * Set valorInicial
     *
     * @param integer $valorInicial
     * @return UtilToolSalidasDetalles
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
     * @return UtilToolSalidasDetalles
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
