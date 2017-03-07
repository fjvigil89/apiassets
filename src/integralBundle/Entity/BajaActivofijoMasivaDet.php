<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BajaActivofijoMasivaDet
 *
 * @ORM\Table(name="Baja_ActivoFijo_Masiva_Det", indexes={@ORM\Index(name="IX_Baja_ActivoFijo_Masiva_Det", columns={"Contador"})})
 * @ORM\Entity
 */
class BajaActivofijoMasivaDet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ActivoFijo", type="string", length=15, nullable=false)
     */
    private $idActivofijo;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Rotulo", type="string", length=15, nullable=false)
     */
    private $idRotulo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_ActivoFijo", type="string", length=255, nullable=false)
     */
    private $descActivofijo;

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
     * @ORM\Column(name="Valor_Residual", type="integer", nullable=false)
     */
    private $valorResidual;

    /**
     * @var integer
     *
     * @ORM\Column(name="Valor_ResidualMC", type="integer", nullable=false)
     */
    private $valorResidualmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_Acumulada", type="integer", nullable=false)
     */
    private $depreciacionAcumulada;

    /**
     * @var integer
     *
     * @ORM\Column(name="Depreciacion_AcumuladaMC", type="integer", nullable=false)
     */
    private $depreciacionAcumuladamc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Ccosto", type="string", length=10, nullable=false)
     */
    private $idCcosto;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_AreaResp", type="string", length=10, nullable=false)
     */
    private $idArearesp;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Empleado", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmpleado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Baja", type="integer", nullable=false)
     */
    private $idBaja;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Baja", type="integer", nullable=false)
     */
    private $anoBaja;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=5, nullable=false)
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Subclasificacion", type="string", length=5, nullable=false)
     */
    private $idSubclasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Especificacion", type="string", length=15, nullable=false)
     */
    private $idEspecificacion;



    /**
     * Set contador
     *
     * @param integer $contador
     * @return BajaActivofijoMasivaDet
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
     * Set idActivofijo
     *
     * @param string $idActivofijo
     * @return BajaActivofijoMasivaDet
     */
    public function setIdActivofijo($idActivofijo)
    {
        $this->idActivofijo = $idActivofijo;

        return $this;
    }

    /**
     * Get idActivofijo
     *
     * @return string 
     */
    public function getIdActivofijo()
    {
        return $this->idActivofijo;
    }

    /**
     * Set idRotulo
     *
     * @param string $idRotulo
     * @return BajaActivofijoMasivaDet
     */
    public function setIdRotulo($idRotulo)
    {
        $this->idRotulo = $idRotulo;

        return $this;
    }

    /**
     * Get idRotulo
     *
     * @return string 
     */
    public function getIdRotulo()
    {
        return $this->idRotulo;
    }

    /**
     * Set descActivofijo
     *
     * @param string $descActivofijo
     * @return BajaActivofijoMasivaDet
     */
    public function setDescActivofijo($descActivofijo)
    {
        $this->descActivofijo = $descActivofijo;

        return $this;
    }

    /**
     * Get descActivofijo
     *
     * @return string 
     */
    public function getDescActivofijo()
    {
        return $this->descActivofijo;
    }

    /**
     * Set valorInicial
     *
     * @param integer $valorInicial
     * @return BajaActivofijoMasivaDet
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
     * @return BajaActivofijoMasivaDet
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
     * Set valorResidual
     *
     * @param integer $valorResidual
     * @return BajaActivofijoMasivaDet
     */
    public function setValorResidual($valorResidual)
    {
        $this->valorResidual = $valorResidual;

        return $this;
    }

    /**
     * Get valorResidual
     *
     * @return integer 
     */
    public function getValorResidual()
    {
        return $this->valorResidual;
    }

    /**
     * Set valorResidualmc
     *
     * @param integer $valorResidualmc
     * @return BajaActivofijoMasivaDet
     */
    public function setValorResidualmc($valorResidualmc)
    {
        $this->valorResidualmc = $valorResidualmc;

        return $this;
    }

    /**
     * Get valorResidualmc
     *
     * @return integer 
     */
    public function getValorResidualmc()
    {
        return $this->valorResidualmc;
    }

    /**
     * Set depreciacionAcumulada
     *
     * @param integer $depreciacionAcumulada
     * @return BajaActivofijoMasivaDet
     */
    public function setDepreciacionAcumulada($depreciacionAcumulada)
    {
        $this->depreciacionAcumulada = $depreciacionAcumulada;

        return $this;
    }

    /**
     * Get depreciacionAcumulada
     *
     * @return integer 
     */
    public function getDepreciacionAcumulada()
    {
        return $this->depreciacionAcumulada;
    }

    /**
     * Set depreciacionAcumuladamc
     *
     * @param integer $depreciacionAcumuladamc
     * @return BajaActivofijoMasivaDet
     */
    public function setDepreciacionAcumuladamc($depreciacionAcumuladamc)
    {
        $this->depreciacionAcumuladamc = $depreciacionAcumuladamc;

        return $this;
    }

    /**
     * Get depreciacionAcumuladamc
     *
     * @return integer 
     */
    public function getDepreciacionAcumuladamc()
    {
        return $this->depreciacionAcumuladamc;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return BajaActivofijoMasivaDet
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
     * Set idArearesp
     *
     * @param string $idArearesp
     * @return BajaActivofijoMasivaDet
     */
    public function setIdArearesp($idArearesp)
    {
        $this->idArearesp = $idArearesp;

        return $this;
    }

    /**
     * Get idArearesp
     *
     * @return string 
     */
    public function getIdArearesp()
    {
        return $this->idArearesp;
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
     * Set idBaja
     *
     * @param integer $idBaja
     * @return BajaActivofijoMasivaDet
     */
    public function setIdBaja($idBaja)
    {
        $this->idBaja = $idBaja;

        return $this;
    }

    /**
     * Get idBaja
     *
     * @return integer 
     */
    public function getIdBaja()
    {
        return $this->idBaja;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return BajaActivofijoMasivaDet
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
     * Set anoBaja
     *
     * @param integer $anoBaja
     * @return BajaActivofijoMasivaDet
     */
    public function setAnoBaja($anoBaja)
    {
        $this->anoBaja = $anoBaja;

        return $this;
    }

    /**
     * Get anoBaja
     *
     * @return integer 
     */
    public function getAnoBaja()
    {
        return $this->anoBaja;
    }

    /**
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return BajaActivofijoMasivaDet
     */
    public function setIdClasificacion($idClasificacion)
    {
        $this->idClasificacion = $idClasificacion;

        return $this;
    }

    /**
     * Get idClasificacion
     *
     * @return string 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Set idSubclasificacion
     *
     * @param string $idSubclasificacion
     * @return BajaActivofijoMasivaDet
     */
    public function setIdSubclasificacion($idSubclasificacion)
    {
        $this->idSubclasificacion = $idSubclasificacion;

        return $this;
    }

    /**
     * Get idSubclasificacion
     *
     * @return string 
     */
    public function getIdSubclasificacion()
    {
        return $this->idSubclasificacion;
    }

    /**
     * Set idEspecificacion
     *
     * @param string $idEspecificacion
     * @return BajaActivofijoMasivaDet
     */
    public function setIdEspecificacion($idEspecificacion)
    {
        $this->idEspecificacion = $idEspecificacion;

        return $this;
    }

    /**
     * Get idEspecificacion
     *
     * @return string 
     */
    public function getIdEspecificacion()
    {
        return $this->idEspecificacion;
    }
}
