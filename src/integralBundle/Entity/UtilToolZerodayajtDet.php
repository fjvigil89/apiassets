<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UtilToolZerodayajtDet
 *
 * @ORM\Table(name="Util_Tool_ZeroDayAjt_Det")
 * @ORM\Entity
 */
class UtilToolZerodayajtDet
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
     * @ORM\Column(name="Id_UH", type="string", length=20, nullable=false)
     */
    private $idUh;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_AreaResponsabilidad", type="string", length=10, nullable=false)
     */
    private $idArearesponsabilidad;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=false)
     */
    private $idEmpleado;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_UH", type="string", length=255, nullable=false)
     */
    private $descUh;

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
     * @var integer
     *
     * @ORM\Column(name="Valor_InicialCUP", type="integer", nullable=false)
     */
    private $valorInicialcup;



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
     * Set idUh
     *
     * @param string $idUh
     * @return UtilToolZerodayajtDet
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
     * @return UtilToolZerodayajtDet
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
     * @return UtilToolZerodayajtDet
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
     * @return UtilToolZerodayajtDet
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
     * Set descUh
     *
     * @param string $descUh
     * @return UtilToolZerodayajtDet
     */
    public function setDescUh($descUh)
    {
        $this->descUh = $descUh;

        return $this;
    }

    /**
     * Get descUh
     *
     * @return string 
     */
    public function getDescUh()
    {
        return $this->descUh;
    }

    /**
     * Set descCcosto
     *
     * @param string $descCcosto
     * @return UtilToolZerodayajtDet
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
     * @return UtilToolZerodayajtDet
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
     * @return UtilToolZerodayajtDet
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
     * Set valorInicial
     *
     * @param integer $valorInicial
     * @return UtilToolZerodayajtDet
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
     * @return UtilToolZerodayajtDet
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

    /**
     * Set valorInicialcup
     *
     * @param integer $valorInicialcup
     * @return UtilToolZerodayajtDet
     */
    public function setValorInicialcup($valorInicialcup)
    {
        $this->valorInicialcup = $valorInicialcup;

        return $this;
    }

    /**
     * Get valorInicialcup
     *
     * @return integer 
     */
    public function getValorInicialcup()
    {
        return $this->valorInicialcup;
    }
}
