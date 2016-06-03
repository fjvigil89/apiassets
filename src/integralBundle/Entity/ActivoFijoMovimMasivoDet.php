<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActivoFijoMovimMasivoDet
 *
 * @ORM\Table(name="Activo_Fijo_Movim_Masivo_Det")
 * @ORM\Entity
 */
class ActivoFijoMovimMasivoDet
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
     * @var string
     *
     * @ORM\Column(name="Id_CcostoOld", type="string", length=10, nullable=false)
     */
    private $idCcostoold;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_AreaRespOld", type="string", length=10, nullable=false)
     */
    private $idArearespold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_EmpleadoOld", type="string", length=15, nullable=false)
     */
    private $idEmpleadoold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClasificacionOld", type="string", length=5, nullable=false)
     */
    private $idClasificacionold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubclasificacionOld", type="string", length=5, nullable=false)
     */
    private $idSubclasificacionold;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Mov", type="integer", nullable=false)
     */
    private $idMov;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Almacen", type="string", length=5, nullable=false)
     */
    private $idAlmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Mov", type="integer", nullable=false)
     */
    private $anoMov;

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
     * @ORM\Column(name="Id_CcostoNew", type="string", length=10, nullable=false)
     */
    private $idCcostonew;

    /**
     * @var string
     *
     * @ORM\Column(name="ID_AreaRespNew", type="string", length=10, nullable=false)
     */
    private $idArearespnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_EmpleadoNew", type="string", length=15, nullable=false)
     */
    private $idEmpleadonew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_ClasificacionNew", type="string", length=5, nullable=false)
     */
    private $idClasificacionnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_SubclasificacionNew", type="string", length=5, nullable=false)
     */
    private $idSubclasificacionnew;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_EspecificacionOld", type="string", length=15, nullable=false)
     */
    private $idEspecificacionold;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_EspecificacionNew", type="string", length=15, nullable=false)
     */
    private $idEspecificacionnew;

    /**
     * @var string
     *
     * @ORM\Column(name="CNMBOld", type="string", length=50, nullable=false)
     */
    private $cnmbold;

    /**
     * @var string
     *
     * @ORM\Column(name="CNMBNew", type="string", length=50, nullable=false)
     */
    private $cnmbnew;



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
     * @return ActivoFijoMovimMasivoDet
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
     * @return ActivoFijoMovimMasivoDet
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
     * @return ActivoFijoMovimMasivoDet
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
     * Set idCcostoold
     *
     * @param string $idCcostoold
     * @return ActivoFijoMovimMasivoDet
     */
    public function setIdCcostoold($idCcostoold)
    {
        $this->idCcostoold = $idCcostoold;

        return $this;
    }

    /**
     * Get idCcostoold
     *
     * @return string 
     */
    public function getIdCcostoold()
    {
        return $this->idCcostoold;
    }

    /**
     * Set idArearespold
     *
     * @param string $idArearespold
     * @return ActivoFijoMovimMasivoDet
     */
    public function setIdArearespold($idArearespold)
    {
        $this->idArearespold = $idArearespold;

        return $this;
    }

    /**
     * Get idArearespold
     *
     * @return string 
     */
    public function getIdArearespold()
    {
        return $this->idArearespold;
    }

    /**
     * Set idEmpleadoold
     *
     * @param string $idEmpleadoold
     * @return ActivoFijoMovimMasivoDet
     */
    public function setIdEmpleadoold($idEmpleadoold)
    {
        $this->idEmpleadoold = $idEmpleadoold;

        return $this;
    }

    /**
     * Get idEmpleadoold
     *
     * @return string 
     */
    public function getIdEmpleadoold()
    {
        return $this->idEmpleadoold;
    }

    /**
     * Set idClasificacionold
     *
     * @param string $idClasificacionold
     * @return ActivoFijoMovimMasivoDet
     */
    public function setIdClasificacionold($idClasificacionold)
    {
        $this->idClasificacionold = $idClasificacionold;

        return $this;
    }

    /**
     * Get idClasificacionold
     *
     * @return string 
     */
    public function getIdClasificacionold()
    {
        return $this->idClasificacionold;
    }

    /**
     * Set idSubclasificacionold
     *
     * @param string $idSubclasificacionold
     * @return ActivoFijoMovimMasivoDet
     */
    public function setIdSubclasificacionold($idSubclasificacionold)
    {
        $this->idSubclasificacionold = $idSubclasificacionold;

        return $this;
    }

    /**
     * Get idSubclasificacionold
     *
     * @return string 
     */
    public function getIdSubclasificacionold()
    {
        return $this->idSubclasificacionold;
    }

    /**
     * Set idMov
     *
     * @param integer $idMov
     * @return ActivoFijoMovimMasivoDet
     */
    public function setIdMov($idMov)
    {
        $this->idMov = $idMov;

        return $this;
    }

    /**
     * Get idMov
     *
     * @return integer 
     */
    public function getIdMov()
    {
        return $this->idMov;
    }

    /**
     * Set idAlmacen
     *
     * @param string $idAlmacen
     * @return ActivoFijoMovimMasivoDet
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
     * Set anoMov
     *
     * @param integer $anoMov
     * @return ActivoFijoMovimMasivoDet
     */
    public function setAnoMov($anoMov)
    {
        $this->anoMov = $anoMov;

        return $this;
    }

    /**
     * Get anoMov
     *
     * @return integer 
     */
    public function getAnoMov()
    {
        return $this->anoMov;
    }

    /**
     * Set valorInicial
     *
     * @param integer $valorInicial
     * @return ActivoFijoMovimMasivoDet
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
     * @return ActivoFijoMovimMasivoDet
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
     * @return ActivoFijoMovimMasivoDet
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
     * @return ActivoFijoMovimMasivoDet
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
     * @return ActivoFijoMovimMasivoDet
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
     * @return ActivoFijoMovimMasivoDet
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
     * Set idCcostonew
     *
     * @param string $idCcostonew
     * @return ActivoFijoMovimMasivoDet
     */
    public function setIdCcostonew($idCcostonew)
    {
        $this->idCcostonew = $idCcostonew;

        return $this;
    }

    /**
     * Get idCcostonew
     *
     * @return string 
     */
    public function getIdCcostonew()
    {
        return $this->idCcostonew;
    }

    /**
     * Set idArearespnew
     *
     * @param string $idArearespnew
     * @return ActivoFijoMovimMasivoDet
     */
    public function setIdArearespnew($idArearespnew)
    {
        $this->idArearespnew = $idArearespnew;

        return $this;
    }

    /**
     * Get idArearespnew
     *
     * @return string 
     */
    public function getIdArearespnew()
    {
        return $this->idArearespnew;
    }

    /**
     * Set idEmpleadonew
     *
     * @param string $idEmpleadonew
     * @return ActivoFijoMovimMasivoDet
     */
    public function setIdEmpleadonew($idEmpleadonew)
    {
        $this->idEmpleadonew = $idEmpleadonew;

        return $this;
    }

    /**
     * Get idEmpleadonew
     *
     * @return string 
     */
    public function getIdEmpleadonew()
    {
        return $this->idEmpleadonew;
    }

    /**
     * Set idClasificacionnew
     *
     * @param string $idClasificacionnew
     * @return ActivoFijoMovimMasivoDet
     */
    public function setIdClasificacionnew($idClasificacionnew)
    {
        $this->idClasificacionnew = $idClasificacionnew;

        return $this;
    }

    /**
     * Get idClasificacionnew
     *
     * @return string 
     */
    public function getIdClasificacionnew()
    {
        return $this->idClasificacionnew;
    }

    /**
     * Set idSubclasificacionnew
     *
     * @param string $idSubclasificacionnew
     * @return ActivoFijoMovimMasivoDet
     */
    public function setIdSubclasificacionnew($idSubclasificacionnew)
    {
        $this->idSubclasificacionnew = $idSubclasificacionnew;

        return $this;
    }

    /**
     * Get idSubclasificacionnew
     *
     * @return string 
     */
    public function getIdSubclasificacionnew()
    {
        return $this->idSubclasificacionnew;
    }

    /**
     * Set idEspecificacionold
     *
     * @param string $idEspecificacionold
     * @return ActivoFijoMovimMasivoDet
     */
    public function setIdEspecificacionold($idEspecificacionold)
    {
        $this->idEspecificacionold = $idEspecificacionold;

        return $this;
    }

    /**
     * Get idEspecificacionold
     *
     * @return string 
     */
    public function getIdEspecificacionold()
    {
        return $this->idEspecificacionold;
    }

    /**
     * Set idEspecificacionnew
     *
     * @param string $idEspecificacionnew
     * @return ActivoFijoMovimMasivoDet
     */
    public function setIdEspecificacionnew($idEspecificacionnew)
    {
        $this->idEspecificacionnew = $idEspecificacionnew;

        return $this;
    }

    /**
     * Get idEspecificacionnew
     *
     * @return string 
     */
    public function getIdEspecificacionnew()
    {
        return $this->idEspecificacionnew;
    }

    /**
     * Set cnmbold
     *
     * @param string $cnmbold
     * @return ActivoFijoMovimMasivoDet
     */
    public function setCnmbold($cnmbold)
    {
        $this->cnmbold = $cnmbold;

        return $this;
    }

    /**
     * Get cnmbold
     *
     * @return string 
     */
    public function getCnmbold()
    {
        return $this->cnmbold;
    }

    /**
     * Set cnmbnew
     *
     * @param string $cnmbnew
     * @return ActivoFijoMovimMasivoDet
     */
    public function setCnmbnew($cnmbnew)
    {
        $this->cnmbnew = $cnmbnew;

        return $this;
    }

    /**
     * Get cnmbnew
     *
     * @return string 
     */
    public function getCnmbnew()
    {
        return $this->cnmbnew;
    }
}
