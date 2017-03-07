<?php

namespace integralBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InfocorporativaTaller
 *
 * @ORM\Table(name="InfoCorporativa_Taller")
 * @ORM\Entity
 */
class InfocorporativaTaller
{
    /**
     * @var string
     *
     * @ORM\Column(name="CodAgrupa", type="string", length=5, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codagrupa;

    /**
     * @var string
     *
     * @ORM\Column(name="DesAgrupa", type="string", length=50, nullable=false)
     */
    private $desagrupa;

    /**
     * @var string
     *
     * @ORM\Column(name="CodAlmacen", type="string", length=5, nullable=false)
     */
    private $codalmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="DesAlmacen", type="string", length=50, nullable=false)
     */
    private $desalmacen;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="integer", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="integer", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Contador", type="integer", nullable=false)
     */
    private $contador;

    /**
     * @var integer
     *
     * @ORM\Column(name="Id_Otrabajo", type="integer", nullable=false)
     */
    private $idOtrabajo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Apertura", type="datetime", nullable=false)
     */
    private $fechaApertura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Cierre", type="datetime", nullable=false)
     */
    private $fechaCierre;

    /**
     * @var integer
     *
     * @ORM\Column(name="Confirmada", type="smallint", nullable=false)
     */
    private $confirmada;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Cliente", type="string", length=15, nullable=false)
     */
    private $idCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Cliente", type="string", length=50, nullable=false)
     */
    private $descCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Comercial", type="string", length=5, nullable=false)
     */
    private $idComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Comercial", type="string", length=50, nullable=false)
     */
    private $descComercial;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMB", type="integer", nullable=false)
     */
    private $importetotalmb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteTotalMC", type="integer", nullable=false)
     */
    private $importetotalmc;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteFacturadoMB", type="integer", nullable=false)
     */
    private $importefacturadomb;

    /**
     * @var integer
     *
     * @ORM\Column(name="ImporteFacturadoMC", type="integer", nullable=false)
     */
    private $importefacturadomc;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Estado", type="string", length=15, nullable=false)
     */
    private $idEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Estado", type="string", length=50, nullable=false)
     */
    private $descEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clasificacion", type="string", length=10, nullable=false)
     */
    private $idClasificacion;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Clasificacion", type="string", length=50, nullable=false)
     */
    private $descClasificacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="Estadia", type="integer", nullable=false)
     */
    private $estadia;

    /**
     * @var string
     *
     * @ORM\Column(name="Cant_Horas", type="decimal", precision=18, scale=0, nullable=false)
     */
    private $cantHoras;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Brigada", type="string", length=10, nullable=false)
     */
    private $idBrigada;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Brigada", type="string", length=50, nullable=false)
     */
    private $descBrigada;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Equipo", type="string", length=20, nullable=false)
     */
    private $idEquipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Desc_Equipo", type="string", length=60, nullable=false)
     */
    private $descEquipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Cant_Dias_Estado", type="integer", nullable=false)
     */
    private $cantDiasEstado;

    /**
     * @var uniqueidentifier
     *
     * @ORM\Column(name="IdSync", type="uniqueidentifier", nullable=false)
     */
    private $idsync;

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
     * Get codagrupa
     *
     * @return string 
     */
    public function getCodagrupa()
    {
        return $this->codagrupa;
    }

    /**
     * Set desagrupa
     *
     * @param string $desagrupa
     * @return InfocorporativaTaller
     */
    public function setDesagrupa($desagrupa)
    {
        $this->desagrupa = $desagrupa;

        return $this;
    }

    /**
     * Get desagrupa
     *
     * @return string 
     */
    public function getDesagrupa()
    {
        return $this->desagrupa;
    }

    /**
     * Set codalmacen
     *
     * @param string $codalmacen
     * @return InfocorporativaTaller
     */
    public function setCodalmacen($codalmacen)
    {
        $this->codalmacen = $codalmacen;

        return $this;
    }

    /**
     * Get codalmacen
     *
     * @return string 
     */
    public function getCodalmacen()
    {
        return $this->codalmacen;
    }

    /**
     * Set desalmacen
     *
     * @param string $desalmacen
     * @return InfocorporativaTaller
     */
    public function setDesalmacen($desalmacen)
    {
        $this->desalmacen = $desalmacen;

        return $this;
    }

    /**
     * Get desalmacen
     *
     * @return string 
     */
    public function getDesalmacen()
    {
        return $this->desalmacen;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return InfocorporativaTaller
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return integer 
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set mes
     *
     * @param integer $mes
     * @return InfocorporativaTaller
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
     * Set contador
     *
     * @param integer $contador
     * @return InfocorporativaTaller
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
     * Set idOtrabajo
     *
     * @param integer $idOtrabajo
     * @return InfocorporativaTaller
     */
    public function setIdOtrabajo($idOtrabajo)
    {
        $this->idOtrabajo = $idOtrabajo;

        return $this;
    }

    /**
     * Get idOtrabajo
     *
     * @return integer 
     */
    public function getIdOtrabajo()
    {
        return $this->idOtrabajo;
    }

    /**
     * Set fechaApertura
     *
     * @param \DateTime $fechaApertura
     * @return InfocorporativaTaller
     */
    public function setFechaApertura($fechaApertura)
    {
        $this->fechaApertura = $fechaApertura;

        return $this;
    }

    /**
     * Get fechaApertura
     *
     * @return \DateTime 
     */
    public function getFechaApertura()
    {
        return $this->fechaApertura;
    }

    /**
     * Set fechaCierre
     *
     * @param \DateTime $fechaCierre
     * @return InfocorporativaTaller
     */
    public function setFechaCierre($fechaCierre)
    {
        $this->fechaCierre = $fechaCierre;

        return $this;
    }

    /**
     * Get fechaCierre
     *
     * @return \DateTime 
     */
    public function getFechaCierre()
    {
        return $this->fechaCierre;
    }

    /**
     * Set confirmada
     *
     * @param integer $confirmada
     * @return InfocorporativaTaller
     */
    public function setConfirmada($confirmada)
    {
        $this->confirmada = $confirmada;

        return $this;
    }

    /**
     * Get confirmada
     *
     * @return integer 
     */
    public function getConfirmada()
    {
        return $this->confirmada;
    }

    /**
     * Set idCliente
     *
     * @param string $idCliente
     * @return InfocorporativaTaller
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return string 
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set descCliente
     *
     * @param string $descCliente
     * @return InfocorporativaTaller
     */
    public function setDescCliente($descCliente)
    {
        $this->descCliente = $descCliente;

        return $this;
    }

    /**
     * Get descCliente
     *
     * @return string 
     */
    public function getDescCliente()
    {
        return $this->descCliente;
    }

    /**
     * Set idComercial
     *
     * @param string $idComercial
     * @return InfocorporativaTaller
     */
    public function setIdComercial($idComercial)
    {
        $this->idComercial = $idComercial;

        return $this;
    }

    /**
     * Get idComercial
     *
     * @return string 
     */
    public function getIdComercial()
    {
        return $this->idComercial;
    }

    /**
     * Set descComercial
     *
     * @param string $descComercial
     * @return InfocorporativaTaller
     */
    public function setDescComercial($descComercial)
    {
        $this->descComercial = $descComercial;

        return $this;
    }

    /**
     * Get descComercial
     *
     * @return string 
     */
    public function getDescComercial()
    {
        return $this->descComercial;
    }

    /**
     * Set importetotalmb
     *
     * @param integer $importetotalmb
     * @return InfocorporativaTaller
     */
    public function setImportetotalmb($importetotalmb)
    {
        $this->importetotalmb = $importetotalmb;

        return $this;
    }

    /**
     * Get importetotalmb
     *
     * @return integer 
     */
    public function getImportetotalmb()
    {
        return $this->importetotalmb;
    }

    /**
     * Set importetotalmc
     *
     * @param integer $importetotalmc
     * @return InfocorporativaTaller
     */
    public function setImportetotalmc($importetotalmc)
    {
        $this->importetotalmc = $importetotalmc;

        return $this;
    }

    /**
     * Get importetotalmc
     *
     * @return integer 
     */
    public function getImportetotalmc()
    {
        return $this->importetotalmc;
    }

    /**
     * Set importefacturadomb
     *
     * @param integer $importefacturadomb
     * @return InfocorporativaTaller
     */
    public function setImportefacturadomb($importefacturadomb)
    {
        $this->importefacturadomb = $importefacturadomb;

        return $this;
    }

    /**
     * Get importefacturadomb
     *
     * @return integer 
     */
    public function getImportefacturadomb()
    {
        return $this->importefacturadomb;
    }

    /**
     * Set importefacturadomc
     *
     * @param integer $importefacturadomc
     * @return InfocorporativaTaller
     */
    public function setImportefacturadomc($importefacturadomc)
    {
        $this->importefacturadomc = $importefacturadomc;

        return $this;
    }

    /**
     * Get importefacturadomc
     *
     * @return integer 
     */
    public function getImportefacturadomc()
    {
        return $this->importefacturadomc;
    }

    /**
     * Set idEstado
     *
     * @param string $idEstado
     * @return InfocorporativaTaller
     */
    public function setIdEstado($idEstado)
    {
        $this->idEstado = $idEstado;

        return $this;
    }

    /**
     * Get idEstado
     *
     * @return string 
     */
    public function getIdEstado()
    {
        return $this->idEstado;
    }

    /**
     * Set descEstado
     *
     * @param string $descEstado
     * @return InfocorporativaTaller
     */
    public function setDescEstado($descEstado)
    {
        $this->descEstado = $descEstado;

        return $this;
    }

    /**
     * Get descEstado
     *
     * @return string 
     */
    public function getDescEstado()
    {
        return $this->descEstado;
    }

    /**
     * Set idClasificacion
     *
     * @param string $idClasificacion
     * @return InfocorporativaTaller
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
     * Set descClasificacion
     *
     * @param string $descClasificacion
     * @return InfocorporativaTaller
     */
    public function setDescClasificacion($descClasificacion)
    {
        $this->descClasificacion = $descClasificacion;

        return $this;
    }

    /**
     * Get descClasificacion
     *
     * @return string 
     */
    public function getDescClasificacion()
    {
        return $this->descClasificacion;
    }

    /**
     * Set estadia
     *
     * @param integer $estadia
     * @return InfocorporativaTaller
     */
    public function setEstadia($estadia)
    {
        $this->estadia = $estadia;

        return $this;
    }

    /**
     * Get estadia
     *
     * @return integer 
     */
    public function getEstadia()
    {
        return $this->estadia;
    }

    /**
     * Set cantHoras
     *
     * @param string $cantHoras
     * @return InfocorporativaTaller
     */
    public function setCantHoras($cantHoras)
    {
        $this->cantHoras = $cantHoras;

        return $this;
    }

    /**
     * Get cantHoras
     *
     * @return string 
     */
    public function getCantHoras()
    {
        return $this->cantHoras;
    }

    /**
     * Set idBrigada
     *
     * @param string $idBrigada
     * @return InfocorporativaTaller
     */
    public function setIdBrigada($idBrigada)
    {
        $this->idBrigada = $idBrigada;

        return $this;
    }

    /**
     * Get idBrigada
     *
     * @return string 
     */
    public function getIdBrigada()
    {
        return $this->idBrigada;
    }

    /**
     * Set descBrigada
     *
     * @param string $descBrigada
     * @return InfocorporativaTaller
     */
    public function setDescBrigada($descBrigada)
    {
        $this->descBrigada = $descBrigada;

        return $this;
    }

    /**
     * Get descBrigada
     *
     * @return string 
     */
    public function getDescBrigada()
    {
        return $this->descBrigada;
    }

    /**
     * Set idEquipo
     *
     * @param string $idEquipo
     * @return InfocorporativaTaller
     */
    public function setIdEquipo($idEquipo)
    {
        $this->idEquipo = $idEquipo;

        return $this;
    }

    /**
     * Get idEquipo
     *
     * @return string 
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }

    /**
     * Set descEquipo
     *
     * @param string $descEquipo
     * @return InfocorporativaTaller
     */
    public function setDescEquipo($descEquipo)
    {
        $this->descEquipo = $descEquipo;

        return $this;
    }

    /**
     * Get descEquipo
     *
     * @return string 
     */
    public function getDescEquipo()
    {
        return $this->descEquipo;
    }

    /**
     * Set cantDiasEstado
     *
     * @param integer $cantDiasEstado
     * @return InfocorporativaTaller
     */
    public function setCantDiasEstado($cantDiasEstado)
    {
        $this->cantDiasEstado = $cantDiasEstado;

        return $this;
    }

    /**
     * Get cantDiasEstado
     *
     * @return integer 
     */
    public function getCantDiasEstado()
    {
        return $this->cantDiasEstado;
    }

    /**
     * Set idsync
     *
     * @param uniqueidentifier $idsync
     * @return InfocorporativaTaller
     */
    public function setIdsync($idsync)
    {
        $this->idsync = $idsync;

        return $this;
    }

    /**
     * Get idsync
     *
     * @return uniqueidentifier 
     */
    public function getIdsync()
    {
        return $this->idsync;
    }

    /**
     * Set idCcosto
     *
     * @param string $idCcosto
     * @return InfocorporativaTaller
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
     * @return InfocorporativaTaller
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
}
