<?php

namespace webServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RhTemporalSubsidio
 *
 * @ORM\Table(name="RH_Temporal_Subsidio")
 * @ORM\Entity
 */
class RhTemporalSubsidio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Item", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $item;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano", type="smallint", nullable=false)
     */
    private $ano;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes", type="smallint", nullable=false)
     */
    private $mes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo_Pago", type="smallint", nullable=false)
     */
    private $tipoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Expediente", type="string", length=15, nullable=false)
     */
    private $idExpediente;

    /**
     * @var string
     *
     * @ORM\Column(name="Cantidad", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $cantidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Pagado", type="integer", nullable=false)
     */
    private $importePagado;

    /**
     * @var integer
     *
     * @ORM\Column(name="Deducciones", type="integer", nullable=false)
     */
    private $deducciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="Neto_a_Cobrar", type="integer", nullable=false)
     */
    private $netoACobrar;

    /**
     * @var integer
     *
     * @ORM\Column(name="Perfeccionamiento", type="integer", nullable=false)
     */
    private $perfeccionamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="Dias_Acumulado_Mes", type="decimal", precision=8, scale=4, nullable=false)
     */
    private $diasAcumuladoMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Salario_Acumulado_Mes", type="integer", nullable=false)
     */
    private $salarioAcumuladoMes;

    /**
     * @var integer
     *
     * @ORM\Column(name="Tipo", type="smallint", nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="Marca", type="string", length=1, nullable=false)
     */
    private $marca;

    /**
     * @var string
     *
     * @ORM\Column(name="Id_Clave", type="string", length=5, nullable=false)
     */
    private $idClave;

    /**
     * @var integer
     *
     * @ORM\Column(name="Ano_Tarjeta", type="smallint", nullable=false)
     */
    private $anoTarjeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Mes_Tarjeta", type="smallint", nullable=false)
     */
    private $mesTarjeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Importe_Tarjeta", type="integer", nullable=false)
     */
    private $importeTarjeta;

    /**
     * @var integer
     *
     * @ORM\Column(name="Clasificacion_Categ_Ocupac", type="smallint", nullable=false)
     */
    private $clasificacionCategOcupac;

    /**
     * @var string
     *
     * @ORM\Column(name="AjusteCentavos", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $ajustecentavos;



    /**
     * Get item
     *
     * @return integer 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     * @return RhTemporalSubsidio
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
     * @return RhTemporalSubsidio
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
     * Set tipoPago
     *
     * @param integer $tipoPago
     * @return RhTemporalSubsidio
     */
    public function setTipoPago($tipoPago)
    {
        $this->tipoPago = $tipoPago;

        return $this;
    }

    /**
     * Get tipoPago
     *
     * @return integer 
     */
    public function getTipoPago()
    {
        return $this->tipoPago;
    }

    /**
     * Set idExpediente
     *
     * @param string $idExpediente
     * @return RhTemporalSubsidio
     */
    public function setIdExpediente($idExpediente)
    {
        $this->idExpediente = $idExpediente;

        return $this;
    }

    /**
     * Get idExpediente
     *
     * @return string 
     */
    public function getIdExpediente()
    {
        return $this->idExpediente;
    }

    /**
     * Set cantidad
     *
     * @param string $cantidad
     * @return RhTemporalSubsidio
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
     * Set importePagado
     *
     * @param integer $importePagado
     * @return RhTemporalSubsidio
     */
    public function setImportePagado($importePagado)
    {
        $this->importePagado = $importePagado;

        return $this;
    }

    /**
     * Get importePagado
     *
     * @return integer 
     */
    public function getImportePagado()
    {
        return $this->importePagado;
    }

    /**
     * Set deducciones
     *
     * @param integer $deducciones
     * @return RhTemporalSubsidio
     */
    public function setDeducciones($deducciones)
    {
        $this->deducciones = $deducciones;

        return $this;
    }

    /**
     * Get deducciones
     *
     * @return integer 
     */
    public function getDeducciones()
    {
        return $this->deducciones;
    }

    /**
     * Set netoACobrar
     *
     * @param integer $netoACobrar
     * @return RhTemporalSubsidio
     */
    public function setNetoACobrar($netoACobrar)
    {
        $this->netoACobrar = $netoACobrar;

        return $this;
    }

    /**
     * Get netoACobrar
     *
     * @return integer 
     */
    public function getNetoACobrar()
    {
        return $this->netoACobrar;
    }

    /**
     * Set perfeccionamiento
     *
     * @param integer $perfeccionamiento
     * @return RhTemporalSubsidio
     */
    public function setPerfeccionamiento($perfeccionamiento)
    {
        $this->perfeccionamiento = $perfeccionamiento;

        return $this;
    }

    /**
     * Get perfeccionamiento
     *
     * @return integer 
     */
    public function getPerfeccionamiento()
    {
        return $this->perfeccionamiento;
    }

    /**
     * Set diasAcumuladoMes
     *
     * @param string $diasAcumuladoMes
     * @return RhTemporalSubsidio
     */
    public function setDiasAcumuladoMes($diasAcumuladoMes)
    {
        $this->diasAcumuladoMes = $diasAcumuladoMes;

        return $this;
    }

    /**
     * Get diasAcumuladoMes
     *
     * @return string 
     */
    public function getDiasAcumuladoMes()
    {
        return $this->diasAcumuladoMes;
    }

    /**
     * Set salarioAcumuladoMes
     *
     * @param integer $salarioAcumuladoMes
     * @return RhTemporalSubsidio
     */
    public function setSalarioAcumuladoMes($salarioAcumuladoMes)
    {
        $this->salarioAcumuladoMes = $salarioAcumuladoMes;

        return $this;
    }

    /**
     * Get salarioAcumuladoMes
     *
     * @return integer 
     */
    public function getSalarioAcumuladoMes()
    {
        return $this->salarioAcumuladoMes;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return RhTemporalSubsidio
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set marca
     *
     * @param string $marca
     * @return RhTemporalSubsidio
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string 
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set idClave
     *
     * @param string $idClave
     * @return RhTemporalSubsidio
     */
    public function setIdClave($idClave)
    {
        $this->idClave = $idClave;

        return $this;
    }

    /**
     * Get idClave
     *
     * @return string 
     */
    public function getIdClave()
    {
        return $this->idClave;
    }

    /**
     * Set anoTarjeta
     *
     * @param integer $anoTarjeta
     * @return RhTemporalSubsidio
     */
    public function setAnoTarjeta($anoTarjeta)
    {
        $this->anoTarjeta = $anoTarjeta;

        return $this;
    }

    /**
     * Get anoTarjeta
     *
     * @return integer 
     */
    public function getAnoTarjeta()
    {
        return $this->anoTarjeta;
    }

    /**
     * Set mesTarjeta
     *
     * @param integer $mesTarjeta
     * @return RhTemporalSubsidio
     */
    public function setMesTarjeta($mesTarjeta)
    {
        $this->mesTarjeta = $mesTarjeta;

        return $this;
    }

    /**
     * Get mesTarjeta
     *
     * @return integer 
     */
    public function getMesTarjeta()
    {
        return $this->mesTarjeta;
    }

    /**
     * Set importeTarjeta
     *
     * @param integer $importeTarjeta
     * @return RhTemporalSubsidio
     */
    public function setImporteTarjeta($importeTarjeta)
    {
        $this->importeTarjeta = $importeTarjeta;

        return $this;
    }

    /**
     * Get importeTarjeta
     *
     * @return integer 
     */
    public function getImporteTarjeta()
    {
        return $this->importeTarjeta;
    }

    /**
     * Set clasificacionCategOcupac
     *
     * @param integer $clasificacionCategOcupac
     * @return RhTemporalSubsidio
     */
    public function setClasificacionCategOcupac($clasificacionCategOcupac)
    {
        $this->clasificacionCategOcupac = $clasificacionCategOcupac;

        return $this;
    }

    /**
     * Get clasificacionCategOcupac
     *
     * @return integer 
     */
    public function getClasificacionCategOcupac()
    {
        return $this->clasificacionCategOcupac;
    }

    /**
     * Set ajustecentavos
     *
     * @param string $ajustecentavos
     * @return RhTemporalSubsidio
     */
    public function setAjustecentavos($ajustecentavos)
    {
        $this->ajustecentavos = $ajustecentavos;

        return $this;
    }

    /**
     * Get ajustecentavos
     *
     * @return string 
     */
    public function getAjustecentavos()
    {
        return $this->ajustecentavos;
    }
}
